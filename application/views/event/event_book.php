 <!-- ==========Banner-Section========== -->
 <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>demoproject/images/<?php echo $event->event_poster ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block"><?php echo $event->event_title ?></span></h3>
                    <div class="tags">
                        <span><?php echo $event->event_address ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="#0" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date"><?php echo $event->event_date ?></span>
                </div>
                <!-- <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>Mins Left</p>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Event-Section========== -->
    <div class="event-facility padding-bottom padding-top">
        <div class="container"><div class="section-header-3">
            <span class="cate">simple pricing</span>
            <h2 class="title">Grab Your Ticket's Now</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
        </div>
            <div class="row justify-content-center mb-30-none">
            <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item three">
                        <div class="ticket-thumb">
                            <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket03.png" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">VIP Ticket</span>
                            <h2 class="amount"><sup>₹</sup><?php echo $event->event_price ?></h2>
                            <ul>
                                <li>Comfort seating arrangment</li>
                                <li>Meet all of our event speakers</li>
                                <li>Front area booking </li>
                            </ul>
                            <a href="<?php echo site_url() ?>/ticketcontroller/event_chkout/<?php echo $event->event_id ?>" class="custom-button">book tickets</a>
                        </div>
                    </div> <br>
                <!-- </div> <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item three">
                        <div class="ticket-thumb">
                            <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket03.png" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">VIP Ticket</span>
                            <h2 class="amount"><sup>₹</sup>99</h2>
                            <ul>
                                <li>Comfort seating arrangment</li>
                                <li>Meet all of our event speakers</li>
                                <li>Front area booking </li>
                            </ul>
                            <a href="<?php echo site_url() ?>/ticketcontroller/event_chkout/<?php echo $event->event_id ?>" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item three">
                        <div class="ticket-thumb">
                            <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket03.png" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">VIP Ticket</span>
                            <h2 class="amount"><sup>₹</sup>99</h2>
                            <ul>
                                <li>Comfort seating arrangment</li>
                                <li>Meet all of our event speakers</li>
                                <li>Front area booking </li>
                            </ul>
                            <a href="<?php echo site_url() ?>/ticketcontroller/event_chkout/<?php echo $event->event_id ?>" class="custom-button">book tickets</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->