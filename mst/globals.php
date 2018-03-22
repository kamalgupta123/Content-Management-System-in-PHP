<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php $num=10;
    function kam(){
        echo $GLOBALS['num'];
    }
    kam();
    ?>
    
</body>
</html>