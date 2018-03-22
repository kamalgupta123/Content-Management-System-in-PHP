<?php
   if(isset($_POST['submit']))
   {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $minimum=5;
    $maximum=10;
    $name=array("kamal","komal","renu");
    if(strlen($username)<$minimum){
        echo "username should be more than 5";
    }
    if(strlen($username)>$maximum){
        echo "the username should not be more than 10";
    }
    if(!in_array($username,$name)){
        echo "you are not allowed to login";
    }
    else{
        echo "welcome";
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="form_process.php" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>