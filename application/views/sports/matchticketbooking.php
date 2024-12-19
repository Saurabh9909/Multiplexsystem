<style>
    .teamlogo{
        border-radius: 50%;
        height: 6.5rem;
        width: 6.5rem;
    }
</style>
    <!-- ==========Sports-Details-Banner========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner style-two" data-background="<?php echo base_url()?>demoproject/images/<?php echo $match->match_banner?>">
    <video src="<?php echo base_url() ?>/"></video>    
    <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block"><?php echo $match->subcategory_name?></span> 
                        <span class="d-block">
                            <?php echo $match->match_title ?>
                        </span></h3>
                    <div class="tags">
                        <span>
                            <?php 
                                foreach($stadium  as $strw)
                                {
                                    if ($strw->stadium_id == $match->stadium_id)
                                    {
                                        echo $strw->stadium_name." <br> ".$strw->area_name." , ".$strw->city_name." , ".$strw->state_name;
                                    }
                                }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sports-Details-Banner========== -->
    
    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="<?php echo site_url()?>/matchdetailscontroller/display/<?php echo $match->match_id?>" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date"><h5  style="color: aqua;"><?php echo $match->match_date?></h5></span>
                </div>
                <div class="item">
                    <h5 class="title" style="color: aqua;"><?php echo $match->time?></h5>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Event-Section========== -->
    <div class="event-facility padding-bottom padding-top"  >
        <div class="container">
            <div class="row" id="showticket" >
                <div class="col-lg-8" id="foodbevarage" >
                    <form action="<?php site_url()?>/matchbookingcontroller/book/<?php echo $match->match_id?>" method="post"></form>
                    <?php if($this->session->userdata('user_email') == null) { ?>
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">Already a Boleto Member?</h5>
                            <p>Sign in to earn points and make booking easier!</p>
                        </div>
                        <a href="<?php echo site_url()?>/logincontroller/" class="sign-in-area">
                            <i class="fas fa-user"></i><span>Sign in</span>
                        </a>
                    </div>
                    <?php } ?>
                    <?php 
                            if($this->session->userdata('useremail') != null) 
                            {
                                $this->db->where('useremail',$this->session->userdata('useremail'));
                                $user=$this->db->get('user')->row();
                            ?>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Your Contact  Details </h5>
                      
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->username ?>" id="user_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->useremail ?>" id="user_email" placeholder="Enter your Mail">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->usermobile?>" id="user_mobile" placeholder="Enter your Phone Number ">
                            </div>
                            
                        </form>
                        <?php } else
                            {
                            ?>
                             <div class="checkout-widget checkout-contact">
                        <h5 class="title">Share your Contact  Details </h5>
                            <form class="checkout-contact-form">
                                <div class="form-group">
                                    <input type="text" id="user_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="user_email" placeholder="Enter your Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="user_mobile" placeholder="Enter your Phone Number ">
                                </div>
                               
                            </form>
                            <?php }?>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">Get Your Tickets</h5>
                        <div class="ticket--area row justify-content-center">
                            <div class="col-sm-6 col-md-4">
                                <div class="sports-ticket style-two">
                                    <span class="cate">best view</span>
                                    <h2 class="ticket-title"><sup> ₹ </sup>499</h2>
                                    <a onclick="check1(this.value)" value="1" id="check1" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="sports-ticket style-two">
                                    <span class="cate">comfort zone</span>
                                    <h2 class="ticket-title"><sup> ₹ </sup>799</h2>
                                    <a onclick="check2(this.value)" value="1" id="check2" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="sports-ticket style-two">
                                    <span class="cate">VIP Box</span>
                                    <h2 class="ticket-title"><sup> ₹ </sup>1499</h2>
                                    <a onclick="check3(this.value)" value="1" id="check3" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-md-6 col-xl-5">
                                <form action="<?php echo site_url()?>/ticketbooking/match" class="cart-button event-cart">
                                    <span class="d-inline-block">Number of Seats : </span>
                                    <div class="cart-plus-minus" onclick="mint()">
                                        <input class="cart-plus-minus-box" type="text" min="1" id="tctqty" name="qtybutton" value="1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">booking summery</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">
                                <?php
                                    $team1 = $this->db->get('team')->result();
                                    foreach($team1 as $team1)
                                    {
                                        if($team1->team_id == $match->team1_name)
                                        {
                                            echo $team1->team_shortname." vs ";
                                        }
                                        if($team1->team_id == $match->team2_name)
                                        {
                                            echo $team1->team_shortname;
                                        }
                                    }
                                ?>
                                </h6>
                                <span class="info"></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Ticket No :</span><span>
                                    <?php 
                                    $ticketno_formatted = substr(base_convert(sha1(mt_rand()), 16, 36), 0, 2) . mt_rand(1000, 9999);
                                    echo $ticketno = strtoupper(substr($ticketno_formatted, 0, 2)) . '-' . substr($ticketno_formatted, 2);
                                    
                                ?><span id="tctno" value="<?php echo $ticketno; ?>"></span></h6>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Match Day</span></span></h6>
                                <div class="info"><span><?php echo $match->match_date." , ".$match->time?></span> <span>Tickets</span></div>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Ticket Quantity</span><span id="ticketctqty" value="">0</span></h6>                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets  Price</span><span id="tctpr" value="">₹ 0</span></h6>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>Amount Payable</span><span id="total">₹ 0</span></h6>
                        
                        <button onclick="matchticket('<?php echo $ticketno; ?>')" class="custom-button back-button">proceed</button>
                        
                    </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->

    <script>
        var price = " "
        
        function check1(id)
        {
            if(id == 1 || id == null){
                $('#check1').html('<i class="fas fa-check">')
                $('#check2').html('<i class="fas fa-plus">') 
                $('#check3').html('<i class="fas fa-plus">') 
                $('#check1').val(0)
                price = 499
                mint()
            }
            else
            {
                $('#check1').html('<i class="fas fa-plus">')   
                $('#check1').val(1)
                price = 0
                mint()
            }
        }
        function check2(id)
        {
            if(id == 1 || id == null){
                $('#check2').html('<i class="fas fa-check">')
                $('#check1').html('<i class="fas fa-plus">') 
                $('#check3').html('<i class="fas fa-plus">') 
                $('#check2').val(0)
                price = 799
                mint()
            }
            else
            {
                $('#check2').html('<i class="fas fa-plus">')   
                $('#check2').val(1)
                price = 0
                mint()
            }
        }
        function check3(id)
        {
            if(id == 1 || id == null){
                $('#check3').html('<i class="fas fa-check">')
                $('#check1').html('<i class="fas fa-plus">') 
                $('#check2').html('<i class="fas fa-plus">') 
                $('#check3').val(0)
                price = 1499
                mint()
            }
            else
            {
                $('#check3').html('<i class="fas fa-plus">')   
                $('#check3').val(1)
                price = 0
                mint()
            }
        }
        function mint()
        {
            ticket = $('#tctqty').val();
            var ticketno = parseInt(ticket)
            
            var pr = parseInt(price)
            
            $('#ticketctqty').html(ticketno) 
            $('#tctpr').html("₹ "+pr)
            $('#total').html("₹ "+pr*ticketno)    
        }

        function matchticket(tctno)
        {
            // var tctno = $('#tctno').val()
            var name =  $('#user_name').val()
            var email =  $('#user_email').val()
            var number = $('#user_mobile').val()
            var tctqty =  $('#tctqty').val()
            var totalprice = parseInt(price)*tctqty
            // alert(tctno)
            // alert(tctqty)
            // alert(price)
            // alert(totalprice)
            // alert(name)
            // alert(email)
            // alert(number)
            $.ajax
            ({
                url:"<?php echo site_url()?>/matchticketbookcontroller/bookticket/<?php echo $match->match_id?>/<?php echo $ticketno?>",
                method:'post',
                data:{
                    name:name,
                    email:email,
                    number:number,
                    tctqty:tctqty,
                    ticketprice:price,
                    total:totalprice
                },
                success:function(rec)
                {
                    $('#showticket').html(rec)
                }
            })
        } 
        
    </script>