<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     $connection=mysqli_connect('localhost','root','','latest');
    if($connection){
        $query="SELECT * FROM renu";
        $result=mysqli_query($connection,$query);
         while($row=mysqli_fetch_assoc($result)){
             print_r($row);
         }
    }
    
    
    
    ?>
</body>
</html>