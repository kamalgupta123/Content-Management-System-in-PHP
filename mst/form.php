<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
     if(isset($_POST['submit'])){
         if(empty($_POST['username'])){
             echo "enter username";
         }
         else{
         $var=$_POST['username'];
         echo $var;
         }
          if(empty($_POST['email'])){
             echo "enter email";
         }
         else{
         $var1=$_POST['email'];
         echo $var1;
         }
     }
    ?>
    <form action=" " method="post">
        <input type="text" name="username">
        <input type="email" name="email">
        <input type= "submit" name="submit">
    </form>
</body>
</html>