<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
 <body>
   <?php
    class car{
        var $k=10;
        function __construct(){
            echo $this->k;
        }
    }
    $ko=new car();
    ?>
 </body>
</html>