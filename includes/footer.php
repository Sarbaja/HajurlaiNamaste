<?php

    include('./config/init.php');

    $sql="SELECT * FROM about";
    $result = $connection->query($sql);
    $row= $result->fetch_assoc();

?>

<!-- footer -->
      <footer id="footer">
         <div id="footer-widgets" class="container style-1">
            <div class="row">
               <div class="col-md-4">
                  <div class="widget widget_text">
                     <h2 class="widget-title"><span>ABOUT US</span></h2>
                     <div class="textwidget">
                        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="image"><span>Hajurlai Namaste</span></a>
                        <p><?php echo $row['content']; ?></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_links">
                     <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                     <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="#home">Home</a></li>
                        <li><a data-scroll="" href="#about">About Us</a></li>
                        <li><a data-scroll="" href="#services">Services</a></li>
                        <li><a data-scroll="" href="#projects">Gallery</a></li>
                        <li><a data-scroll="" href="#testimonials">Testimonials</a></li>
                        <li><a data-scroll="" href="#contact">Contact Us</a></li>
                        <li><a data-scroll="" href="#client">Our Dealers</a></li>
					 </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_information">
                     <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                     <ul>
                        <li class="address clearfix">
                           <span class="hl">Address:</span>
                           <span class="text"> &nbsp;&nbsp;&nbsp;&nbsp; Baafal, Kathmandu </span>
                        </li>
                        <li class="phone clearfix">
                           <span class="hl">Phone:</span> 
                           <span class="text"> &nbsp;&nbsp; 01-5237343</span>
                        </li>
                        <li class="email clearfix">
                           <span class="hl">Email:</span>
                           <span class="text"> welcometohnt@gmail.com</span>
                        </li>
                     </ul>
                  </div>
                  <div class="widget widget_socials">
                     <div class="socials">
                        <a target="_blank" href="https://www.facebook.com/namste.trading/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/hajurlai_namaste123/" target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <!--<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="bottom" class="clearfix style-1">
            <div class="container">
               <div id="bottom-bar-inner" class="wprt-container">
                  <div class="bottom-bar-inner-wrap">
                     <div class="bottom-bar-content">
                        <div id="copyright">All Rights Reserved. Hajurlai Namaste © 2018, Powered By <a href="http://www.kaaikaas.com/" target="_blank" style="color:#FFBC13">Kaaikaas.com</a></div>
                        <!-- /#copyright -->
                     </div>
                     <!-- /.bottom-bar-content 
                     <div class="bottom-bar-menu pull-right">
                        <ul class="bottom-nav">
                           <li><a href="#/">HISTORY</a></li>
                           <li><a href="#/">FAQ</a></li>
                           <li><a href="#/">EVENTS</a></li>
                        </ul>
                     </div>
                     bottom-bar-menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->