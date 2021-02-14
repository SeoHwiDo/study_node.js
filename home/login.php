<?php
  require 'hostinfo.php';
  session_start();
    //입력 받은 id와 password
    $logID=$_POST['logID'];
    $logPass = $_GET[ 'logPass' ];
    
 
        //아이디가 있는지 검사
        $query = "select * from userList where userID='{$logID}'";
        $result = mysqli_query($mysqli, $query);

        $row = mysqli_fetch_array($result);
        $hashedPassword = $row['pass'];
        $row['userID'];

        foreach($row as $key => $r){
        echo "{$key} : {$r} <br>";
        }
 
        $passwordResult = password_verify($logPass, $hashedPassword);
        if ($passwordResult === true) {
        // 로그인 성공
        // 세션에 id 저장
        session_start();
        $_SESSION['userID'] = $row['userID'];
        print_r($_SESSION);
        echo $_SESSION['userID'];
    
?>
        <script>
        alert("로그인에 성공하였습니다.")
        location.href = "media_page\media_index.html";
        </script>
<?php
        } else {
        // 로그인 실패 
?>
        <script>
          alert("로그인에 실패하였습니다");
        </script>
<?php
        }
?>