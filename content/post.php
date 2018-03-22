
<?php include "includes/header.php"; ?>
    <!-- Navigation -->
<?php include "includes/navigation.php";?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
.
           
            <!-- Blog Entries Column -->
            <div class="col-md-8">
           
               <?php
                if(isset($_GET['p_id'])){
                    $the_post_id=$_GET['p_id'];
                }
                    $query="SELECT * FROM posts WHERE post_id=$the_post_id";
                    $all_posts=mysqli_query($connect,$query); 
                    while($row=mysqli_fetch_assoc($all_posts))
                    {
                       $post_title = $row['post_title'];
                       $post_author= $row['post_author'];
                       $post_date=$row['post_date'];
                       $post_image=$row['post_image'];
                       $post_content=$row['post_content'];
                        
                        ?>
                         <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src= "./images/<?php echo $post_image ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                       
                 <?php   }   ?>   
            
            <?php
                if(isset($_POST['comment_post']))
                {
                     $the_post_id=$_GET['p_id'];
                     $comment_author = $_POST['comment_author'];
                     $comment_email = $_POST['comment_email'];
                     $comment_content = $_POST['comment_posted'];
                    
                    $query="INSERT INTO comments(comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date)";
                    $query.="VALUES ($the_post_id,'{$comment_author}','{$comment_email}','{$comment_content}','unapproved',now())";
                    
                    $exe_query=mysqli_query($connect,$query);
                    if(!$exe_query){
                        die("QUERY FAILED".mysqli_error($connect));
                    }
                }            
            ?>
            
            
             <!-- Comment form-->
                <div class="well">
                    <h4>Leave a comment:</h4>
                    <form role="form" action=" " method="post">
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input id="author" type="text" class="form-control" name="comment_author">
                        </div>
                         <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="text" class="form-control" name="comment_email">
                        </div>
                        <div class="form-group">
                            <label for="comment">Your Comment</label>
                            <textarea id="comment" name="comment_posted" class="form-control" rows="3"></textarea>
                        </div>
                        <input type="submit" name="comment_post" class="btn btn-primary" value="create_comment">
                    </form>
                </div>
          
              
              <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
         <?php include "includes/sidebar.php"?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include "includes/Footer.php"?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
