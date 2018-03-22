<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //make a local variable that destroys after function global.
     $x=5;
     function kamal()
     {
       global $x;
       $x=4;
     }
     kamal();
     echo $x;
    ?>
</body>
</html>