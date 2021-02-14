<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    if(isset($_SESSION['userid'])) {  
?>
<script>  
        document.write(<?=$row['userID']?>); 
        document.write(<?=$row['age']?>   ); 
        document.write(<?=$row['phone']?> ); 
        document.write(<?=$row['permit']?>); 
</script> 

<?php 
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