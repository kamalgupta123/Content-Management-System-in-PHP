 <form action="cateogaries.php" method="post">
                           <div class="form-group">
                            <label for="cat-title">Add Cateogary</label>
                            <?php
                             if(isset($_GET['Edit'])){
                             $edit = $_GET['Edit'];      
                             $query="SELECT * FROM cateogaries WHERE cat_id=$edit"; 
                             $query_execute=mysqli_query($connect,$query);
                              while($row=mysqli_fetch_assoc($query_execute)){
                                    $cat_id=$row['cat_id'];
                                    $cat_title=$row['cat_title'];
                                  ?>
                                  
                                  <input value="<?php if(isset($cat_title)){ echo $cat_title; } ?>" id="cat-title" type="text" class="form-control" name="cat_title">
                                  
                         <?php         
                                  
                             }
                             }
                           
                            ?>
                        <?php
                           if(isset($_POST['submit'])) {
                            $cat_title = $_POST['cat_title'];
                            $query="UPDATE cateogaries SET cat_title={$cat_title} WHERE cat_id={$cat_id}";
                            $exec_query=mysqli_query($connect,$query);
                            if(!$exec_query){
                                die("QUERY FAILED".mysqli_error($connect));
                            }
                           }      
                               ?>
                            </div>
                            <div class="form-group">
                            <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Add cateogary">
                            </div>
                        </form>