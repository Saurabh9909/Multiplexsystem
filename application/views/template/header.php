
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

    <title>Booklit  - Online Ticket Booking Website </title>


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
                        <img src="<?php echo base_url() ?>assets/images/logo/logo_3.png" alt="logo">
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
                                    <a href="<?php echo site_url() ?>/movie_controller/industry_details/<?php echo $row->industry_id ?>"><?php echo $row->industry_name?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">events</a>
                        <ul class="submenu">
                            <!-- <li>
                                <a href="events.html">Events</a>
                            </li> -->

                            <?php 
                            $eventcat=$this->db->get('eventcategory')->result();
                            foreach($eventcat as $row)
                            {
                            ?>
                            <li>
                                <a href="<?php echo site_url() ?>/event_controller/event_category/<?php echo $row->eventcategory_id ?>"><?php echo $row->eventcategory_title ?></a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#0">sports</a>
                        <ul class="submenu">
                            <?php
                            $sports=$this->db->get('sportscategory')->result();
                            foreach($sports as $row)
                            {
                            ?>
                            <li>
                                <a href="<?php echo site_url() ?>/sports_controller/sports_details/<?php echo $row->category_id ?>"><?php echo $row->category_name ?></a>
                            </li>
                            <?php
                            }
                            ?> 
                        </ul>
                    </li> -->
                    <li>
                        <a  href="<?php echo base_url() ?>">sports</a>
                        <ul class="submenu">
                            <?php 
                            $sportscat=$this->db->get('sportscategory')->result();
                                foreach($sportscat as $row)
                                {
                                    ?>
                                        <li>
                                            <a  href="<?php echo base_url() ?>"><?php echo $row->category_name?></a>
                                            <ul class="submenu">
                                                <?php 
                                                        $this->db->where('category_id',$row->category_id);
                                                    $subcate = $this->db->get('sportssubcategory')->result();
                                                    foreach( $subcate as $rows ) 
                                                    {
                                                    ?>
                                                    <li>
                                                        <a  href="<?php echo site_url() ?>/sportsdetailscontroller/display/<?php echo $rows->subcategory_id?>"><?php echo $rows->subcategory_name?></a>
                                                    </li>
                                                    <?php
                                                    }
                                                ?>
                                            </ul>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url() ?>/fb_controller/fb_details" >Food & Bevrages</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()  ?>/contact_controller">Contact us</a>
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