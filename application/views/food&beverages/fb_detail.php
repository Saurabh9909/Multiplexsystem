<!-- ==========Movie-Section========== -->
<div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- <div class="c-thumb padding-bottom">
                        <img src="<?php echo base_url() ?>assets/images/sidebar/banner/banner04.jpg" alt="sidebar/banner">
                    </div> -->

                    
                    <div class="section-header-3">
                        <br><br>
                        <span class="cate">You're hungry</span>
                        <h2 class="title">we have food</h2>
                        <p>Prebook Your Meal and Save More!</p>
                    </div>
                    <div class="grid--area">
                        <!-- <ul class="filter">
                            <li data-filter="*" class="active">all</li>
                            <li data-filter=".combos">combos</li>
                            <li data-filter=".bevarage">bevarage</li>
                            <li data-filter=".popcorn">popcorn</li>
                        </ul> -->
                        <div class="grid-area">
                            <?php  
                            foreach($food as $row)
                            {
                                ?>
                                <div class="grid-item combos popcorn">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="<?php echo base_url() ?>/demoproject/images/<?php echo $row->foodbeverage_image ?>" height="250px" alt="movie/popcorn">
                                        <div class="offer-tag" style="color: red; background-color:#fff">
                                            ₹<?php echo $row->foodbeverage_price ?>
                                        </div>
                                        <!-- <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div> -->
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <h5><?php echo $row->foodbeverage_name ?></h5>
                                        </h5>
                                        <form class="cart-button" method="post" action="<?php echo site_url()?>/fb_controller/addtocart/<?php echo $row->foodbeverage_id ?>">
										<?php 
                                        
                                            $this->db->where('foodbeverage_id',$row->foodbeverage_id);
                                            $this->db->where('user_id',$this->session->userdata('user_id'));
                                            $atc=$this->db->get('fbaddtocart')->row();

                                            if($atc != null)
                                            {
                                            ?>
                                                <div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="<?php echo $atc->quantity ?>" readonly>
			                            	    </div>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly>
			                            	    </div>
                                            <?php
                                            }
                                            ?>	
			                            	<button type="submit" class="custom-button">add</button>
			                            </form>
                                    </div>
                                </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4">
                <br><br>
                    <div class="booking-summery bg-one">
                        <h4 class="title">booking summery</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle"></h6>
                                <span class="info">English-2d</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>City Walk</span><span>02</span></h6>
                                <div class="info"><span>10 SEP TUE, 11:00 PM</span> <span>Tickets</span></div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets  Price</span><span> ₹150</span></h6>
                            </li>
                        </ul>
                        <ul class="side-shape">
                        <li>
                                <h6 class="subtitle"><span>food & bevarage</span></h6>
                            </li>
                        <?php 
                        $total=0;
                        foreach($cart as  $cartrow)
                        {
                            $this->db->where('foodbeverage_id',$cartrow->foodbeverage_id);
                            $food=$this->db->get('foodbeveragebooking')->row();
                            $this->db->where('atc_id',$cartrow->atc_id);
                            $cart=$this->db->get('fbaddtocart')->row();
                        ?>
                                <li>
                                <h6 class="info"><span><?php echo $food->foodbeverage_name ?></span><span>₹<?php echo $cart->totalamount ?></span></h6>
                                </li>
                        <?php    
                        $total=$total+$cartrow->totalamount;
                        } 

                        ?>
                        </ul>
                        <ul>
                            <li>
                                <b><span class="subtitle"><span>price</span><span>₹<?php echo $total ?></span></span></b>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>Amount Payable</span><span id="total">₹<?php echo $total ?></span></h6>
                        <a  class="custom-button back-button" onclick="razorpay()">proceed</a>
                    </div>
                    <!-- <div class="note">
                        <h5 class="title">Note :</h5>
                        <p>Please give us 15 minutes for F& B preparation  once you're at the cinema</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    function razorpay()
    {
        // alert('pay')
    //    var name=$('#seat').val();
       var amt=$('#total').val();
       var options = {
            "key": "rzp_live_ypZYt67LQeDBAA", // Enter the Key ID generated from the Dashboard
            "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "BOOKLIT",
            "description": "Live Transaction",
            "image": "<?php echo base_url() ?>assets/images/logo/logo2.jpg",
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
           e.preventDefault();
    }
</script>