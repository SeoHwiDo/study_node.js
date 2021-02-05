<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$host = '222.110.111.54';
$user = 'geoni24';
$pw = '';
$dbName = 'geoni24';
$port = '14103';
$mysqli = new mysqli($host, $user, $pw, $dbName, $port);
if($mysqli){
    echo "MySQL 접속 성공";
}else{
    echo "MySQL 접속 실패";
}
?>


</body>
</html>
