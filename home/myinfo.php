<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require 'function.php';
    require 'hostinfo.php';
    $uid = $_SESSION['userid'];
    $query = "select * from userList where userID='$uid'";
    $result = $mysqli->query($query);
    $row=mysqli_fetch_assoc($result);?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    if(isset($_SESSION['userid'])) {  
        $id=$row['userID'];
        $age=$row['age'];
        $phone=$row['phone'];
        $per=$row['permit'];
        $mail=$row['mail'];
        $permit[0]='권한 없음';
        $permit[1]='일반 이용자';
        $permit[2]='부관리자';
        $permit[3]='관리자';
        echo 'ID:'.$id.'<br>';
        echo '나이:'.$age.'<br>';
        echo '전화:'.$phone.'<br>';
        echo '권한:'.$permit[$per].'<br>';
        echo '메일:'.$mail.'<br>';
?>
        <button onclick="modInfo()">정보 수정</button>
<?php
    }
?>
</body>
</html>
