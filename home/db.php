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
     
      $id = $_POST[ 'id' ];
      $pass = $_POST[ 'pass' ];
      $age = $_POST[ 'age' ];
      $mail = $_POST[ 'mail' ];
      
      // mysqli_connect_errno($mysqli)
      // 
      if(is_null($id)){
        echo '<h1>Fail!</h1>';
      
      }else{
        require 'hostinfo.php';
        if ($mysqli->connect_errno){
          die('Connect Error: ' . $mysqli->connect_errno);
      }else{
        $sql = "INSERT INTO userList ( id, pass, age, mail ) VALUES ( '$id', '$pass', '$age', '$mail' );";
        mysqli_query( $conn, $sql );
        echo '<h1>Success!</h1>';
      }
  
       
      }
    ?>
    <p>
      <a href="signup.php">signup</a>
     </p>
  </body>
</html>