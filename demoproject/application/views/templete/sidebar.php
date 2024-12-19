<!--/ HEADER Content  -->
<div id="controls">
            <aside id="leftmenu">
                <div id="leftmenu-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation">
                                        <li class="active open">
                                            <a href="index-2.html">
                                                <i class="fa  fa-user"></i>
                                                <span>ADMIN</span>
                                            </a>
                                            <ul>
                                            <li>
                                                    <a href="<?php echo site_url() ?>/admincontroller/add">
                                                        <i class="fa fa-angle-right"></i> Add Admin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/admincontroller">
                                                        <i class="fa fa-angle-right"></i> Show Admin
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="mail-compose.html">
                                                        <i class="fa fa-angle-right"></i>Remove Admin</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-phone"></i>
                                                <span>Contact</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/contactcontroller">
                                                        <i class="fa fa-angle-right"></i>Show Contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="charts.html">
                                                <i class="fa  fa-bullhorn"></i>
                                                <span>Event</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/eventcontroller/eventform">
                                                    <i class="fa fa-angle-right"></i>Add Event</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/eventticket_controller">
                                                    <i class="fa fa-angle-right"></i>Event Ticket</a>
                                                </li>
                                                <li>
                                                    <a href="tables-bootstrap.html">
                                                    <i class="fa fa-angle-right"></i>Event Speaker</a>
                                                        <ul> 
                                                            <li>
                                                                <a href="<?php echo site_url() ?>/eventspeaker_controller">
                                                                <i class="fa fa-angle-right"></i>Show  Speaker</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo site_url() ?>/eventspeaker_controller/add_eventspeaker">
                                                                <i class="fa fa-angle-right"></i>Add  Speaker</a>
                                                            </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="tables-bootstrap.html">
                                                    <i class="fa fa-angle-right"></i>Event Category</a>
                                                        <ul> 
                                                            <li>
                                                                <a href="<?php echo site_url() ?>/eventcat_controller">
                                                                <i class="fa fa-angle-right"></i>Show Category</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo site_url() ?>/eventcat_controller/eventcat_form">
                                                                <i class="fa fa-angle-right"></i>Add Category</a>
                                                            </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/eventcontroller">
                                                        <i class="fa fa-angle-right"></i>Show Event</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-cutlery"></i>
                                                <span>Food & Beverages</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-angle-right"></i>Fbaddtocart</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/fbbooking_controller/fbform">
                                                        <i class="fa fa-angle-right"></i>Add Food & Beverages</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url()?>/fbaddtocart_controller">
                                                        <i class="fa fa-angle-right"></i>Add to Cart
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/fbbookingchkout_controller">
                                                        <i class="fa fa-angle-right"></i>Check Out</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/fbbooking_controller">
                                                        <i class="fa fa-angle-right"></i>Order Booked</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-camera-retro"></i>
                                                <span>Movie</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/movie_controller/addmovie">
                                                        <i class="fa fa-angle-right"></i>Add Movie </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/movie_controller">
                                                        <i class="fa fa-angle-right"></i>Show Movie </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-angle-right"></i>Movie Category</a>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviecat_controller/addcat">
                                                                <i class="fa fa-angle-right"></i>Add Category</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviecat_controller/">
                                                                 <i class="fa fa-angle-right"></i>Show Category</a>
                                                         </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-angle-right"></i>Movie Industry</a>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieindustry_controller/addindustry">
                                                                <i class="fa fa-angle-right"></i>ADD Industry</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieindustry_controller">
                                                                <i class="fa fa-angle-right"></i>Show Industry</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- <li>
                                                    <a href="<?php echo site_url() ?>/movieindustry_controller">
                                                        <i class="fa fa-angle-right"></i>Movie Industry</a>
                                                </li> -->
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-angle-right"></i>Movie Cast</a>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviecast_controller/addcast">
                                                                <i class="fa fa-angle-right"></i>ADD Cast</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviecast_controller">
                                                                <i class="fa fa-angle-right"></i>Show Cast</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/movieimg_controller">
                                                        <i class="fa fa-angle-right"></i>Movie Images</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieimg_controller/addimg">
                                                                <i class="fa fa-angle-right"></i>ADD Cast</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieimg_controller">
                                                                <i class="fa fa-angle-right"></i>Show Cast</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Movie Review</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviereview_controller/addreview">
                                                                <i class="fa fa-angle-right"></i>ADD Review</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/moviereview_controller">
                                                                <i class="fa fa-angle-right"></i>Show Review</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <!-- <li>
                                                    <a href="<?php echo site_url() ?>/moviereview_controller">
                                                        <i class="fa fa-angle-right"></i>Movie Review</a>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-th-large"></i>
                                                <span>Multiplex</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/multiplex_controller/addmultiplex">
                                                        <i class="fa fa-angle-right"></i>Add Multiplex</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/multiplex_controller/">
                                                        <i class="fa fa-angle-right"></i>Show Multiplex</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Movie Seatplan</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieseatplan_controller/addmovie_seatplan">
                                                                <i class="fa fa-angle-right"></i>ADD Seatplan</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieseatplan_controller">
                                                                <i class="fa fa-angle-right"></i>Show Seatplan</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Movie Ticket Booking</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieticketbooking_controller/addmovie_ticketbooking">
                                                                <i class="fa fa-angle-right"></i>ADD  Ticket Booking</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieticketbooking_controller">
                                                                <i class="fa fa-angle-right"></i>Show  Ticket Booking</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Movie Ticketplan</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieticketplan_controller/addmovie_ticketplan">
                                                                <i class="fa fa-angle-right"></i>ADD Ticketplan</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/movieticketplan_controller">
                                                                <i class="fa fa-angle-right"></i>Show Ticketplan</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-trophy"></i>
                                                <span>Sports</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php  echo site_url() ?>/sports_controller/sportsform">
                                                        <i class="fa fa-angle-right"></i>Add Sport</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/sports_controller">
                                                        <i class="fa fa-angle-right"></i>Show Sports</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Match</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/sportsmatch_controller">
                                                                <i class="fa fa-angle-right"></i>ADD Match</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/sportsmatch_controller/showmatch">
                                                                <i class="fa fa-angle-right"></i>Show Match</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>">
                                                        <i class="fa fa-angle-right"></i>Stadium</a>
                                                        <ul>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/sports_controller/addstadium">
                                                                <i class="fa fa-angle-right"></i>ADD Stadium</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url() ?>/sports_controller/showstadium">
                                                                <i class="fa fa-angle-right"></i>Show Stadium</a>
                                                        </li>
                                                        </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/sportsbooking_controller">
                                                        <i class="fa fa-angle-right"></i>Sports Booking</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-arrows"></i>
                                                <span>Locations</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a role="button" tabindex="0">
                                                    <i class="fa  fa-angle-right"></i>
                                                    <span>State</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/state_controller/stateform">
                                                        <i class="fa fa-angle-right"></i>Add State</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/state_controller">
                                                        <i class="fa fa-angle-right"></i>Show State</a>
                                                </li>
                                            </ul>
                                        </li>
                                                </li>
                                                <li>
                                                        <a role="button" tabindex="0">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span>Area</span>
                                                        </a>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo site_url() ?>/area_controller/areaform">
                                                        <i class="fa fa-angle-right"></i>Add Area</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo site_url() ?>/area_controller">
                                                        <i class="fa fa-angle-right"></i>Show Area</a>
                                                    </li>
                                            </ul>
                                                </li>
                                                <li>
                                                    <a href="gallery.html">     
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>City</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/city_controller/cityform">
                                                        <i class="fa fa-angle-right"></i>Add City</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/city_controller">
                                                        <i class="fa fa-angle-right"></i>Show City</a>
                                                </li>
                                            </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa  fa-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/moviereview_controller">
                                                        <i class="fa fa-angle-right"></i>Show Reviwes</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-user"></i>
                                                <span>User</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/user_controller">
                                                        <i class="fa fa-angle-right"></i>Show User Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-magic"></i>
                                                <span>Menu Levels</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a role="button" tabindex="0">
                                                        <i class="fa fa-angle-right"></i> Menu Level 1.1</a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="fa fa-angle-right"></i> Menu Level 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="fa fa-angle-right"></i> Menu Level 2.2</a>
                                                        </li>
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="fa fa-angle-right"></i> Menu Level 2.3</a>
                                                            <ul>
                                                                <li>
                                                                    <a role="button" tabindex="0">
                                                                        <i class="fa fa-angle-right"></i> Menu Level 3.1</a>
                                                                </li>
                                                                <li>
                                                                    <a role="button" tabindex="0">
                                                                        <i class="fa fa-angle-right"></i> Menu Level 3.2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0">
                                                        <i class="fa fa-angle-right"></i> Menu Level 1.2</a>
                                                    <ul>
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="fa fa-angle-right"></i> Menu Level 2.1</a>
                                                            <ul>
                                                                <li>
                                                                    <a role="button" tabindex="0">
                                                                        <i class="fa fa-angle-right"></i> Menu Level 3.1</a>
                                                                </li>
                                                                <li>
                                                                    <a role="button" tabindex="0">
                                                                        <i class="fa fa-angle-right"></i> Menu Level 3.2</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a role="button" tabindex="0">
                                                                                <i class="fa fa-angle-right"></i> Menu Level 4.1</a>
                                                                        </li>
                                                                        <li>
                                                                            <a role="button" tabindex="0">
                                                                                <i class="fa fa-angle-right"></i> Menu Level 4.2</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a role="button" tabindex="0">
                                                                        <i class="fa fa-angle-right"></i> Menu Level 3.3</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="fa fa-angle-right"></i> Menu Level 2.2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                        <div class="panel settings panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#leftmenuControls">General Settings
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="leftmenuControls" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8">Switch ON</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox" checked="">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-xs-8">Switch OFF</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="milestone-sidbar">
                                <div class="text-center-folded">
                                    <span class="pull-right pull-none-folded">60%</span>
                                    <span class="hidden-folded">Milestone</span>
                                </div>
                                <div class="progress progress-xxs m-t-sm dk">
                                    <div class="progress-bar progress-bar-info" style="width: 60%;"> </div>
                                </div>
                                <div class="text-center-folded">
                                    <span class="pull-right pull-none-folded">35%</span>
                                    <span class="hidden-folded">Release</span>
                                </div>
                                <div class="progress progress-xxs m-t-sm dk">
                                    <div class="progress-bar progress-bar-primary" style="width: 35%;"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="rightmenu">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                        </li>
                        <li role="presentation">
                            <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="search">
                                <div class="form-group is-empty">
                                    <input type="text" class="form-control underline-input" placeholder="Search...">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <h6>Recent</h6>
                            <ul>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <span class="name">Claire Sassu</span>
                                            <span class="message"> If you are going to use a passage of Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Maggie jackson</span>
                                                <span class="message">All the Lorem Ipsum generators on the Internet</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Joel King</span>
                                                <span class="message">The standard chunk of Lorem Ipsum used</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar6.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">There are many variations of passages of Lorem</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h6>Contacts</h6>
                            <ul>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Matthew</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Aaliyah</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Arianna</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar9.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Scarlett</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="assets/images/xs/avatar10.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">David</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="todo">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Create new task..." class="form-control" />
                                <span class="fa fa-plus"></span>
                            </div>
                            <h6>Today</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                            </ul>
                            <h6>Tomorrow</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> displayed in a normal space!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <h6>Chat Settings</h6>
                            <ul class="settings">
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Offline Users</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Fullname</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">History Enable</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Locations</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Notifications</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Undread Count</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>