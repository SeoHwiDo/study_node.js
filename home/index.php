<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'function.php' ?>
    <title>Document</title>
</head>
<body>
<?php    
    if(isset($_SESSION['userid'])) {
?>
    <button onclick="logout()">로그아웃</button>
<?php
    echo $_SESSION['userid'];
?>님 안녕하세요<br/>
<?php
    }
    else {
?>          
        <button onclick="location.href='login.html'">
        로그인</button><br/>
<?php   
    }
?>
<div>
    <center>
    <h1>geoni24</h1>
    </center>
</div>
<div id='navigate'>
    <button onclick="permitLink('myinfo.php')">내정보</button>
    <button onclick="permitLink('media_page/media_index.html')">영상</button>
    <button onclick="permitLink('board.php')">게시판</button>
    <button onclick="permitLink('Game/game_index.php')">게임</button>
</body>
</html>
