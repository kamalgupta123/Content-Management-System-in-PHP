<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     class Dog{
         var $eye_colors=10;
         var $nose=20;
         var $fur_color=30;
         function ShowAll(){
             echo $this->nose."<br>";
             echo $this->fur_color."<br>";
             echo $this->eye_colors."<br>";
         }
     }
    $o=new Dog();
    $o->ShowAll();
    ?>
</body>
</html>