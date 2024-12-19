<!-- CONTENT -->
<section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Dashboard</h1> 
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/admincontroller/index"><span style="color:black">Admin</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('admin')->result());?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/showevent_controller/index"><span style="color:black">Events</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('event')->result());?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/eventcat_controller/index"><span style="color:black">Event Category</a></h3>
                            <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('eventcategory')->result());?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/eventspeakcontroller/"><span style="color:black">Event Speaker </a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('eventspeaker')->result());?></p>
                             </div>
                        </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/eventticket_controller/"><span style="color:black">Event Ticket</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('eventticket')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movie_controller"><span style="color:black">Movie</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movie')->result());?></p>
               
                            </div>
                               </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/moviecast_controller/"><span style="color:black">Movie Cast</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('moviecast')->result());?></p>
               
                            </div>
                                </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/moviecat_controller/"><span style="color:black">Movie Category</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('moviecategory')->result());?></p>
               
                            </div>
                                 </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movieimg_controller/"><span style="color:black">Movie Image</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movieimg')->result());?></p>
               
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movieindustry_controller/"><span style="color:black">Movie Industry</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movieindustry')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/moviereview_controller/"><span style="color:black">Movie Review</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('moviereview')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/multiplex_controller/"><span style="color:black">MultiPlex</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('multiplex')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movieseatplan_controller/"><span style="color:black">Movie Seat Plan</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movieseatplan')->result());?></p>
               
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movieticketbooking_controller"><span style="color:black">Movie Ticket Booking</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movieticketbooking')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/movieticketplan_controller/"><span style="color:black">Movie Ticket Plan</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('movieticketplan')->result());?></p>
               
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/state_controller/"><span style="color:black">State</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('state')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/city_controller/"><span style="color:black">City</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('city')->result());?></p>
               
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/area_controller/"><span style="color:black">Area</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('area')->result());?></p>
               
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/fbcheckout_controller/"><span style="color:black">FB Checkout</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('fbbookingchkout')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/fbaddtocart_controller/"><span style="color:black">FB Add To Cart</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('fbaddtocart')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/fbbooking_controller/"><span style="color:black">FB Booking</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('foodbeveragebooking')->result());?></p>
               
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/sport_controller/"><span style="color:black">Sport</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('sports')->result());?></p>
               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                            <h3 class="mt-0"><a href="<?php echo site_url();?>/sportbooking_controller/"><span style="color:black">Sport Booking</a></h3>
                                <p> TOTAL RECORDS  :-  <?php echo count($this->db->get('sportsbooking')->result());?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
    </div>
    <!-- Vendor JavaScripts -->
    <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="<?php echo base_url() ?>assets/bundles/flotscripts.bundle.js"></script>    
    <script src="<?php echo base_url() ?>assets/bundles/d3cripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/sparkline.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/raphael.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/morris.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/page/index.js"></script>     
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:03 GMT -->
</html>