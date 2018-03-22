<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $server="localhost";
    $username="root";
    $password="";
    $dbase="mst1";
    
    $conn=mysqli_connect($server,$username,$password,$dbase);
    if($conn){
        echo "database connected";
    }
    else{
        echo "database not connected";
    }
    $query="CREATE TABLE kamal (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30),password VARCHAR(30))";
    $q_ex=mysqli_query($conn,$query);
    if($q_ex){
        echo "table created";
    }
    else{
        echo "table not created";
    }
    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $password=$_POST['password'];
        $query="INSERT INTO kamal(name,password) VALUES('$name','$password')";
        $exe=mysqli_query($conn,$query);
        if($exe){
            echo "inserted";
        }
        else{
            echo "not inserted";
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>