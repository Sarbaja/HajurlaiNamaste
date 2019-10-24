<?php

    session_start();
	  include('../config/init.php');

	if(!isset($_SESSION['emailad']))
	{
		header('Location: ../login.php');
	}

	  $sql="SELECT * FROM about";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $numRows= $result->num_rows;
    
    if(isset($_POST['uptabout'])){
      
      $name = trim(mysqli_real_escape_string($connection, $_POST['name']));
      $content = trim(mysqli_real_escape_string($connection, $_POST['content']));
      //echo $content; die;
      $sql= "UPDATE about SET name = '$name', content = '$content' WHERE id= 1";
      $result = $connection->query($sql);

      if($result){
        header("Location:index.php?success=" . urlencode("About section updated successfully!!"));
      }
      else{
        header("Location:index.php?error=" . urlencode("About section cannot be updated!!"));
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
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit About</h5>
              </div>
              <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Hajurlai Namaste Tradelink">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Content name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Content Description</label>
                        <textarea class="form-control textarea" name="content" required=""><?php echo $row['content']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" name="uptabout">Update About</button>
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