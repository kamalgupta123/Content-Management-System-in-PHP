<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
       class car{
           public $k;
           protected $x;
           private $o;
           function kamal(){
               echo $k=10;
               echo $x=3;
               echo $o=77;
           }
       }
     class person extends car{
         function k(){
             echo $x=5;
         }
     }
    $zc=new person();
    $c=new car();
    $zc->k();
    echo $c->o=10;
    ?>
</body>
</html>