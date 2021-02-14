<?php
  session_start();
  require 'hostinfo.php';
  //입력 받은 id와 password
  $logID=$_POST['logID'];
  $logPass=$_POST['logPass'];
 
  //아이디가 있는지 검사
  $query = "select * from member where userID='$logID'";
  $result = $mysqli->query($query);

  //아이디가 있다면 비밀번호 검사
  if(mysqli_num_rows($result)==1) {
    $row=mysqli_fetch_assoc($result);
    $hashedPassword = $row['pass'];
    $passwordResult = password_verify($logPass, $hashedPassword);
    //비밀번호가 맞다면 세션 생성
    if($passwordResult===true){
      $_SESSION['userid']=$logID;
      if(isset($_SESSION['userid'])){
?>      
        <script>
          alert("로그인에 성공하였습니다.")
          location.href = "media_page\media_index.html";
        </script>
<?php
      }
      else{
?>
        <script>
          alert("로그인에 실패하였습니다");
          location.href = "index.html";
        </script>
<?php
      }
    }
    else {
?>         
      <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
      </script>
<?php
    }
 
 }
 
  else{
?>       
    <script>
      alert("아이디 혹은 비밀번호가 잘못되었습니다.");
      history.back();
    </script>
<?php
  } 
?>