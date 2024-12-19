
                  <?php foreach($multiplex as $mulrow)
                    { 
                    ?>
                    <ul class="seat-plan-wrapper bg-five" style="background-color: #E50914d2;">
                        <li class="active">
                            <div class="movie-name"    style="border:1px solid #fff;">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name"><?php echo $mulrow->multiplex_name?></a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid aqua;">
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item">
                                    13:45
                                </div>
                                <div class="item">
                                    15:45
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>                             
                    </ul>
                    <?php
                    }
                    ?>
               

    <!-- ==========Movie-Section========== -->

     
    <script src="<?php echo base_url()?>assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/heandline.js"></script>
    <script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/countdown.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/odometer.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/viewport.jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/nice-select.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script> 