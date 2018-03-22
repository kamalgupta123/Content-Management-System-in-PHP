<?php
 //get info from url
 //get var has url para
 //click on url change url para
 //if id is this take to this page id in var automatic

  print_r($_GET);//in this page get url paras in this page //?strt &seperate
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $id=10;
    $button="clcik here tangi charlie";
    ?>
    <a href="url.php?id=<?php echo $id;?>"><?php echo $button;?></a>
</body>
</html>