<?php
if(isset($_GET['kamal'])){
 echo $_GET['kamal'];
}
$name='kamal';
$value=20;
$time=time()+(60*60*24*7);
setcookie($name,$value,$time);

session_start();
 $_SESSION['gupta']=40;
 echo $_SESSION['gupta'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <?php
       if(isset($_COOKIE['kamal']))
       {
           echo $_COOKIE['kamal'];
       }
      ?>
     <a href="practicesection9.php?kamal=gupta">CLICK HERE</a>
</body>
</html>