<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
     class car{
         var $wheel;
         var $kom;
         function loper(){
            echo $this->wheel;
         }
     }
    class person extends car{
      var $wheel=30;//override variables and methods in the child class.
    }
    $p=new person();
    $p->loper();
    ?>
</body>
</html>