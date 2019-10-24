<?php

    session_start();
	include('../config/init.php');

	if(!isset($_SESSION['emailad']))
	{
		header('Location: ../login.php');
	}

	    $sql="SELECT * FROM clients";
        $result = $connection->query($sql);
        $count = $result->num_rows;
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


          <div class="row" style="margin-bottom:40px;">
            <div class="col-md-12">
                <a href="createclient.php">Create new Clients</a>
                </div>
          </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <p>Image size must be less than 2MB and dimensions should be 180px X 80px</p>
                <h4 class="card-title"> Clients Details </h4>
              </div>
              <div class="card-body">

                    <?php if($count > 0) { ?>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Client Company
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                <?php while($row = $result->fetch_assoc()){ ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['name']; ?>
                                        </td>
                                        <td>
                                            <div class="col-md-6"><img src="<?php echo $row['logo']; ?>" class="img-responsive"></div>
                                        </td>
                                        <td>
                                            <a href="editclient.php?id='<?php echo $row['id'];?>'">Edit</a><br/>
                                            <a href="deleteclient.php?id='<?php echo $row['id'];?>'">Delete</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php }  else{
                        echo "<h5>No Clients found!!!</h5>";    
                    }
                    ?>
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