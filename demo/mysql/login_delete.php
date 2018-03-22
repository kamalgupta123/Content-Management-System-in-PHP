<?php include "db.php";?>
 <?php include "functions.php";?>
<?php delete();?>


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
             <h1 class="text-center">Delete</h1>
              <form action="login_delete.php" method="post">
                 <div class="form-group">
                  <label for="username">username:</label>
                  <input type="text" name="username" placeholder="username" class="form-control">
                  </div>
                  <div class="form-group">
                  <label for="password">password:</label>
                  <input type="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <div class="form-group">
                      <select name="id">
                   <?php 
                          selectoptionsid();
                    ?> 
                      </select>
                  </div>
                  <input type="submit" class="btn btn-primary" name="submit" value="delete">
              </form>
            </div>
        </div>
    </div>
</body>
</html>