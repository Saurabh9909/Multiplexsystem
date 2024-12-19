 <!-- ==========Banner-Section========== -->
 <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>demoproject/images/<?php echo $event->event_poster  ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block"><?php echo $event->event_title ?>
                            <input type="hidden"  id="title" value="<?php echo $event->event_title ?>">
                        </span></h3>
                    <div class="tags">
                        <span ><?php echo $event->event_address ?>
                            <input type="hidden" id="address" value="<?php echo $event->event_address ?>">
                        </span>
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
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date" id="date" value="<?php echo $event->event_date ?>"><?php echo $event->event_date ?></span>
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
    <div class="event-facility padding-bottom padding-top" id="ticketdisplay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <form class="checkout-contact-form" >
                            <h5 class="title">Already a Booklit  Member?</h5>
                            <p>Sign in to earn points and make booking easier!</p>
                        </div>
                        <a href="#0" class="sign-in-area">
                            <i class="fas fa-user"></i><span>Sign in</span>
                        </a>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Share your Contact  Details </h5>
                        <div class="form-group">
                                
                                <input type="text" id="username" value="<?php 
                                $this->db->where('user_id',$this->session->userdata('user_id'));
                                $query=$this->db->get('user')->row();
                                echo $query->username;
                                ?>" placeholder="Full Name" name="custname" >
                            </div>
                            <div class="form-group">
                                <input type="text" id="useremail" value="<?php 
                                $this->db->where('useremail',$this->session->userdata('useremail'));
                                $query=$this->db->get('user')->row();
                                echo $query->useremail;
                                ?>" placeholder="Enter your Mail" name="custemail">
                            </div>
                            <div class="form-group">
                                <input type="text" id="usermobile" value="<?php 
                                $this->db->where('useremail',$this->session->userdata('useremail'));
                                $query=$this->db->get('user')->row();
                                echo $query->usermobile;
                                ?>" placeholder="Enter your Mail" name="custemail">
                            </div>
                            <!-- <div class="form-group">
                                <input type="submit" value="Continue" class="custom-button"  >
                            </div> -->
                        </form>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Get Your Tickets</h5>
                        <div class="ticket--area row justify-content-center">
                            <!-- <div class="col-sm-6 col-md-4">
                                <div class="ticket-item">
                                    <div class="ticket-thumb">
                                        <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket01.png" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">Standard Ticket</span>
                                        <h2 class="amount"><sup>₹</sup>499</h2>
                                        <a href="#0" class="t-button" onclick="check1(this.value)" value="" id="check1">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-sm-6 col-md-4">
                                <div class="ticket-item two">
                                    <div class="hot">
                                        <span>hot</span>
                                    </div>
                                    <div class="ticket-thumb">
                                        <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket02.png" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">Premium Ticket</span>
                                        <h2 class="amount" ><sup>₹</sup><?php echo $event->event_price ?></h2>
                                        <a href="#0" class="t-button" onclick="check2(this.value)" value="" id="check2">
                                            <i class="fas fa-check" ></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-md-4">
                                <div class="ticket-item three">
                                    <div class="ticket-thumb">
                                        <img src="<?php echo base_url() ?>assets/images/event/ticket/ticket03.png" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">VIP Ticket</span>
                                        <h2 class="amount"><sup>₹</sup>999</h2>
                                        <a href="#0" class="t-button" onclick="check3(this.value)" value="" id="check3">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-md-6 col-xl-5">
                                <!-- <form class="cart-button event-cart" method="post" action="<?php echo site_url() ?>/ticketcontroller/event_ticket/" > -->
                                    <span class="d-inline-block">Number of Seats : </span>
                                       <div class="cart-plus-minus" onclick="mint()">
                                        <input class="cart-plus-minus-box" type="text" min="1" id="tctqty" name="qtybutton" value="0" readonly>
                                    </div>
                                    <!-- <button type="submit" class="custom-button">add</button> -->
                                <!-- </form> -->
                            </div>
                            <div class="col-md-6 col-xl-7">
                                <!-- <form class="checkout-contact-form mb-0"> -->
                                    <!-- <div class="form-group">
                                        <input type="text" placeholder="Please enter promo code"  style= " padding: 10px;" >
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <input type="submit" value="Verify" class="custom-button">
                                    </div> -->
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">Payment Option </h5>
                        <ul class="payment-option">
                            <li class="active">
                                <a href="#0">
                                    <img src="<?php echo base_url() ?>assets/images/payment/card.png" alt="payment">
                                    <span>Credit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="<?php echo base_url() ?>assets/images/payment/card.png" alt="payment">
                                    <span>Debit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="<?php echo base_url() ?>assets/images/payment/paypal.png" alt="payment">
                                    <span>paypal</span>
                                </a>
                            </li>
                        </ul>
                        <h6 class="subtitle">Enter Your Card Details </h6>
                        <form class="payment-card-form">
                            <div class="form-group w-100">
                                <label for="card1">Card Details</label>
                                <input type="text" id="card1">
                                <div class="right-icon">
                                    <i class="flaticon-lock"></i>
                                </div>
                            </div>
                            <div class="form-group w-100">
                                <label for="card2"> Name on the Card</label>
                                <input type="text" id="card2">
                            </div>
                            <div class="form-group">
                                <label for="card3">Expiration</label>
                                <input type="text" id="card3" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label for="card4">CVV</label>
                                <input type="text" id="card4" placeholder="CVV">
                            </div>
                            <div class="form-group check-group">
                                <input id="card5" type="checkbox" checked>
                                <label for="card5">
                                    <span class="title">QuickPay</span>
                                    <span class="info">Save this card information to my Boleto  account and make faster payments.</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="custom-button" value="make payment">
                            </div>
                        </form>
                        <p class="notice">
                            By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a>
                        </p>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">booking summery</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle"><?php echo $event->event_address ?></h6>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Ticket Quantity</span><span id="ticketctqty"></h6>
                                <input type="hidden" id="qty" value="">
                                <div class="info"><span><?php echo $event->event_date ?></span></div>
                            </li>
                                    <li>
                                    <h6 class="subtitle"><span>Ticket Price</span><span id="tctpr" value=""><?php echo $event->event_price ?>
                                
                                    </span></h6>     
                                </li>
                                
                                <!-- <li>
                                <h6 class="subtitle mb-0"><span id="ticket_price" >0</span></h6>
                            </li> -->
                        </ul>
                        <!-- <ul class="side-shape">
                            <li>
                                <h6 class="subtitle"><span>combos</span><span>57</span></h6>
                                <span class="info"><span></span></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>food & bevarage</span></h6>
                            </li>
                            <li>
                                    <h6 class="subtitle"><span>Total</span><span id="tctpr" value=""></span></h6>     
                                </li>
                        </ul> -->
                        <ul>
                            <li>
                                <!-- <span class="info"><span>price</span><span>₹<?php echo $event->event_price ?></span></span> -->
                                <!-- <span class="info"><span>vat</span><span>₹15</span></span> -->
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>Amount Payable</span><span id="total"></span></h6>
                        <a href="#" onclick="proceed()" class="custom-button back-button">proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->

    <script>

        // function check1(id)
        // {
        //     var price =" ";

        //     if(id==1|| id== null)
        //     {
        //         $("#check1").html('<i class="fas fa-check"></i>');
        //         $("#check2").html('<i class="fas fa-plus"></i>');
        //         $("#check3").html('<i class="fas fa-plus"></i>');
        //         $("#check1").val(0);
        //         price=499;
        //         $("#tprice").html(price)
        //     }   
        //     else
        //     {
        //         $("#check1").html('<i class="fas fa-plus"></i>');
        //         $("#check1").val(1);
        //         price=0;
        //         $("#tprice").html(price)
          
        //     }
        // } 
        // function check2(id)
        // {
        //     var price =" ";

        //     if(id==1|| id== null)
        //     {
        //         $("#check1").html('<i class="fas fa-plus"></i>');
        //         $("#check2").html('<i class="fas fa-check"></i>');
        //         $("#check3").html('<i class="fas fa-plus"></i>');
        //         $("#check1").val(0);
        //         price=799;
        //         $("#tprice").html(price)
        //     }   
        //     else
        //     {
        //         $("#check1").html('<i class="fas fa-plus"></i>');
        //         $("#check1").val(1);
        //         price=0;
        //         $("#tprice").html(price)
          
        //     }
        // } 
        // function check3(id)
        // {
        //     var price =" ";

        //     if(id==1|| id== null)
        //     {
        //         $("#check1").html('<i class="fas fa-plus"></i>');
        //         $("#check2").html('<i class="fas fa-plus"></i>');
        //         $("#check3").html('<i class="fas fa-check"></i>');
        //         $("#check1").val(0);
        //         price=999;
        //         $("#tprice").html(price)
          
        //     }   
        //     else
        //     {
        //         $("#check1").html('<i class="fas fa-plus"></i>');
        //         $("#check1").val(1);
        //         price=0;
        //         $("#tprice").html(price)
          
        //     }
        // } 

        function mint()
        {
            ticket = $('#tctqty').val();
            var ticketno = parseInt(ticket)
            
            var pr = parseInt(<?php echo $event->event_price?>)
            // alert(ticket)
            $('#ticketctqty').html(ticketno) 
            $('#tctpr').html("₹ "+pr)
            $('#total').html("₹ "+pr*ticket)    
        }
        
        function proceed()
        {
            var title = $('#title').val();
            var address = $('#address').val();
            var username = $('#username').val();
            var useremail = $('#useremail').val();
            var usermobile = $('#usermobile').val();

            ticket = $('#tctqty').val();
            var ticketno = parseInt(ticket)
            
            var pr = parseInt(<?php echo $event->event_price?>)
            var total= pr*ticketno 
            
            $.ajax({
                url:"<?php echo site_url()?>/eventticket_controller/ticket",
                method:"post",
                data:{
                    title:title,
                    address:address,
                    name:username,
                    email:useremail,
                    mobile:usermobile,
                    quantity:ticketno,
                    price:pr,
                    totalamount:total
                },
                success:function(res)
                {
                    $('#ticketdisplay').html(res) 
                }
            })
        }
    </script>