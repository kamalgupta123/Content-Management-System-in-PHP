<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
    class car{
        var $k;
        function kamal(){
            echo $this->k=10;
        }
    }
    $ten=new car();
    $ten->kamal();
    echo $ten->k=5;
   ?>
</body>
</html>