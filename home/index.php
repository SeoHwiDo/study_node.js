<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php
       
        while(true){
            $date=date('Y-m-d H:i:s');
        }
        echo $date;
        
        
        $name="test<br>";
        echo "hello".$name."<br>"
    ?>
    <h1>PHP test</h1>
    <ol>
        <li><h3><a href="index.php?id=test1">test1</a></h3></li>
        <li><h3><a href="index.php?id=test2">test2</a></h3></li>
        <li><h3><a href="index.php?id=test3">test3</a></h3></li>
    </ol>
    <?php echo $_GET['id']; ?>

</body>
</html>