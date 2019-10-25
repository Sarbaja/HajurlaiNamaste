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
   <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <link rel="stylesheet" href="css/bootstrap.css">

   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
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
      
        <!-- LOADER 
        <div id="preloader">
            <img class="preloader" src="images/loaders/loader-building2.gif" alt="">
        </div>
        END LOADER -->

        <!-- HEADER -->
        <?php 
            include('includes/header.php');
        ?>
        <!-- END HEADER -->

        <!-- BACKGROUND -->
        <?php 
            include('includes/background.php');
        ?>
        <!-- END BACKGROUND -->

        <!-- ABOUT -->
        <?php 
            include('includes/about.php');
        ?>
        <!-- END ABOUT -->

        <!-- SERVICES -->
        <?php 
            include('includes/services.php');
        ?>
        <!-- END SERVICES -->

        <!-- PROJECTS -->
        <?php 
            include('includes/projects.php');
        ?>
        <!-- END PROJECTS -->

        <!-- TESTIMONIAL -->
        <?php 
            include('includes/testimonial.php');
        ?>
        <!-- END TESTIMONIAL -->

        <!-- PRICE -->
        
        <!-- END PRICE -->
      
        <!-- CONTACT -->
        <?php 
            include('includes/contact.php');
        ?>
        <!-- END CONTACT -->
      
        <!-- Clients -->
        <?php 
            include('includes/clients.php');
        ?>
        <!-- -->

        <!-- FOOTER -->
        <?php 
            include('includes/footer.php');
        ?>
        <!-- end FOOTER -->

        <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


        
        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
        <script src="js/portfolio.js"></script>
        <script src="js/hoverdir.js"></script>   

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

                $("#contactform").validate({
                    rules:{
                        first_name:{
                            required:true,
                            alphabetsnspace: true
                        },
                        last_name:{
                            required:true,
                            alphabetsnspace: true
                        },
                        email:{
                            required:true,
                            email:true
                        },
                        phone:{
                            required:true,
                            number: true,
                            maxlength: 10
                        },
                        select_service:{
                            required:true
                        },
                        comments:{
                            required:true
                        }
                    },
                    messages:{
                        first_name:{
                            required:"Please provide your first name"
                        },
                        last_name:{
                            required:"Please provide your last name"
                        },
                        email:{
                            required:"Please enter your email",
                            email:"Please enter valid email address"
                        },
                        phone:{
                            required:"Please provide your Phone no",
                            number: "Mobile number must be numbers only",
                            maxlength: "Mobile number must be 10 digits long"
                        },
                        select_service:{
                            required:"Please select one of the services"
                        },
                        comments:{
                            required:"Please provide message"
                        }
                        
                    }
                });

            });

            /*$('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });*/

        </script>
        
   </body>
</html>

