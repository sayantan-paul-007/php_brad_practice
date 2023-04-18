<!-- Superglobals -->
<?php 
 if($_SERVER['SERVER_PORT']== 80 and $_SERVER['HTTP_HOST'] == 'localhost'){
    echo 'Incorrect Port and Host';
 }
 else{
    echo 'Correct Port and Host';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $_SERVER['HTTP_HOST'] ?></li>
        <li><?php echo $_SERVER['DOCUMENT_ROOT']?></li>
        <li><?php echo $_SERVER['PHP_SELF'] ?></li>
        <li><?php echo $_SERVER['REQUEST_URI'] ?></li>
        <li><?php echo $_SERVER['SERVER_PORT'] ?></li>
        <li><?php echo $_SERVER['REMOTE_PORT'] ?></li>
        <li><?php echo $_SERVER['SERVER_SOFTWARE'] ?></li>
    </ul>    
</body>
</html>