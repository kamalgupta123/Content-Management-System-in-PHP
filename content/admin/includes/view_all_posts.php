 <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                               <th>Id</th>
                               <th>Author</th>
                               <th>Title</th>
                               <th>Cateogary</th>
                               <th>Status</th>
                               <th>Image</th>
                               <th>Tags</th>
                               <th>Comments</th>
                               <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
         $query="SELECT * FROM posts";
         $all_posts=mysqli_query($connect,$query);   
         while($row=mysqli_fetch_assoc($all_posts)){
            $post_id=$row['post_id'];
            $post_cateogary_id=$row['post_cateogary_id'];
            $post_title=$row['post_title'];
            $post_author=$row['post_author'];
            $post_status=$row['post_status'];
            $post_image=$row['post_image'];
            $post_tags=$row['post_tags'];
            $post_date=$row['post_date'];
            $post_comment_count=$row['post_comment_count']; 
                            
            echo "<tr>";
            echo "<td>$post_id</td>";
            echo "<td>$post_author</td>";
            echo "<td>$post_title</td>";
            $query="SELECT * FROM cateogaries WHERE cat_id={$post_cateogary_id}"; 
                             $query_execute=mysqli_query($connect,$query);
                              confirm($query_execute);
                              while($row=mysqli_fetch_assoc($query_execute)){
                                    $cat_id=$row['cat_id'];
                                    $cat_title=$row['cat_title'];
                                  
                                   echo "<td>{$cat_title}</td>";
                              }
            echo "<td>$post_status</td>";
            echo "<td><img width='100' class='img-responsive' src='../images/$post_image' alt='image'></td>";
            echo "<td>$post_tags</td>";
            echo "<td>$post_comment_count</td>"; 
            echo "<td>$post_date</td>";
            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
            echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
            echo "</tr>"; 
             
         }
    ?>
                        </tbody>
</table>
<?php
if(isset($_GET['delete']))
{
  $delete=$_GET['delete'];
  $query="DELETE FROM posts WHERE post_id={$delete} ";
  $exec_query=mysqli_query($connect,$query);
}
?>