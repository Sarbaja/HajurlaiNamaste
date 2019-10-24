<?php   

    include('./config/init.php');

    $sql ="SELECT * FROM testimonial";
    $result = $connection->query($sql);
    $numRows= $result->num_rows;
?>


<div id="testimonials" class="section db" style="background-color:#ccc !important;">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Testimonials</h3>
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
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i><?php echo $row['subject']; ?></h3>
                           <p class="lead"><?php echo $row['message']; ?></p>
                        </div>
                        <div class="testi-meta">
                           <img src="backend/<?php echo $row['image']; ?>" alt="" class="img-responsive alignleft">
                           <h4><?php echo $row['name']; ?><small>- <?php echo $row['position']; ?></small></h4>
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