<?php include "includes/admin_header.php";?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin_Navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                        
                    <div class="col-xs-6">
                      <?php insert_cateogaries(); ?>
                        <form action="cateogaries.php" method="post">
                           <div class="form-group">
                            <label for="cat-title">Add Cateogary</label>
                            <input id="cat-title" type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                            <input class="btn btn-lg btn-primary" type="submit" name="submit" value="submit">
                            </div>
                        </form>
                        <?php //UPDATE AND INCLUDE QUERY
                       
                        if(isset($_GET['Edit'])){
                            $cat_id = $_GET['Edit'];
                            include "includes/update_cateogaries.php"; 
                        }
                        
                        ?>
                    </div>
                      
                    <div class="col-xs-6">
                              
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Cateogary Title</th>
                                </tr>
                            </thead>
                            <tbody>
                               
    <?php  findAllcateogaries(); ?>
                                
 <?php //DELETE QUERY 
       
       deleteCateogaries();                   
?> 
                                
                                            
                            </tbody>
                        </table>
                    </div>
                       
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
