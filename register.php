<?php

    include('config/init.php');
    session_start();
    //error_reporting(0);
    $error= 0;

    if(isset($_SESSION['emailad']))
	{
		header('Location: backend/index.php');
    }
    
    if(isset($_POST['register'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = md5(trim($_POST['password']));
        $sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $connection->query($sql);
		if($result->num_rows > 0){
            echo "<div class='alert alert-danger alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Email already exists!! Please use another unique email address</strong></div>";
            $error++;
        }

        if($error==0){
            $query= "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
            $result = $connection->query($query);

            if($result){
                echo "<div class='alert alert-success alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Registered Successfully!!</strong></div>";
            }
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
                                        <h2>Register</h2>
                                        <form class="form-horizontal form-material" id="registerForm"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input id="name" name="name" type="text" placeholder="Enter FullName" class="form-control form-control-line"> </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control form-control-line"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control form-control-line"> </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button style="border:0px;background-color:#800000;color:white;" class="btn btn-primary" type="submit" name="register">Sign Up</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        
        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>

        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

         <script type="text/javascript">
            //alert('hi');
            $(document).ready(function(){

                //form  validation 
                $.validator.addMethod("alphabetsnspace", function(value, element) {
                    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
                },
                "Your name must consist of alphabets only"
                );

                $("#registerForm").validate({
                    rules:{
                        name:{
                            required:true,
                            alphabetsnspace: true
                        },
                        email:{
                            required:true,
                            email:true
                        },
                        password:{
                            required:true,
                            minlength:6
                        }
                    },
                    messages:{
                        name:{
                            required:"Please provide your full name"
                        },
                        email:{
                            required:"Please enter your email",
                            email:"Please enter valid email address"
                        },
                        password:{
                            required:"Please provide your Password",
                            minlength:"Password must have atleast 6 characters"
                        }
                    }
                });
                
            });

        </script>

    </body>
</html>