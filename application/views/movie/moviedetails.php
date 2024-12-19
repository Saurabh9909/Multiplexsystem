
  <!-- ==========Banner-Section========== -->
  <section class="details-banner bg_img" data-background="<?php echo base_url()?>demoproject/images/<?php echo $record->movie_poster?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="<?php echo base_url()?>demoproject/images/<?php echo $record->movie_images?>" alt="movie">
                    <a href="<?php echo $record->movie_trailer?>" class="video-popup">
                        <img src="<?php echo base_url()?>assets/images/movie/video-button.png" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title"><?php echo $record->movie_name?></h3>
                    <!-- <div class="tags">
                        <a href=""><?php echo $record->movie_language?></a>
                    </div> -->
                    <a href="" class="button"><?php echo $record->category_name?></a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>06 Dec, 2020</span>
                            </div>
                            <div class="item">
                                <i class="far fa-clock"></i><span><?php echo $record->movie_duration?> hrs </span>
                            </div>
                        </div>
                        <!-- <ul class="social-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->


    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper offset-lg-3">
            <div class="left-side">
                    <div class="item">
                        <div class="item-header">
                            
                            <div class="counter-area">
                            ₹ <?php echo $record->movie_price?>
                            </div>
                        </div>
                        <p>Ticket Price</p>
                    </div>
                    <!-- <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="<?php echo base_url()?>assets/images/movie/cake2.png" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>audience Score</p>
                    </div> -->
                    <div class="item">
                        <div class="item-header">
                        ⭐ <?php echo $record->movie_rating ?>
                        </div>
                        <p>Movie Rating</p>
                    </div>
                     <!-- <div class="item">
                        <div class="item-header">
                            <div class="rated rate-it">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="title">0.0</h5>
                        </div>
                        <p><a href="#0">Rate It</a></p>
                    </div> -->
                </div>
                <a href="<?php echo site_url()?>/ticketplancontroller/index/<?php echo $record->movie_id?>" class="custom-button">book tickets</a>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->
<!-- ==========Movie-Section========== -->
<section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-tags">
                        <ul>
                            <li>
                                <a href="">2D</a>
                            </li>
                            <li>
                                <a href="">imax 2D</a>
                            </li>
                            <li>
                                <a href="">4DX</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-1 widget-offer">
                        <h3 class="title">Applicable offer</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url()?>assets/images/sidebar/offer01.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="">Amazon Pay Cashback Offer</a>
                                    </h6>
                                    <p>Win Cashback Upto Rs 300*</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url()?>assets/images/sidebar/offer02.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="">PayPal Offer</a>
                                    </h6>
                                    <p>Transact first time with Paypal and
                                        get 100% cashback up to Rs. 500</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="<?php echo base_url()?>assets/images/sidebar/offer03.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="">HDFC Bank Offer</a>
                                    </h6>
                                    <p>Get 15% discount up to INR 100* 
                                        and INR 50* off on F&B T&C apply</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="">
                                <img src="<?php echo base_url()?>assets/images/sidebar/banner/banner01.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">photos</h3>
                        
                         <div class="details-photos owl-carousel">
                            <?php
                            foreach($movieimages as $rowimg)
                            {
                                
                                ?>
                                <div class="thumb">
                                <a href="" class="img-pop">
                                    <img src="<?php echo base_url()?>demoproject/images/<?php echo $rowimg->movieimg?>" alt="movie">
                                </a>
                                </div>
                                <?php }?>
                           
                        </div>
                        
                        <div class="tab summery-review"> 
                            <ul class="tab-menu">
                                <li class="active">
                                    summery
                                </li>
                                <li>
                                    user review <span>147</span>
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <h5 class="sub-title">Synopsis</h5>
                                        <p><?php echo $record->movie_description ?> </p>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">cast</h5>
                                            <div class="navigation">
                                                <div class="cast-prev"><i class="flaticon-double-right-arrows-angles"></i></div>
                                                <div class="cast-next"><i class="flaticon-double-right-arrows-angles"></i></div>
                                            </div>
                                        </div>
                                        <div class="casting-slider owl-carousel">
                                           
                                                <?php 
                                                $cast = explode(",",$record->movie_cast);
                                                
                                                for($i=0;$i<sizeof($cast);$i++)
                                                {
                                                    $this->db->where('cast_id',$cast[$i]);
                                                    $rec[$i]=$this->db->get('moviecast')->result();
                                                    
                                                    ?>
                                                     <div class="cast-item">
                                                <div class="cast-thumb">
                                                    <a href="">
                                                        <img src="<?php echo base_url()?>demoproject/images/<?php echo $rec[$i][0]->cast_img?>" alt="cast">
                                                    </a>
                                                </div>
                                                <div class="cast-content">
                                                    <h6 class="cast-title"><a href=""><?php echo $rec[$i][0]->cast_name?></a></h6>
                                                    <span class="cate"><?php echo $rec[$i][0]->cast_position?></span>
                                                    <!-- <p>As Richie Tozier</p> -->
                                                </div>
                                            </div>
                                            <?php }?>
                                            
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">crew</h5>
                                            <div class="navigation">
                                                <div class="cast-prev-2"><i class="flaticon-double-right-arrows-angles"></i></div>
                                                <div class="cast-next-2"><i class="flaticon-double-right-arrows-angles"></i></div>
                                            </div>
                                        </div>
                                        <div class="casting-slider-two owl-carousel">
                                        <?php 
                                                $crew = explode(",",$record->crew_id);
                                                
                                                for($i=0;$i< sizeof($crew);$i++)
                                                {
                                                    $this->db->where('crew_id',$crew[$i]);
                                                    $rec[$i]=$this->db->get('moviecrew')->result();
                                                    
                                                    ?>
                                                     <div class="cast-item">
                                                <div class="cast-thumb">
                                                    <a href="">
                                                        <img src="<?php echo base_url()?>demoproject/images/<?php echo $rec[$i][0]->crew_img?>" alt="cast">
                                                    </a>
                                                </div>
                                                <div class="cast-content">
                                                    <h6 class="cast-title"><a href=""><?php echo $rec[$i][0]->crew_name?></a></h6>
                                                    <span class="cate"><?php echo $rec[$i][0]->crew_position?></span>
                                                    <!-- <p>As Richie Tozier</p> -->
                                                </div>
                                            </div>
                                     <?php
                                    }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-item">
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="">
                                                    <img src="<?php echo base_url()?>assets/images/cast/cast02.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date">13 Days Ago</span>
                                                <h6 class="subtitle"><a href="">minkuk seo</a></h6>
                                                <span><i class="fas fa-check"></i> verified review</span>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <h6 class="cont-title">Awesome Movie</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat enim non ante egestas vehicula. Suspendisse potenti. Fusce malesuada fringilla lectus venenatis porttitor. </p>
                                            <div class="review-meta">
                                                <a href="">
                                                    <i class="flaticon-hand"></i><span>8</span>
                                                </a>
                                                <a href="" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                                </a>
                                                <a href="">
                                                    Report Abuse
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="">
                                                    <img src="<?php echo base_url()?>assets/images/cast/cast04.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date">13 Days Ago</span>
                                                <h6 class="subtitle"><a href="">rudra rai</a></h6>
                                                <span><i class="fas fa-check"></i> verified review</span>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <h6 class="cont-title">Awesome Movie</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat enim non ante egestas vehicula. Suspendisse potenti. Fusce malesuada fringilla lectus venenatis porttitor. </p>
                                            <div class="review-meta">
                                                <a href="">
                                                    <i class="flaticon-hand"></i><span>8</span>
                                                </a>
                                                <a href="" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                                </a>
                                                <a href="">
                                                    Report Abuse
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="">
                                                    <img src="<?php echo base_url()?>assets/images/cast/cast01.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date">13 Days Ago</span>
                                                <h6 class="subtitle"><a href="">rafuj</a></h6>
                                                <span><i class="fas fa-check"></i> verified review</span>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <h6 class="cont-title">Awesome Movie</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat enim non ante egestas vehicula. Suspendisse potenti. Fusce malesuada fringilla lectus venenatis porttitor. </p>
                                            <div class="review-meta">
                                                <a href="">
                                                    <i class="flaticon-hand"></i><span>8</span>
                                                </a>
                                                <a href="" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                                </a>
                                                <a href="">
                                                    Report Abuse
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="">
                                                    <img src="<?php echo base_url()?>assets/images/cast/cast03.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date">13 Days Ago</span>
                                                <h6 class="subtitle"><a href="">bela bose</a></h6>
                                                <span><i class="fas fa-check"></i> verified review</span>
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <h6 class="cont-title">Awesome Movie</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat enim non ante egestas vehicula. Suspendisse potenti. Fusce malesuada fringilla lectus venenatis porttitor. </p>
                                            <div class="review-meta">
                                                <a href="">
                                                    <i class="flaticon-hand"></i><span>8</span>
                                                </a>
                                                <a href="" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                                </a>
                                                <a href="">
                                                    Report Abuse
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="load-more text-center">
                                        <a href="" class="custom-button transparent">load more</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>