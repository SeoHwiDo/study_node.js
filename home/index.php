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
        <button onclick="location.href='logout.php'">로그아웃</button>
<?php
        echo $_SESSION['userid'];
?>      님 안녕하세요<br/>
<?php 
        if(!isset($_SESSION['mail'])){
?>
            <script>alert("'내정보'들어가서 '정보수정' 통해서 메일 정보 기입 바람")</script>
<?php
        }else{
            if($_SESSION['permit']==0){ 
?>
            <button onclick="rqPermit()">권한 요청</button>
<?php
            }
        }
?>
    
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
    <button onclick="permitLink('myinfo.php',0)">내정보</button>
    <button onclick="permitLink('media_page/media_index.html',1)">영상</button>
    <button onclick="permitLink('board.php',1)">게시판</button>
    <button onclick="permitLink('Game/game_index.php',1)">게임</button>
</body>
</html>
