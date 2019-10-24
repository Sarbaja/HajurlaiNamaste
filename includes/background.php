<?php   

    include('./config/init.php');

    $sql ="SELECT * FROM background";
    $result = $connection->query($sql);
    $numRows= $result->num_rows;
    $row = $result->fetch_assoc();
?>


<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('backend/<?php echo $row['image']; ?>');">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center" style="background-color:rgba(0,0,0,0.6);">
                  <div class="big-tagline">
                     <img class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <h3 style="font-size:65px !important;"><span class="yellow"><?php echo $row['topic']; ?></span></h3>
                     <img style="margin-bottom:40px;" class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <p class="lead"><?php echo $row['content']; ?></p>
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">View all Services</a>
                  </div>
               </div>
            </div>
            
         </div>
         <!-- end container -->
</div>

<!--<div id="carouselExampleIndicators home" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img class="d-block w-100" src="backend/<?php echo $row['image']; ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $row['topic']; ?></h5>
            <p><?php echo $row['content']; ?></p>
        </div>

    </div>
    <div class="item">
      <img class="d-block w-100" src="backend/<?php echo $row['image']; ?>" alt="Second slide">
    </div>
    <div class="item">
      <img class="d-block w-100" src="backend/<?php echo $row['image']; ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->



<!--<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000" data-pause="hover">

<!-- Indicators 
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow 
<div class="carousel-inner">
  <div class="item slideimg active">
    <img class="d-block w-100" src="backend/uploads/background/8x10.png" alt="Los Angeles">
    <div class="carousel-caption"> 
            
            <div class="big-tagline">
                     <h3 style="font-size:65px !important;"><span class="yellow"><?php echo $row['topic']; ?></span></h3>
                     <p class="lead"><?php echo $row['content']; ?></p>
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">View all Services</a>
                  </div>
    </div>
  </div>
  <div class="item">
    <img class="d-block w-100" src="backend/uploads/background/8x10-GP(1).png" alt="Chicago">
    <div class="carousel-caption darkslider">
                <div class="big-tagline">
                     <h3 style="font-size:65px !important;"><span class="yellow"><?php echo $row['topic']; ?></span></h3>
                     <p class="lead"><?php echo $row['content']; ?></p>
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">View all Services</a>
                  </div>
    </div>
  </div>
  <div class="item">
      <img class="d-block w-100" src="backend/<?php echo $row['image']; ?>" alt="Chicago">
      <div class="carousel-caption darkslider">
                <div class="big-tagline">
                     <h3 style="font-size:65px !important;"><span class="yellow"><?php echo $row['topic']; ?></span></h3>
                     <p class="lead"><?php echo $row['content']; ?></p>
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">View all Services</a>
                  </div>
      </div>
  </div>
</div>

<!-- Left and right controls 
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>-->
