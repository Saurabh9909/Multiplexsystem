
    <!-- ==========Window-Warning-Section========== -->
    <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">Welcome! </h6>
            <h4 style="color: #E50914;"  class="title">Select Your Seats</h4>
            <form action="<?php echo site_url()?>/ticketbookingcontroller/display/<?php echo $record->movie_id?>" method="post"></form>
            <div class="thumb">
                <input type="hidden" id="multiplexid" name="multiplexid" value="">
                <img style="border:5px solid black"  src="<?php echo base_url()?>demoproject/images/<?php echo $record->movie_images ?>" alt="movie">
            </div>
            <a href="<?php echo site_url()?>/ticketbookingcontroller/display/<?php echo $record->movie_id?>" class="custom-button seatPlanButton">Seat Plans<i class="fas fa-angle-right"></i></a>
        </div>
    </section>
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="<?php echo base_url()?>demoproject/images/<?php echo $record->movie_poster?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title"><?php echo $record->movie_name?></h3>
                    <!-- <div class="tags">
                        <a href="#0"><?php echo $record->movie_language?></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group" id="">
                    <div class="thumb">
                        <img src="<?php echo base_url()?>assets/images/ticket/city.png" alt="ticket">
                    </div>
                    <span class="type">city</span>
                    <select class="select-bar" onchange="getmultiplex(this.value)">
                    
                        <option value="">Select City</option>

                        <?php foreach($city as $cityrow)
                        {
                            ?>
                            <option value="<?php echo $cityrow->city_id?>"><?php echo $cityrow->city_name?></option>
                            <?php 
                        }?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url()?>assets/images/ticket/date.png" alt="ticket">
                    </div>
                    <span class="type">date</span>
                    
                    <input type="date" name="" id="date"  min="<?php echo date('Y-m-d');?>"">
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url()?>assets/images/ticket/cinema.png" alt="ticket">
                    </div>
                    <span class="type">Language</span>
                    <select class="select-bar" >
                        <option value="">Select language</option>
                        <?php 
                            // $i=0;
                            $language = explode(",",$record->movie_langauge);
                            $cnt=count($language);
                            for($i=0;$i<$cnt;$i++)
                            {?>
                                <option value="Awaken"><?php echo $language[$i]?></option>
                            <?php 
                            }?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo base_url()?>assets/images/ticket/exp.png" alt="ticket">
                    </div>
                    <span class="type">Experience</span>
                    <select class="select-bar">
                        <option value="English-2D">English-2D</option>
                        <option value="English-3D">English-3D</option>
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
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <div id="multiplexdis">
                    <?php 
                        $i=1;
                        foreach($multiplex as $mulrow)
                    { ?>
                    <ul class="seat-plan-wrapper bg-five" style="background-color: #E50914d2;" >
                        <li class="active">
                            <div class="movie-name"  style="border:1px solid #fff;">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="<?php echo $mulrow->multiplex_id ?>" class="name"><?php echo $mulrow->multiplex_name?></a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="hidden" id="mulid<?php echo $i?>" value="<?php echo $mulrow->multiplex_id?>">
                                </div>
                            </div>
                            <div class="movie-schedule" style="color:red;background-color:#000;border:1px solid aqua;"  >
                                <div class="item" onclick="getmulid(<?php echo $mulrow->multiplex_id?>,'09:40' , '<?php echo $record->movie_id?>')">
                                    09:40
                                </div>
                                <div class="item" onclick="getmulid(<?php echo $mulrow->multiplex_id?>,'13:45' , '<?php echo $record->movie_id?>')">
                                    13:45
                                </div>
                                <div class="item" onclick="getmulid(<?php echo $mulrow->multiplex_id?>,'15:45','<?php echo $record->movie_id?>')">
                                    15:45
                                </div>
                                <div class="item" onclick="getmulid(<?php echo $mulrow->multiplex_id?>,'19:50', '<?php echo $record->movie_id?>')">
                                    19:50
                                </div>
                            </div>
                        </li>                        
                        <script>
                            function getmulid(id,time,movie)
                                {
                                    var mulid=$('#mulid<?php echo $i?>').val()
                                    var date =$('#date').val()
                                    
                                    $.ajax({
                                    url:"<?php echo site_url()?>/ticketbookingcontroller/getmulid/"+id +"/" + movie +"/" + date +"/" + time,
                                    method:"post",
                                    success:function(data)  
                                    {   
                                        $("#multiplexid").val(data)
                                        // alert(data)
                                    }
                                    });
                                }
                                
                        </script>
                    </ul>
                    <?php
                    $i++;
                    }?></div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="<?php echo base_url()?>assets/images/sidebar/banner/banner03.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <script>
        
        function getmultiplex(id)
        {
            $.ajax({
                url:"<?php echo site_url()?>/ticketplancontroller/getmultiplex/"+id,
                method:"post",
                success:function(data)  
                {   
                    $("#multiplexdis").html(data)
                    // alert(data)
                }
            })
        }
    </script>
