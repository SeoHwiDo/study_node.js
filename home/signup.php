<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>singup_ok</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <?php
      //require 'pass.php';

      $userID = $_POST[ 'userID' ];
      $pass = $_POST[ 'pass' ];
      $age = $_POST[ 'age' ];
      $phone = $_POST[ 'phone' ];
      $oriPass = $_POST[ 'pass' ];
      $pass=password_hash ( $oriPass , PASSWORD_DEFAULT );
      // mysqli_connect_errno($mysqli)
      // 
      if(is_null($userID)){
        echo '<h1>Fail!</h1>';
      
      }else{
        require 'hostinfo.php';
	 if ($mysqli->connect_errno){
          die('Connect Error: ' . $mysqli->connect_errno);
     	 }else{
       	   $sql = "INSERT INTO userList ( userID, pass, age, phone ) VALUES ( '$userID', '$pass', '$age', '$phone' );";
       	   mysqli_query( $mysqli, $sql );
           echo '<h1>Success!</h1>';
      }
  
       
      }
    ?>
    <p>
      <a href="index.html">signup</a>
     </p>
  </body>
</html>
