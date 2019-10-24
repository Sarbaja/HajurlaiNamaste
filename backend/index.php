<?php

  session_start();
	include('../config/init.php');

	if(!isset($_SESSION['emailad']))
	{
		header('Location: ../login.php');
	}

	$check = $_SESSION['emailad'];
	$sql="SELECT * FROM users WHERE Email = '$check' ";
  $result = $connection->query($sql);
  
  $qry="SELECT * FROM projects";
  $result1 = $connection->query($qry);
  $count = $result1->num_rows;


  $qry1="SELECT * FROM services";
  $result2 = $connection->query($qry1);
  $count1 = $result2->num_rows;

  $qry2="SELECT * FROM testimonial";
  $result3 = $connection->query($qry2);
  $count2 = $result3->num_rows;

  $q= "SELECT * FROM contact";
  $r= $connection->query($q);
  $c= $r->num_rows;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      Hajurlai Namaste Tradelink Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
    <!-- Side nav -->
    <?php 
        include('includes/sidenav.php'); 
    ?>

    <div class="main-panel">
      <!-- Navbar -->
      <?php 
        include('includes/navbar.php'); 
      ?>
      <!-- End Navbar -->
     
      <div class="content">
          <?php if(isset($_GET['success'])) { ?>
            <div class='alert alert-success alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'><?php echo $_GET['success']; ?></strong></div>
              <?php } ?>
          
              <?php if(isset($_GET['error'])) { ?>
                <div class='alert alert-danger alert-block'>
                <button type='button' class='close' data-dismiss='alert'>×</button>	
                                    <strong class='text-center'><?php echo $_GET['error']; ?></strong></div>
              <?php } ?>
              
        <!--<div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Capacity</p>
                      <p class="card-title">150GB
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Revenue</p>
                      <p class="card-title">$ 1,345
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Errors</p>
                      <p class="card-title">23
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> In the last hour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Followers</p>
                      <p class="card-title">+45K
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update now
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Contacted Users</h5>
                
              </div>
              <div class="card-body ">
                <?php if($c > 0) { ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    FirstName
                                </th>
                                <th>
                                    LastName
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Service
                                </th>
                                <th>
                                    Message
                                </th>
                                
                                </thead>
                                <tbody>
                                <?php while($row= $r->fetch_assoc()) { ?>
                                    <tr>
                                        <td>
                                          <?php echo $row['FirstName']; ?>
                                        </td>
                                        <td>
                                          <?php echo $row['LastName']; ?>
                                        </td>
                                        <td>
                                          <?php echo $row['Email']; ?>
                                        </td>
                                        <td>
                                          <?php echo $row['Phone']; ?>
                                        </td>
                                        <td>
                                          <?php echo $row['Service']; ?>
                                        </td>
                                        <td>
                                          <?php echo $row['Message']; ?>
                                        </td>
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                  <?php 
                  } else { 
                    echo "No contacted users found";
                  }
                ?>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <?php if($c > 0) { ?>
                    <i class="fa fa-history"></i> <?php echo $c; ?> available contacted users
                  <?php } else {
                    echo "No contacted users found";
                    }  
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Projects</h5>
                <p class="card-category"><a href="projects.php">View Projects</a></p>
              </div>
              <div class="card-body ">
                <?php if($count > 0) { ?>
                  <?php while($row= $result1->fetch_assoc()) { ?>
                    <p class="card-category"><?php echo $row['name']; ?></p>
                  <?php } 
                  } else {
                    echo "No projects found";
                  }
                ?>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <?php if($count > 0) { ?>
                    <i class="fa fa-history"></i> <?php echo $count; ?> available projects
                  <?php } else {
                    echo "No projects found";
                    }  
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Services</h5>
                <p class="card-category"><a href="services.php">View Services</a></p>
              </div>
              <div class="card-body ">
                <?php if($count1 > 0) { ?>
                  <?php while($row= $result2->fetch_assoc()) { ?>
                    <p class="card-category"><?php echo $row['title']; ?></p>
                  <?php } 
                  } else {
                    echo "No services found";
                  }
                ?>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <?php if($count1 > 0) { ?>
                    <i class="fa fa-history"></i> <?php echo $count1; ?> available services
                  <?php } else {
                    echo "No projects found";
                    }  
                  ?>
                </div>
              </div>    
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Testimonials</h5>
                <p class="card-category"><a href="testimonials.php">View Testimonials</a></p>
              </div>

              <div class="card-body ">
                <?php if($count2 > 0) { ?>
                  <?php while($row= $result3->fetch_assoc()) { ?>
                    <p class="card-category"><?php echo $row['name']; ?></p>
                  <?php } 
                  } else {
                    echo "No testimonials found";
                  }
                ?>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <?php if($count2 > 0) { ?>
                    <i class="fa fa-history"></i> <?php echo $count2; ?> available testimonials
                  <?php } else {
                    echo "No testimonials found";
                    }  
                  ?>
                </div>
              </div> 
            
            </div>
          </div>
        </div>
      </div>

       <?php 
        include('includes/footer.php'); 
      ?>
    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>