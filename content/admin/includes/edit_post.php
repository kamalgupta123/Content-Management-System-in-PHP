<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
    if(isset($_GET['p_id'])){
        $the_post_id=$_GET['p_id'];
    }
    $query="SELECT * FROM posts WHERE post_id=$the_post_id";
         $all_posts=mysqli_query($connect,$query);   
         while($row=mysqli_fetch_assoc($all_posts)){
            $post_id=$row['post_id'];
            $post_cateogary_id=$row['post_cateogary_id'];
            $post_title=$row['post_title'];
            $post_author=$row['post_author'];
            $post_status=$row['post_status'];
            $post_image=$row['post_image'];
            $post_tags=$row['post_tags'];
            $post_content = $row['post_content'];
            $post_date=$row['post_date'];
            $post_comment_count=$row['post_comment_count']; 
         }
        
    if(isset($_POST['Publish_Post'])){
        $post_title=$_POST['title'];
        $post_cateogary_id=$_POST['post_cateogary_id'];
        $post_author=$_POST['author'];
        $post_status=$_POST['status'];
        $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
        $post_content=$_POST['post_content'];
        
        move_uploaded_file($post_image_temp,"../images/$post_image");
        
        if(empty($post_image)){
            $query="SELECT * FROM posts WHERE post_id=$the_post_id";
            $select_image=mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($select_image)){
             $post_image = $row['post_image'];
            }
        }
        
        $query="UPDATE posts SET ";
        $query.="post_title='{$post_title}', ";
        $query.="post_author='{$post_author}', ";
        $query.="post_cateogary_id='{$post_cateogary_id}', ";
        $query.="post_status='{$post_status}', ";
        $query.="post_tags='{$post_tags}', ";
        $query.="post_content='{$post_content}' ";
        $query.="WHERE post_id= {$the_post_id}";
        
        $update=mysqli_query($connect,$query);
        
        confirm($update);
    }
    
    
    ?>
<body>
    <form action=" " method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title">Post Title</label>
    <input id="title" value="<?php echo $post_title?>" type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
    <select name="post_cateogary_id" id=" ">
                            <?php 
                             $query="SELECT * FROM cateogaries"; 
                             $query_execute=mysqli_query($connect,$query);
                              confirm($query_execute);
                              while($row=mysqli_fetch_assoc($query_execute)){
                                    $cat_id=$row['cat_id'];
                                    $cat_title=$row['cat_title'];
                                  
                                  echo "<option value={$cat_id}>{$cat_title}</option>";
                              }
                            ?>
    </select>
    </div>
    <div class="form-group">
    <label for="author">Post Author</label>
    <input type="text" value="<?php echo $post_author ?>" name="author" class="form-control">
    </div>
    <div class="form-group">
    <label for="status">Post Status</label>
    <input type="text"  value="<?php echo $post_status?>"class="form-control" name="status">
    </div>
    <div class="form-group">
     <img width="100" src="../images/<?php echo $post_image ?>">
    </div>
    <div class="form-group">
    <label for="file">Post image</label>
    <input id="file" class="form-control" type="file" name="image">
    </div>
    <div class="form-group">
    <label for="tags">Post Tags</label>
    <input id="tags" value="<?php echo $post_tags ?>" class="form-control" type="text" name="post_tags">
    </div>
    <div class="form-group">
    <label for="Content">Post Content</label>
    <textarea value="<?php echo $post_content ?>" id="Content" rows="10" cols="150" name="post_content"></textarea>
    </div>
    <input type="submit" value="Publish_Post" class="btn btn-primary" name="Publish_Post">
</form>
</body>
</html>