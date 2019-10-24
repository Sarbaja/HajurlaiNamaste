<?php

    session_start();
    include('config/init.php');

    if(isset($_SESSION['emailad']))
	{
		header('Location: backend/index.php');
    }
    
    if(isset($_POST['login'])){
  
        $user= trim($_POST['email']);
        $password= md5(trim($_POST['password']));
        $sql="SELECT * FROM users WHERE email= '$user'";
        $result = $connection->query($sql);
        $row= $result->fetch_assoc();
        
    
        if($row['email'] == $user && $row['password'] == $password){

            if($row['isadmin'] == '1'){
                $_SESSION['emailad']= $user;
                $_SESSION['name']= $row['name'];
                header('Location: backend/index.php');
            }else{
                echo "<div class='alert alert-danger alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>You are not admin!! You cannot access the dashboard.</strong></div>";
            }
        }

        else{
            echo "<div class='alert alert-danger alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Invalid Login Credentials!!</strong></div>";
        }

      }

?>


<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Hajurlai Namaste Tradelink (P) LTD/</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/login.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- building CSS -->
   <link rel="stylesheet" href="css/building.css">
   </head>
   <body class="building_version" data-spy="scroll" data-target=".header">

        <div class="container">
                <div class="row">
                        <div class="col-md-6" style="margin-top:30px"> <!--https://assets.bhg.com/bhg/styles/nfp_1080_landscape/public/images/109193119.jpg?FP1yR.BBnrZDWF3CS8uHaNHOU6zin4ro-->
                            <img class="img-fluid img-responsive" src="images/pro3.png" alt="login-image" />
                        </div>
                        <div class="col-md-6">
                                <div class="white-box" style="margin-top:30px">
                                        <h2>Login</h2>
                                        <form class="form-horizontal form-material" id="registerForm"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control form-control-line" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input id="password myPassword" name="password" type="password" placeholder="Enter Password" class="form-control form-control-line" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button style="border:0px;background-color:#800000;color:white;" class="btn btn-primary" type="submit" name="login">Log In</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                   <p>Don't have an account <a href="register.php">Sign Up now!</a></p>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>

         <!-- ALL JS FILES -->
         <script src="js/all.js"></script>


    </body>
</html>