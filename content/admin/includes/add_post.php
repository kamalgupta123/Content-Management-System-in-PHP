<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php    
 if(isset($_POST['Publish_Post']))
 {
   $post_title = $_POST['title']; 
   $post_cateogary = $_POST['post_cateogary_id'];
   $post_author = $_POST['author'];
   $post_status = $_POST['status'];
   $post_image = $_FILES['image']['name'];//store image of that name here input nsame image
   $post_image_temp = $_FILES['image']['tmp_name'];//temp location of that image //int that image input what image is stored in temp loc
   $post_tags = $_POST['post_tags'];
   $post_content = $_POST['post_content'];
   $post_date = date('d-m-y');
   $post_comment_count=4;
    
     move_uploaded_file($post_image_temp,"../images/$post_image");
   $query="INSERT INTO posts(post_cateogary_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,
   post_status)";
   $query.="VALUES ({$post_cateogary},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}',{$post_comment_count},'{$post_status}')";
     
   $createQuery=mysqli_query($connect,$query);
     
   confirm($createQuery);
 }
?>
<form action=" " method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title">Post Title</label>
    <input id="title" type="text" name="title" class="form-control">
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
    <input type="text" name="author" class="form-control">
    </div>
    <div class="form-group">
    <label for="status">Post Status</label>
    <input type="text" class="form-control" name="status">
    </div>
    <div class="form-group">
    <label for="file">Post image</label>
    <input id="file" class="form-control" type="file" name="image">
    </div>
    <div class="form-group">
    <label for="tags">Post Tags</label>
    <input id="tags" class="form-control" type="text" name="post_tags">
    </div>
    <div class="form-group">
    <label for="Content">Post Content</label>
    <textarea id="Content" rows="10" cols="150" name="post_content"></textarea>
    </div>
    <input type="submit" value="Publish_Post" class="btn btn-primary" name="Publish_Post">
</form>
 
</body>
</html>
     


