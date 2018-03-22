<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      //function stores lines to execute again
      //call another function inside
     function myname(){
         calc();
         prin();
     }
    function calc(){
        echo "kamal <br>";
    }
    function prin(){
        echo 312+212;
    }
    myname();
    ?>
</body>
</html>