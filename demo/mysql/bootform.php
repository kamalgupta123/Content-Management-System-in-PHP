<?php
 
   if(isset($_POST['submit'])){
       $username=$_POST['username'];
       $password=$_POST['password'];
      $connection=mysqli_connect('localhost','root','','loginapp');
       if($connection){
           echo "connected";
       }
       else{
           echo "error";
       }
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <form action="bootform.php" method="post">
                 <div class="form-group">
                  <label for="username">username:</label>
                  <input type="text" name="username" placeholder="username" class="form-control">
                  </div>
                  <div class="form-group">
                  <label for="password">password:</label>
                  <input type="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
              </form>
            </div>
        </div>
    </div>
</body>
</html>