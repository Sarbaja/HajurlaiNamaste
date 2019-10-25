<?php   

    include('./config/init.php');

    $sql ="SELECT * FROM testimonial";
    $result = $connection->query($sql);
    $numRows= $result->num_rows;
?>


<div id="testimonials" class="section db" style="background-color:white !important;">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3 style="color:#E8A900 !important;">Testimonials</h3>
                  <p class="lead">What Our Client Says?</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="testi-carousel owl-carousel owl-theme">
                    
                    <?php if($numRows > 0) { 
                        while($row = $result->fetch_assoc()) {
                    ?>
                     <div class="testimonial clearfix">
                        <div class="desc" style="background-color:#E8A900 !important;color:white !important;border: 1px solid #E8A900 !important;">
                           <h3><i class="fa fa-quote-left"></i><?php echo $row['subject']; ?></h3>
                           <p class="lead" style="color:white !important;"><?php echo $row['message']; ?></p>
                        </div>
                        <div class="testi-meta">
                           <img src="backend/<?php echo $row['image']; ?>" alt="" class="img-responsive alignleft">
                           <h4 style="color:black !important;"><?php echo $row['name']; ?><small>- <?php echo $row['position']; ?></small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                    <?php 
                        }
                    }
                    else{
                        echo "<h1 style='color:white;' class='text-center'>No testimonials found !!</h1>";
                    } ?>
                     
                  </div>
                  <!-- end carousel -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->