<?php
      $connection=mysqli_connect('localhost','root','','loginapp');//db
       if($connection){
            $query="SELECT * FROM users";
           $result=mysqli_query($connection,$query);//query in db in table already made
           if($result){
               echo "query executed";
           }
           else{
               echo "error";
           }
       }
       else{
            die("error");
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
                   <?php
                      while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <pre>
                         <?php
                          print_r($row);
                          ?>
                    </pre>
                     <?php
                      }
                    ?>
            </div>
        </div>
    </div>
</body>
</html>