<?php
  //cookies set by websites when opened in browser when website reopen website modify according to cookie in browser for user
 $name='kamal';
 $value=100;
 $expiration=time()+(60*60*24*7);
 setcookie($name,$value,$expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    //if cookie is saved do this next tym open your page you know cokkie save if isset do this
    if(isset($_COOKIE['kamal'])){
     $someone=$_COOKIE['kamal'];
     echo $someone; 
    }
    else{
       $someone=""; 
    }
    
    ?>
</body>
</html>