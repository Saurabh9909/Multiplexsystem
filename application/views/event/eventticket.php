
<?php 
// echo"<pre>";
// print_r($book);
// die();
?>
<center>
<div class="col-lg-8" id="foodbevarage" style="margin-left:12rem; width:45rem" >
    <div class="booking-summery bg-one">
    <form action="<?php site_url()?>/matchbookingcontroller/book" method="post"></form>
        <div class="checkout-widget checkout-contact">
            <h5 class="title">Your Event Ticket </h5>
            <!-- <div class="form-group"> -->
                <ul>
                    <li>
                        <h6 class="subtitle"><span>Your Name : </span> <span><?php echo $book['name'] ?></span></h6>
                    </li>
                </ul>
                <input type="hidden" value="<?php echo $book['name'] ?>" id="user_name" >
            <!-- </div> -->
            
            <!-- <div class="form-group"> -->
                <ul>
                    <li>
                        <h6 class="subtitle"><span>Your Email : </span> <span><?php echo $book['email'] ?></span></h6>
                    </li>
                </ul>
                <input type="hidden" value="<?php echo $book['email'] ?>" id="user_email">
            <!-- </div> -->
            
            <!-- <div class="form-group"> -->
                <ul>
                    <li>
                        <h6 class="subtitle"><span>Your Number : </span> <span><?php echo $book['mobile'] ?></span></h6>
                    </li>
                </ul>
                <input type="hidden" value="<?php echo $book['mobile']?>" id="user_mobile">
            <!-- </div> -->
            <!-- </div>
        </div>
        <div class="col-lg-4"> -->
                <ul>
                    <li>
                        <h6 class="subtitle"><span>Event :</span>
                        <span>
                        <?php
                           echo $book['title'];
                        ?></span>
                        </h6>
                        <span class="info"></span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h6 class="subtitle"><span>Ticket No :</span><span>
                          
                        <span id="tctno" value="<?php echo $book['quantity']; ?>"><?php echo $book['quantity']; ?></span></h6>
                    </li>
                </ul>
                <!-- <ul>
                    <li>
                        <h6 class="subtitle"><span>Match Day</span><span id="ticketctqty" value=""><?php echo $book['quantity']; ?></span></h6>
                        <div class="info"><span><?php echo $match->match_date." , ".$match->time?></span> <span>Tickets</span></div>
                    </li>
                </ul> -->
                <ul>
                    <li>
                        <h6 class="subtitle mb-0"><span>Tickets  Price</span><span id="tctpr" value="">₹ <?php echo $book['price']; ?></span></h6>
                    </li>
                </ul>
            </div>
        
            <div class="proceed-area  text-center">
                <h6 class="subtitle"><span>Amount Payable</span><span id="total">₹ <?php echo $book['totalamount']; ?></span></h6>             
                <input type="button" onclick="window.print()"  value="Print Ticket" class="custom-button back-button">
                            
            </div>
        </div>
    </form>    
</div>
</center>
