<?php

  session_start();
	include('../config/init.php');

	if(!isset($_SESSION['emailad']))
	{
		header('Location: ../login.php');
	}

    if(isset($_POST['updatepassword'])){
      
        $npass= md5($_POST['newpass']);
        $em= $_SESSION['emailad'];
        
        if(strlen($_POST['newpass']) > 5 && strlen($_POST['newpass']) < 9){
            $sql= "UPDATE users SET password = '$npass' WHERE Email = '$em'";
            $result = $connection->query($sql);
            if($result){
                header("Location:changepassword.php?success=" . urlencode("Password sucessfully changed!"));
            }else{
                header("Location:changepassword.php?error=" . urlencode("Unexpected error occured!! Password could not be changed!"));
            }
        }else{
            header("Location:changepassword.php?error=" . urlencode("Password must be more than 5 characters and less than 9 characters!!"));
        }
    }

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
        <div class="row">
        
          <div class="col-md-12">
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
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Update Password</h5>
                <h6><?php echo 'Hi '.$_SESSION['name']?></h6>
              </div>
              <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="row">
                    
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="newpass" required="">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="updatepassword">Update Password</button>
                    </div>
                  </div>
                </form>
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
</body>

</html>