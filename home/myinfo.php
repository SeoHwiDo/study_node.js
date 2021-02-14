<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); 
    $query = "select * from userList";
    $result = $mysqli->query($query);
    $row=mysqli_fetch_assoc($result);
    $id=$row['userID'];
    $age=$row['age'];
    $phone=$row['phone'];
    $per=$row['permit'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    if(isset($_SESSION['userid'])) {  
       
        echo 'ID:'.$id.'\n';
        echo '나이:'.$age.'\n';
        echo '전화:'.$phone.'\n';
        echo '권한:'.$permit;
    }else{
?>
<script>
alert('로그인 후 확인');
history.back();
</script>
<?php
    }
?>
</body>
</html>