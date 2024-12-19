<!-- ==========Event-Banner-Section========== -->
   <!-- ==========Event-Banner-Section========== -->
      <!-- ==========Event-Banner-Section========== -->
      <section class="event-banner-section bg_img"  data-background="<?php echo base_url() ?>demoproject/images/<?php echo $event_data->event_poster ?>">
        <div class="container">
            <div class="event-banner">
                <a href="<?php echo site_url() ?>/event_cotroller/event_details/<?php echo $event_data->event_trailer ?>" class="video-popup">
                    <span></span>
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ==========Event-Banner-Section========== -->

    <!-- ==========Event-Book-Search========== -->
    <section class="event-book-search padding-top pt-lg-0">
        <div class="container">
            <div class="event-search bg_img" data-background="<?php echo base_url() ?>assets/images/ticket/">
                <div class="event-search-top">
                    <div class="left">
                        <h3 class="title"><a href="<?php echo site_url()  ?>/event_controller/event_details/<?php echo $event_data->event_id ?>  ?>"><?php echo $event_data->event_title ?></a></h3>
                    </div>
                    <div class="right">
                        <!-- <ul class="countdown">
							

                            <div data-date="<?php echo $event_data->event_date; ?>" id="cd_timer">
                            <li>
								<h2><span class="days">00</span></h2>
								<p class="days_text">days</p>
							</li>
							<li>
								<h2><span class="hours">00</span></h2>
								<p class="hours_text">hrs</p>
							</li>
							<li>
								<h2><span class="minutes">00</span></h2>
								<p class="minu_text">min</p>
							</li>
							<li>
								<h2><span class="seconds">00</span></h2>
								<p class="seco_text">sec</p>
							</li>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js" integrity="sha512-FofOhk0jW4BYQ6CFM9iJutqL2qLk6hjZ9YrS2/OnkqkD5V4HFnhTNIFSAhzP3x//AD5OzVMO8dayImv06fq0jA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                    <script>
                                    $(function () {
                                    $("#cd_timer").TimeCircles();
                                    });
                                    </script>
						</ul> -->
                        <p id="demo"></p>
                        <script>
    // Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    var countDownDate = <?php echo strtotime("$event_data->event_date") ?>* 1000;
    var now = <?php echo time() ?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script> 
                        <a href="<?php echo site_url() ?>/ticketcontroller/event_details/<?php echo $event_data->event_id ?>" class="custom-button">book tickets</a>
                    </div>
                </div>
                <div class="event-search-bottom">
                    <div class="contact-side">
                        <div class="item">
                            <div class="item-thumb">
                                <img src="<?php echo base_url() ?>assets/images/event/icon/event-icon01.png" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up">3 Days (Friday-Sunday)</span>
                                <span>70+ Workshops</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="<?php echo base_url() ?>assets/images/event/icon/event-icon02.png" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up"><a href="<?php echo site_url() ?>event_controller/event_details/<?php echo $event_data->event_id ?>"><?php echo $event_data->event_address ?></a></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="<?php echo base_url() ?>assets/images/event/icon/event-icon03.png" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up">Drop us a line:</span>
                                <a href="MailTo:hello@Boleto .com"><span class="__cf_email__" data-cfemail="a4ccc1c8c8cbe4e6cbc8c1d0cb">[email&#160;protected]</span> .com</a>
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
                            <?php
                               // echo "<pre>";
                               // print_r($event_speaker);
                                $this->db->where('event_id',$this->uri->segment(3));
                                $db=$this->db->get('event')->row();
                                $this->db->where('eventspeaker_id',$db->eventspeaker_id);
                                $dbimg=$this->db->get('eventspeaker')->row();    
                                ?>
                            <span class="cate">are you ready to attend?</span>
                            <h2 class="title"><a href="<?php echo site_url() ?>/event_controller/event_details/<?php echo $event_data->event_id ?>"><?php echo $event_data->event_title ?></a></h2>
                            <p><a href="<?php echo site_url() ?>/event_controller/event_details/<?php echo $event_data->eventspeaker_id ?>"><?php echo $event_data->event_description ?></a>
                            </p>
                            <a href="#0" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="event-about-thumb">
            
                        <img src="<?php echo base_url() ?>/demoproject/images/<?php echo $dbimg->eventspeaker_profileimg ?>" alt="event">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-About========== -->

    <!-- ==========Gallery-Section========== -->
    <!-- <div class="speaker-gallery">
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="<?php echo base_url() ?>assets/images/gallery/gallery01.jpg" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="<?php echo base_url() ?>assets/images/gallery/gallery01.jpg" alt="gallery">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0">
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="<?php echo base_url() ?>assets/images/gallery/gallery02.jpg" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="<?php echo base_url() ?>assets/images/gallery/gallery02.jpg" alt="gallery">
                            </div>
                        </div>
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="<?php echo base_url() ?>assets/images/gallery/gallery03.jpg" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="<?php echo base_url() ?>assets/images/gallery/gallery03.jpg" alt="gallery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gallery-item">
                    <div class="gallery-thumb">
                        <a href="<?php echo base_url() ?>assets/images/gallery/gallery04.jpg" class="img-pop">
                            <i class="flaticon-loupe"></i>
                        </a>
                        <img src="<?php echo base_url() ?>assets/images/gallery/gallery04.jpg" alt="gallery">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ==========Gallery-Section========== -->

    <!-- ==========Speaker-Section========== -->
    <!-- <section class="speaker-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">listen to the</span>
                <h2 class="title">event speakers</h2>
                <p>World is committed to making participation in the event a harassment free experience for 
                everyone, regardless of level of experience, gender, gender identity and expression</p>
            </div>
            <div class="speaker--slider">
                <div class="speaker-slider owl-carousel owl-theme">
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="event-speaker.html">
                                <img src="<?php echo base_url() ?>assets/images/speaker/speaker01.jpg" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="event-speaker.html">
                                    Gerard Bryan 
                                </a>
                            </h5>
                            <span>lead speaker</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="event-speaker.html">
                                <img src="<?php echo base_url() ?>assets/images/speaker/speaker02.jpg" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="event-speaker.html">
                                    Raihan Rafuj
                                </a>
                            </h5>
                            <span>lead speaker</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="event-speaker.html">
                                <img src="<?php echo base_url() ?>assets/images/speaker/speaker03.jpg" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="event-speaker.html">
                                    Bela Bose
                                </a>
                            </h5>
                            <span>lead speaker</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="event-speaker.html">
                                <img src="<?php echo base_url() ?>assets/images/speaker/speaker04.jpg" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="event-speaker.html">
                                    Grass Hopper
                                </a>
                            </h5>
                            <span>lead speaker</span>
                        </div>
                    </div>
                </div>
                <div class="speaker-prev">
                    <i class="flaticon-double-right-arrows-angles"></i>
                </div>
                <div class="speaker-next">
                    <i class="flaticon-double-right-arrows-angles"></i>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==========Speaker-Section========== -->

    <!-- ==========Statistics-Section========== -->
    <section class="statistics-section padding-top padding-bottom bg_img pb-lg-0" data-background="<?php echo base_url() ?>assets/images/statistics/statistics-bg01.jpg">
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
                                <img src="<?php echo base_url() ?>assets/images/statistics/stat01.png" alt="statistics">
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
                                <img src="<?php echo base_url() ?>assets/images/statistics/stat02.png" alt="statistics">
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
                                <img src="<?php echo base_url() ?>assets/images/statistics/stat03.png" alt="statistics">
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
