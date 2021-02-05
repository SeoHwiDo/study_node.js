<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$conn = mysqli_connect('222.110.111.54', 'geoni24', 'pass','geoni24','14103');
if(!$conn){
    echo "연결 실패";
}else{
    echo "연결 성공";
}
?>

</body>
</html>
