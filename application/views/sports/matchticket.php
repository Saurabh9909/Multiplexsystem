
<div class="checkout-widget checkout-contact" >
                        <h5 class="title">Share your Contact  Details </h5>
                        <?php 
                            if($this->session->userdata('useremail') != null) 
                            {
                                $this->db->where('useremail',$this->session->userdata('useremail'));
                                $user=$this->db->get('user')->row();
                            ?>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->username ?>" name="user_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->useremail ?>" name="user_email" placeholder="Enter your Mail">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?php echo $user->usermobile?>" name="user_mobile" placeholder="Enter your Phone Number ">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Continue" class="custom-button">
                            </div>
                        </form>
                        <?php } else
                            {
                            ?>
                            <form class="checkout-contact-form">
                                <div class="form-group">
                                    <input type="text" name="user_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="user_email" placeholder="Enter your Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="user_mobile" placeholder="Enter your Phone Number ">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Continue" class="custom-button">
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
                                    <a onclick="check1(this.value)" onclick="ticket(499)" value="" id="check1" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="sports-ticket style-two">
                                    <span class="cate">comfort zone</span>
                                    <h2 class="ticket-title"><sup> ₹ </sup>799</h2>
                                    <a onclick="check2(this.value)" onclick="ticket(799)" value="" id="check2" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="sports-ticket style-two">
                                    <span class="cate">VIP Box</span>
                                    <h2 class="ticket-title"><sup> ₹ </sup>1499</h2>
                                    <a onclick="check3(this.value)" onclick="ticket(1499)" value="" id="check3" class="t-button">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-md-6 col-xl-5">
                                <form class="cart-button event-cart">
                                    <span class="d-inline-block">Number of Seats : </span>
                                    <div class="cart-plus-minus"onclick="mint()">
                                        <input class="cart-plus-minus-box" type="text" min="1" id="ticketno" name="qtybutton"   value="1">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-7">
                                <form class="checkout-contact-form mb-0">
                                    <div class="form-group">
                                        <input type="text" placeholder="Please enter promo code">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Verify" class="custom-button">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>