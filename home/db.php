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
      echo 'point1';
      $id = $_POST[ 'id' ];
      $pass = $_POST[ 'pass' ];
      $age = $_POST[ 'age' ];
      $mail = $_POST[ 'mail' ];
      $test=1;
      echo $id;
      if(is_null($test)){
        echo 'point2';
      }else{
        echo 'point3';
      }
      if ( is_null( $id ) ) {
        echo '<h1>Fail!</h1>';
      } else {
        $jb_conn = mysqli_connect( 'localhost', 'username', 'password', 'signup' );
        $jb_sql = "INSERT INTO usertbl ( id, pass, age, mail ) VALUES ( '$id', '$pass', '$age', '$mail', '$gender', '$hire_date' );";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>Success!</h1>';
      }
    ?>
    <p>
      <a href="signup.php">signup</a>
     </p>
  </body>
</html>