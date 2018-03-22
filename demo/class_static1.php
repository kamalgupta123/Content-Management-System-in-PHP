<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     class car{
         static $kam;
         function hello(){
             car::$kam=10;
         }
     }
    $new=new car();
    car::hello();
    echo car::$kam;
    ?>
</body>
</html>