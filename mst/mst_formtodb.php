<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      $server="localhost";
      $user="root";
      $pass="";
      $datab="mst";
    $conn=mysqli_connect($server,$user,$pass,$datab);
    if($conn){
        echo "connected";
    }
    else{
        echo "not connected";
    }
    $query="CREATE TABLE form (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30),email VARCHAR(30))";
    $table=mysqli_query($conn,$query);
    if($table){
        echo "table created";
    }
    else{
        echo "table not created";
    }
    ?>
    <?php
      if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $email = $_POST['email']'
        '
      }
   
    ?>
    <form action="" method="post">
        <input type="name" name="username">
        <input type="email" name="email">
        <input type="submit" name="submit">
    </form>
</body>
</html>