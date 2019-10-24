<?php
    include('./config/init.php');
    $sql ="SELECT * FROM about";
    $qry=mysqli_query($connection, $sql);
    $row=mysqli_fetch_array($qry);
?>

<div id="about" class="section wb">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>About Us</h2>
                     <h5>WE ARE THE LEADERS IN THE TRADE INDUSTRY!</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <p class="lead"><?php echo $row['content']; ?></p>
                     <!--<a href="#" class="read-more">Read More</a>-->
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
            </div>
            
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>