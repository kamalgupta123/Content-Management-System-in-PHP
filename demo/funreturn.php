<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      function add($number1,$number2){
          $sum=$number1+$number2;
          return $sum;
      }
    $result=add(100,98);
    echo $result."<br>";
    $result=$result+add(0,100);
    echo $result;
    //r to l v assign
    //v outside function
    ?>
</body>
</html>