
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 14:08:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

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
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo base_url() ?>assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="<?php echo site_url() ?>/homecontroller" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#0">movies</a>
                        <ul class="submenu">
                            <?php
                            $movie=$this->db->get('movieindustry')->result();

                            foreach($movie as $row)
                            {
                                ?>

                                <li>
                                    <a href=""><?php echo $row->industry_name?></a>
                                </li>
                                <?php
                            }
                            ?>


                        </ul>
                    </li>
                    <li>
                        <a href="#0">events</a>
                        <ul class="submenu">
                            <?php
                                $event=$this->db->get('eventcategory')->result();
                                foreach($event as $row)
                                {
                            ?>
                            <li>
                                <a href="events.html"><?php echo $row->event_title?></a>
                            </li>
                            <?php
                            }
                            ?>
                            <a href="event-checkout.html">Esport Event</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">sports</a>
                        <ul class="submenu">
                            <?php 
                            $sports=$this->db->get('sportscategory')->result();
                            foreach($sports as $row)
                            {
                            ?>
                            <li>
                                <a href="sport-details.html"><?php echo $row->category_name ?></a>
                            </li>
                            <?php
                            }
                            ?>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#0">pages</a>
                        <ul class="submenu">
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="apps-download.html">Apps Download</a>
                            </li>
                            <!-- <li>
                                <a href="sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#0">blog</a>
                        <ul class="submenu">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <?php 
                        if($this->session->userdata('username')=="")
                        {
                    ?>
                        <li class="header-button pr-0">
                            <a href="<?php echo site_url() ?>/signin_controller">Join Us</a>
                        </li>
                    <?php
                        }
                        else
                        {
                            ?>
                            <li class="header-button pr-0">
                            <a href="<?php echo site_url() ?>/signin_controller/logout">Logout</a>
                        </li>
                        <?php

                        }
                    ?>
                   
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->