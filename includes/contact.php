<?php

    include('./config/init.php');
    //error_reporting(0);
    $fname_error= '';
    $lname_error= '';
    $tel_error= '';
    $error= 0;

    if(isset($_POST['submit'])){
        $firstname = trim($_POST['first_name']);
        $lastname = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $sql = "SELECT * FROM contact WHERE Email = '$email'";
		$result = $connection->query($sql);
		if($result->num_rows > 0){
            echo "<div class='alert alert-danger alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Email already exists!! Please use another unique email address</strong></div>";
            $error++;
        }
        $phone = trim($_POST['phone']);
        if(empty($_POST['select_service'])){
            echo "<div class='alert alert-danger alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Please select a specific service for further contact process!!</strong></div>";
            $error++;
        }else{
            $service = $_POST['select_service'];
        }
        $message = trim(mysqli_real_escape_string($connection, $_POST['comments']));

        if($error==0){
            $query= "INSERT INTO contact (FirstName, LastName, Email, Phone, Service, Message) VALUES ('$firstname', '$lastname', '$email', '$phone', '$service', '$message')";
    
            $result = $connection->query($query);

            if($result){
                echo "<div class='alert alert-success alert-block'>
            <button type='button' class='close' data-dismiss='alert'>×</button>	
                                <strong class='text-center'>Contacted!! We will reach you shortly.</strong></div>";
            }
        }
        
    }
    
?>


<div id="contact" class="section wb">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Contact Us</h3>
                  <p class="lead">Get In Touch With Us</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="contant-info">
                     <ul class="item-display-block">
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-home"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Address:</h6>
                              <p> Baafal, Kathmandu </p>
                           </div>
                        </li>
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Phone No:</h6>
                              <p> 01-5237343</p>
                           </div>
                        </li>
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-envelope-o"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Email Address:</h6>
                              <p>welcometohnt@gmail.com</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="contact_form">
                     <div id="message"></div>
                     <form id="contactform" class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="contactform" method="POST">
                            <?php if(isset($_GET['success'])) { ?>
								<div style="color: green;font-weight:bold;padding: 16px;" class="text-center"><?php echo $_GET['success'];?></div>
						    <?php } ?>
                        <fieldset class="row-fluid">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label class="sr-only">Select Department</label>
                              <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                 <option value="">Select Service</option>
                                 <option value="Building Service">Lubricants</option>
                                 <option value="Tover Design">Rental Service</option>
                                 <option value="Building Service">Consumers</option>
                                 <option value="Tover Design">Spare Parts</option>
                                 <option value="Others">Others</option>
                              </select>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                              <button type="submit" name="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Contact Us</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>