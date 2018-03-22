<?php  
    function confirm($result)
    {
        global $connect;
        if(!$result){
            die("QUERY FAILED.".mysqli_error($connect));
        }
    }

     function insert_cateogaries(){
     
                            global $connect;
                           if(isset($_POST['submit'])){
                         $cat_title=$_POST['cat_title'];
                             if(!$cat_title){
                                 echo "this field is empty";
                               } 
                               else{
                                   $query="INSERT INTO cateogaries(cat_title)";
                                   $query.="VALUES('{$cat_title}')"; 
                                   $search_query=mysqli_query($connect,$query);
                                   if(!$search_query){
                                       echo "error";
                                   }
                               }
                           }
                        
                           if(isset($_POST['submit'])){
                         $cat_title=$_POST['cat_title'];
                             if(!$cat_title){
                                 echo "this field is empty";
                               } 
                               else{
                                   $query="INSERT INTO cateogaries(cat_title)";
                                   $query.="VALUES('{$cat_title}')"; 
                                   $search_query=mysqli_query($connect,$query);
                                   if(!$search_query){
                                       echo "error";
                                   }
                               }
                           }

 }

function findAllcateogaries(){
    global $connect;
     $query="SELECT * FROM cateogaries";
         $all_cateogaries_x=mysqli_query($connect,$query); 
                                
         while($row=mysqli_fetch_assoc($all_cateogaries_x)){
            $cat_id=$row['cat_id'];
            $cat_title=$row['cat_title'];
             echo "<tr>";
             echo "<td>{$cat_id}</td>";
             echo "<td>{$cat_title}</td>";
             echo "<td><a href='cateogaries.php?delete={$cat_id}'>Delete</a></td>";
             echo "<td><a href='cateogaries.php?Edit={$cat_id}'>Edit</a></td>";
             echo "</tr>";
         }  
}

function deleteCateogaries(){
    global $connect;
    if(isset($_GET['delete'])){   
         $delete = $_GET['delete'];   
         $query="DELETE FROM cateogaries WHERE cat_id={$delete}";       
         $query_execute=mysqli_query($connect,$query);       
         header("Location:cateogaries.php");
       }              
}

?>