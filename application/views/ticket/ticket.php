 <!-- ==========Window-Warning-Section========== -->
 <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">Welcome! </h6>
            <h4 style="color: #E50914;" class="title">Select Your Seats</h4>
            <div class="thumb">
                <img style="border:5px solid black"  src="<?php echo base_url() ?>demoproject/images/<?php echo $data->movie_images?>" alt="movie">
            </div>
            <a href="<?php echo site_url() ?>/seatplan_controller" class="custom-button seatPlanButton">Seat Plans<i class="fas fa-angle-right"></i></a>
        </div>
    </section>
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section id="details-banner" class="details-banner hero-area bg_img" data-background="<?php echo base_url() ?>demoproject/images/<?php echo $data->movie_images?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title"><a href="<?php  echo site_url() ?>/industry_controller/display/<?php echo $data->movie_id ?>"><?php echo $data->movie_name ?></a></h3>
                    <div class="tags">
                    <a href="<?php  echo site_url() ?>/industry_controller/display/<?php echo $data->movie_id ?>"><?php echo $data->movie_langauge ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url() ?>assets/images/ticket/city.png" alt="ticket">
                    </div>
                    <span class="type">city</span>
                    <select class="select-bar">
                        <option value="london">London</option>
                        <option value="dhaka">dhaka</option>
                        <option value="rosario">rosario</option>
                        <option value="madrid">madrid</option>
                        <option value="koltaka">kolkata</option>
                        <option value="rome">rome</option>
                        <option value="khoksa">khoksa</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url() ?>assets/images/ticket/date.png" alt="ticket">
                    </div>
                    <span class="type">date</span>
                    <select class="select-bar">
                      
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url() ?>assets/images/ticket/cinema.png" alt="ticket">
                    </div>
                    <span class="type">cinema</span>
                    <select class="select-bar">
                        <option value="Awaken">Awaken</option>
                        <option value="Venus">Venus</option>
                        <option value="wanted">wanted</option>
                        <option value="joker">joker</option>
                        <option value="fid">fid</option>
                        <option value="kidio">kidio</option>
                        <option value="mottus">mottus</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url() ?>assets/images/ticket/exp.png" alt="ticket">
                    </div>
                    <span class="type">Experience</span>
                    <select class="select-bar">
                        <option value="English-2D">English-2D</option>
                        <option value="English-3D">English-3D</option>
                        <option value="Hindi-2D">Hindi-2D</option>
                        <option value="Hindi-3D">Hindi-3D</option>
                        <option value="Telegu-2D">Telegu-2D</option>
                        <option value="Telegu-3D">Telegu-3D</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0" >
                    <ul class="seat-plan-wrapper bg-five" style="background-color: #E50914d2;" >
                        <li>
                            <div class="movie-name" style="border:1px solid #fff;" >
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">Genesis Cinema</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
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
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">the beach</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
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
                        <li  class="active">
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">city work</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
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
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">box park</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
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
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">la mer</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
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
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">wanted</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid #fff;">
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
                </div>
               
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->