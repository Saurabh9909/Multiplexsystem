                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="row mb-10 justify-content-center">
                                    <?php
                                        foreach($filter as $row)
                                        {
                                ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="<?php echo site_url()?>/movie_controller/display/<?php echo $row->movie_id?>">
                                                    <img src="<?php echo base_url()?>/demoproject/images/<?php echo $row->movie_images?>" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="movie-details.html"><?php echo $row->movie_name?></a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="<?php echo base_url()?>assets/images/movie/tomato.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="<?php echo base_url()?>assets/images/movie/cake.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="movie-area mb-10">
                                    <?php foreach($filter as $row)
                                    {?>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="<?php echo site_url()?>/moviecontroller/display/<?php echo $row->movie_id?>" class="w-100 bg_img h-100" data-background="<?php echo base_url() ?>admin/images/<?php echo $row->movie_poster ?>">
                                                <img class="d-sm-none" src="<?php echo base_url()?>admin/images/<?php echo $row->movie_poster ?>" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="movie-details.html"><?php echo $row->movie_name?></a>
                                            </h5>
                                            <p class="duration">2hrs 50 min</p>
                                            <div class="movie-tags">
                                                <a href="#0"><?php echo $row->category_name?></a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#0"> November 8 , 2020</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="<?php echo base_url() ?>assets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="<?php echo base_url() ?>assets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>assets/images/icons/heart.png" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>assets/images/icons/book.png" alt="icons">
                                                            </div>
                                                            <span>book ticket</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a href="<?php echo $row->movie_trailer?>" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>assets/images/icons/play-button.png" alt="icons">
                                                            </div>
                                                            <span>watch trailer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>