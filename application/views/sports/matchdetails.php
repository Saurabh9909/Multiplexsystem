
    <!-- ==========Event-Banner-Section========== -->
    <section class="event-banner-section bg_img" data-background="<?php echo base_url()?>demoproject/images/<?php echo $match->match_banner?>">
        <div class="container">
            <div class="event-banner">
                <a href="" ><br><br><br><br><br><br><br>
                    <span></span>
                    <!-- <i class="flaticon-play-button"></i> -->
                </a>
            </div>
        </div>
    </section>
    <!-- ==========Event-Banner-Section========== -->

    <!-- ==========Event-Book-Search========== -->
    <section class="event-book-search padding-top pt-lg-0">
        <div class="container">
            <div class="event-search bg_img" data-background="<?php echo base_url()?>assets/images/ticket/ticket-bg01.jpg">
                <div class="event-search-top">
                    <div class="left">
                        <h3 class="title">
                        <?php echo $match->match_title ?>
                        </h3>
                    </div>
                    <div class="right">
                        <!-- <ul class="countdown">
                            <?php 
                                $day = explode( '/',$match->match_date);
                            ?>
							<li>
								<h2><span class="days"><?php echo $day[0]?></span></h2>
								<p class="days_text">day</p>
							</li>
							<li>
								<h2><span class="hours"><?php echo $day[1]?></span></h2>
								<p class="hours_text">mon</p>
							</li>
							<li>
								<h2><span class="minutes"><?php echo $day[2]?></span></h2>
								<p class="minu_text">yer</p>
							</li>
						</ul> -->
                        <a href="<?php echo site_url()?>/matchticketbookcontroller/display/<?php echo $match->match_id?>" class="custom-button">book tickets</a>
                    </div>
                </div>
                <div class="event-search-bottom">
                    <div class="contact-side justify-content-start">
                        <div class="item">
                            <div class="item-thumb">
                                <img src="<?php echo base_url()?>assets/images/event/icon/event-icon02.png" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up"> 
                                    <p style="color: aqua;">
                                    <?php 
                                    foreach($stadium  as $strw)
                                    {
                                        if ($strw->stadium_id == $match->stadium_id)
                                        {
                                            echo $strw->stadium_name." <br> ".$strw->area_name." , ".$strw->city_name." , ".$strw->state_name;
                                        }
                                    }
                                    ?>
                                    </p>
                                </span>
                                <span>Astoria, NY 11106</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="<?php echo base_url()?>assets/images/event/icon/event-icon03.png" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up"style="color: aqua;">Drop us a line:</span>
                                <a href="MailTo:hello@Boleto.com"><span class="__cf_email__" data-cfemail="ec8489808083acae8380899883c28f8381">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Event-Book-Search========== -->

    <!-- ==========Event-About========== -->
    <section class="event-about padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between flex-wrap-reverse">
                <div class="col-lg-7 col-xl-6">
                    <div class="event-about-content">
                        <div class="section-header-3 left-style m-0">
                            <span class="cate">are you ready to attend?</span>
                            <h2 class="title">
                            <?php
                                $team1 = $this->db->get('team')->result();
                                foreach($team1 as $team1)
                                {
                                    if($team1->team_id == $match->team1_name)
                                    {
                                        echo $team1->team_shortname." vs ";
                                    }
                                    if($team1->team_id == $match->team2_name)
                                    {
                                        echo $team1->team_shortname;
                                    }
                                }
                            ?>
                            </h2>
                            <h2 class="title"><a href="<?php echo site_url() ?>/matchticketbookcontroller/display/<?php echo $match->match_id ?>"><?php echo $match->match_title ?></a></h2>
                            <p><?php echo $match->match_details?></p>
                            <a href="<?php echo site_url()?>/matchticketbookcontroller/display/<?php echo $match->match_id?>" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="event-about-thumb">
                        <img src="<?php echo base_url()?>demoproject/images/<?php echo $match->match_img?>" alt="sports">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-About========== -->

    <!-- ==========Statistics-Section========== -->
    <section class="statistics-section padding-top padding-bottom bg_img pb-lg-0" data-background="<?php echo base_url()?>assets/images/statistics/statistics-bg01.jpg">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">what we have done</span>
                <h2 class="title">our recent STATISTICS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
            </div>
            <div class="statistics-wrapper">
                <div class="row mb--20">
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="<?php echo base_url()?>assets/images/statistics/stat01.png" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="450"></h3>
                                <span class="info">Tickets Booked</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="<?php echo base_url()?>assets/images/statistics/stat02.png" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="500"></h3>
                                <span class="info">Usefull Sessions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="<?php echo base_url()?>assets/images/statistics/stat03.png" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="28"></h3>
                                <span class="info">Talented Speakers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Statistics-Section========== -->
    <!-- ==========Event-Section========== -->
    <br><br>