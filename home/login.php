<?php
  require 'hostinfo.php';
  session_start();
  $connect = mysqli_connect($host, $user, $pw, $dbName) or die("fail");
    //입력 받은 id와 password
    $logID=$_POST['logID'];
    $oriPass = $_GET[ 'logPass' ];
    $logPass=password_hash ( $oriPass , PASSWORD_DEFAULT );
    
 
        //아이디가 있는지 검사
        $query = "select * from userList where userID='$logID'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pass']==$logPass){
                        $_SESSION['userID']=$logID;
                        if(isset($_SESSION['userID'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("index.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }
 
 
?>
