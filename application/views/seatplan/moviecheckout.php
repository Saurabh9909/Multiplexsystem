<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>/demoproject/images/<?php echo $movie->movie_poster ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><?php echo $movie->movie_name ?></h3>
                    <!-- <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">English - 2D</a>
                    </div> -->
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
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date"><?php echo $this->session->userdata('date') ?></span>
                    <select class="select-bar">
                      <option selected><?php echo $this->session->userdata('time') ?></option>
                    </select>
                </div>
                <div class="item">
                <h5 class="title">
                        <?php 
                            
                            
                            $this->db->from('multiplex');
                            $this->db->join('area','area.area_id = multiplex.area_id');
                            $this->db->join('city','city.city_id = multiplex.city_id');
                            $this->db->join('state','state.state_id = multiplex.state_id');
                            
                            $this->db->where('multiplex_id',$this->session->userdata('multiplex_id'));

                            $query=$this->db->get()->row();
                            echo $query->multiplex_name;
                            ?>
                    </h5>
                    <p>
                    <?php 
                            echo $query->area_name." , ";
                            echo $query->city_name." , ";
                            echo $query->state_name;
					    ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->
   
    <!-- ==========Movie-Section========== -->
    <div class="event-facility padding-bottom padding-top"  >
        <div class="container">
            <div class="row" id="showticket" >
                <div class="col-lg-8">
                <form class="" id="basicform" method="post" action="<?php echo site_url() ?>/multiplexcontroller/addbooking/<?php echo  $this->session->userdata('totalseat')?>/<?php echo $movie->movie_price*$this->session->userdata('totalseat') ; ?>">
                    <?php if($this->session->userdata('user_id')== null)
                    { ?>
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">Already a BOOKLIT  Member?</h5>
                            <p>Sign in to earn points and make booking easier!</p>
                        </div>
                        <a href="<?php  echo site_url() ?>/signin_controller" class="sign-in-area">
                            <i class="fas fa-user"></i><span>Sign in</span>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="checkout-widget checkout-contact">
                    <?php if($this->session->userdata('user_id')== null)
                    { ?>
                        <h5 class="title">Share your Contact  Details </h5>
                            <div class="form-group">
                                
                                <input type="text" value="" placeholder="Full Name" name="custname" >
                            </div>
                            <div class="form-group">
                                <input type="text" value="" placeholder="Enter your Mail" name="custemail">
                            </div>
                            <div class="form-group">
                                <input type="text" value="" placeholder="Enter your Phone Number " name="custmob">
                            </div>
                            <div class="form-group">
                            </div>
                    </div>
                    <?php }
                    else
                    { 
                    ?>
                    <!-- <div class="checkout-widget checkout-contact"> -->
                    
                        <h5 class="title">Your Contact  Details </h5>
                        <div class="form-group">
                            
                            <input type="text" value="<?php 
                            $this->db->where('user_id',$this->session->userdata('user_id'));
                            $query=$this->db->get('user')->row();
                            echo $query->username;
                            ?>" placeholder="Full Name" name="custname" >
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php 
                          
                            echo $query->useremail;
                            ?>" placeholder="Enter your Mail" id="useremail" name="custemail">
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php 
                            
                            
                            echo $query->usermobile;
                            ?>" placeholder="Enter your Phone Number " name="custmob">
                        </div>
                    </div>
                    <?php }?>   
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">booking summary</h4>
                        <ul>
                        <li>
                                <h6 class="subtitle"><span>Movie</span><span><?php
                                    echo $movie->movie_name;
                                    ?>
                                    <input type="hidden" value="<?php $this->db->where('movie_id',$this->session->userdata('movie_id'));
                                    $query=$this->db->get('movie')->row();echo $query->movie_id;  ?>" name="movie">
                                    </span>
                                </h6>
                            </li>
   							    <li>
                                    <span class="info">Ticket Booking Number:</span>
                                    <input type="text" name="tktnum" readonly="readonly" value="TB<?php echo rand(10,100000); ?>" />
                                    <span class="info" style="color:red">*SAVE THIS CODE FOR BOOKING FOOD</span>
                                </li>          
                            <li>
                                <h6 class="subtitle"><span>Multiplex</span><span><?php 
                                    $this->db->where('multiplex_id',$this->session->userdata('multiplex_id'));
                                    $query=$this->db->get('multiplex')->row();
                                    echo $query->multiplex_name;
                                    // print_r($query);
                                    // die();
                                    ?>
                                    <input type="hidden" value="<?php $this->db->where('multiplex_id', $this->session->userdata('multiplex_id'));
                                    $query=$this->db->get('multiplex')->row(); echo $query->multiplex_id;?>" name="multiplex">
                                 </span>
                                </h6>
                                </li>
                            <li>
                            <h6 class="subtitle"><span>Ticket</span><span>
                            <?php	
								$seatarr=$this->session->userdata('seatnamearr');
								echo implode(',',$seatarr);?>
							<input type="hidden" value="<?php	
								$seatarr=$this->session->userdata('seatnamearr');
								echo implode(',',$seatarr);?>" name="seatname">
                                </span></h6>
                                    <h6 class="subtitle"><span>Total Seat(s)</span><span><?php echo $this->session->userdata('totalseat') ?>
                                        <input type="hidden" value="<?php echo $this->session->userdata('totalseat') ?>" name="totalseat" ></span>
                                    </h6>
                                    <?php 
                                        $this->db->where('movie_id',$this->session->userdata('movie_id'));
                                        $data=$this->db->get('movie')->row();
                                        // echo"<pre>";
                                        // print_r($data);
                                        // die();
                                    ?>
                                    <h6 class="subtitle"><span>Movie Price(₹)</span><span><?php echo $data->movie_price?>
                                        <input type="hidden" value="<?php echo $data->movie_price*$this->session->userdata('totalseat') ; ?>" name="totalprice" ></span>
                                    </h6>
                                <div class="info"><span><?php echo $this->session->userdata('date') ?>,
                                <input type="hidden" value="<?php echo $this->session->userdata('date') ?>" name="ticketdate" />
                                <?php echo $this->session->userdata('time') ?>
                                <input type="hidden" value="<?php echo $this->session->userdata('time') ?>" name="tickettime" />
                                </span> <span>Tickets</span></div>
                            
                            
                            </li>
                            <li style="display:none">
                                <h6 class="subtitle mb-0">
                                    <!-- <span>Tickets  Price</span>
                                    <span>&#8377; <?php echo $this->session->userdata('movieprice')*$this->session->userdata('totalseat') ?>
                                    <input type="hidden" value="<?php echo $this->session->userdata('movieprice')*$this->session->userdata('totalseat') ?>" name="totalamt"> -->
                                </span></h6>
                            </li>
                        </ul>
                        <!--
                        <ul class="side-shape">
                            <li>
                                <h6 class="subtitle"><span>combos</span><span>$57</span></h6>
                                <span class="info"><span>2 Nachos Combo</span></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>food & bevarage</span></h6>
                            </li>
                        </ul>
                        
                        
                        <ul>
                            <li>
                                <span class="info"><span>price</span><span>$207</span></span>
                                <span class="info"><span>vat</span><span>$15</span></span>
                            </li>
                        </ul>
                    -->
                    </div>
                    <div class="proceed-area  text-center">
                            <h6 class="subtitle"><span>Amount Payable</span><span>&#8377; <?php echo $data->movie_price*$this->session->userdata('totalseat'); ?></span></h6>
                            <input type="hidden" value="<?php echo $data->movie_price*$this->session->userdata('totalseat') ; ?>" id="totalprice" ></span>
                                <input type="submit" onclick="razorpay()" value="Continue" class="custom-button" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <!-- ==========Movie-Section========== -->

    <script>
    function razorpay()
    {
       var name=$('#useremail').val();
       var amt=$('#totalprice').val();
       var options = {
            "key": "rzp_live_ypZYt67LQeDBAA", // Enter the Key ID generated from the Dashboard
            "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "BOOKLIT",
            "description": "Live Transaction",
           // "image": "https://example.com/your_logo",
           // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
            //"account_id": "acc_Ef7ArAsdU5t0XL",
            "handler": function (response){
             $.ajax({
              
              });
            }
        };
        var rzp1 = new Razorpay(options);
    //    document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
         //   e.preventDefault();
//}  
    }
</script>
    