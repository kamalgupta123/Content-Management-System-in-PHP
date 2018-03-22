<?php include "db.php";?>
 <?php include "functions.php";?>
<?php update(); ?>


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
             <h2 class="text-center">Update</h2>
              <form action="login_update.php" method="post">
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
                  <input type="submit" class="btn btn-primary" name="submit" value="update">
              </form>
            </div>
        </div>
    </div>
</body>
</html>