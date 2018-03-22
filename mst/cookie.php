<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     setcookie("name","kamal",time()+60*60);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
    ?>
</body>
</html>