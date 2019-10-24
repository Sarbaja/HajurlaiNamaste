<?php   

    include('./config/init.php');

    $sql ="SELECT * FROM projects";
    $result = $connection->query($sql);
    $numRows= $result->num_rows;
?>

<!-- projects -->
<div id="projects" class="section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Gallery</h2>
                     <h5>We work for the satisfaction of the costumers.</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">

                     <div class="container gal-container">

                        <?php if($numRows > 0) {
                            while($row = $result->fetch_assoc()){ ?>
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#<?php echo $row['id']; ?>">
                                    <img src="backend/<?php echo $row['image']; ?>" alt="#" />
                                    </a>
                                    <div class="modal fade" id="<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="backend/<?php echo $row['image']; ?>" alt="#" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the first one on my Gallery</h4>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        } 
                        
                        else {
                            echo "<h1 class='text-center'>No projects found</h1>";  
                        } ?> 
                        
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->