<?php include "db.php";?>

 <?php
  function create(){
      global $connection;
   if(isset($_POST['submit'])){   
       $username=$_POST['username'];
       $password=$_POST['password'];
       $username=mysqli_real_escape_string($connection,$username);//remov commas dont afftect db ()
       $password=mysqli_real_escape_string($connection,$password);
       $hashFormat="$2y$10$";//10 tyms search page for password password inside diff
       $salt="iusesomecrazystrings22";
       $hashF_and_salt=$hashFormat.$salt;
       $password=crypt($password,$hashF_and_salt);
       if($connection){
            $query="INSERT INTO users(username,password)";
           $query.="VALUES ('$username','$password')";
           $result=mysqli_query($connection,$query);//query in db in table already made
           if($result){
               echo "record created";
           }
           else{
               echo "error";
           }
       }
       else{
            die("error");
       }
       
   }
  }
  
 function selectoptionsid(){
  global $connection;//use outside var inside function
  $query="SELECT * FROM users";
  $result=mysqli_query($connection,$query);//query in db in table already made
  if(!$result){
        echo "error";
               }
 while($row=mysqli_fetch_assoc($result))
   {
     $id=$row['ID'];
     echo "<option value='$id'>$id</option>";
     }
       
 }

function update(){
    if(isset($_POST['submit'])){
     global $connection;
    $username=$_POST['username'];
      $password=$_POST['password'];
      $id=$_POST['id'];
      $query="UPDATE users SET ";
      $query.="username='$username',password='$password' ";
      $query.="WHERE ID=$id ";
      $result=mysqli_query($connection,$query);
      if(!$result){
          echo "error";
      }
     else{
               echo "record updated";
           }
    }
}
function delete(){
    if(isset($_POST['submit'])){
     global $connection;
    $username=$_POST['username'];
      $password=$_POST['password'];
      $id=$_POST['id'];
      $query="DELETE FROM users ";
      $query.="WHERE ID=$id ";
      $result=mysqli_query($connection,$query);
      if(!$result){
          echo "error";
      }
        else{
               echo "record deleted";
           }
}
}

?>


