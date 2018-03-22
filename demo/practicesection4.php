<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     function kam($num1,$num2){
         $sum=$num1+$num2;
         return $sum;
     }
     $kom=kam(10,20);
     echo $kom."<br>";
    function run($hello){
        echo $hello;
    }
    run("kamal");
    ?>
</body>
</html>