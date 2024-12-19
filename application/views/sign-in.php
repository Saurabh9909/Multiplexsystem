
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 14:15:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/main.css">

    <link rel="shortcut icon" href="<?php  echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <form method="post" action="<?php echo site_url() ?>/signin_controller/chklogin">  
    <section class="account-section bg_img" data-background="<?php  echo base_url() ?>assets/images/account/account-bg.jpg"> 
    <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">BOOKLIT</span>
                        <h3 class="title">sign in </h3>
                    </div>
                    <form class="account-form">
                    <p style="color:red" id="err"><?php echo $err ?></p>
                        <div class="form-group">
                            <!-- <label for="email1">Email<span>*</span></label> -->
                            <input name="email" type="text" placeholder="Enter Your Email" id="email1" required>
                        </div><br>
                        <div class="form-group">
                            <!-- <label for="pass1">Password<span>*</span></label> -->
                            <input name="password" type="password" placeholder="Password" id="pass1" required>
                        </div><br>
                        <div class="form-group text-center">
                            <input type="submit" value="Sign In">
                        </div>
                    </form>
                    <div class="or">Or</div>
                    <div class="option">
                        If you don't have an account? <a href="<?php echo site_url() ?>/signup_controller">Sign up</a>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="<?php  echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/magnific-popup.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/countdown.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/odometer.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/viewport.jquery.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/nice-select.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 14:15:49 GMT -->
</html>