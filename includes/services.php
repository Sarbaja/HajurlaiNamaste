<?php 

    include('./config/init.php');
    $sql ="SELECT * FROM services";
    $result = $connection->query($sql);
    $count= $result->num_rows;

?>


<div id="services" class="parallax section db parallax-off no-padding-bottom"  >
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Services</h2>
                     <h5>WE ARE THE LEADERS IN THE TRADE INDUSTRY!</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon1.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <!--<h3>Service One</h3>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>-->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon4.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <!--<h3>Service Two</h3>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">

            <?php if($count > 0) {
                while($row= $result->fetch_assoc()) {
            ?>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 serv" style="background-color:#e8a900 !important;">
                  <div class="serv-blog">
                     <img src="backend/<?php echo $row['image']; ?>" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3><?php echo $row['title']; ?></h3>
                     <p><?php echo $row['content']; ?></p>
                  </div>
               </div>
              
            <?php
                }  
            } else{
                echo "<h1 class='text-center'>No services found</h1>";
            }?>
            </div>
         </div>
      </div>