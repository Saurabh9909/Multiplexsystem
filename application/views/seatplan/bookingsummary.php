<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:900i');

* {
  box-sizing: border-box;
}


.wrapper {
  display: flex;
  justify-content: center;
}

.cta {
    display: flex;
    padding: 10px 45px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 40px;
    color: white;
    background: #6225E6;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC63;
}

.cta .button1:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover .button1:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  .button1 {
    transform: skewX(15deg) 
  }

  .button1:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #0FF;
    }
    100% {
        fill: white;
    }
}
	</style>
     <!-- ==========Banner-Section========== -->
    <section class="speaker-banner bg_img" data-background="<?php echo base_url() ?>assets/images/banner/banner07.jpg">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">Congratulations</h2>
                <ul class="breadcrumb">
                   <li>Your ticket was booked successfully !</li> 
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->
    
    <!-- ==========Speaker-Single========== -->
    <section class="apps-seciton padding-top pt-lg-0">
        <div class="container">
            <div class="apps-wrapper bg-six padding-top padding-bottom">
                <div class="bg_img apps-bg" data-background="<?php echo base_url() ?>assets/images/apps/apps01.png"></div>
                <div class="section-header-3">
                    <span class="cate"></span>
                    <h2 class="title"></h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                    <div class="counter--area">
                            <div class="counter-item">
                                <div class="d-flex justify-content-center align-items-center mb-10">
                                    <h4 class="odometer title" data-odometer-final="<?php echo $seat  ?>"></h4>
                                    <input type="hidden" id="seat" value="<?php echo $seat ?>">
                                    <h4 class="title"></h4>
                                </div>
                                <p class="info">Total Seat(s)</p>
                            </div>
                            <div class="counter-item">
                                <div class="d-flex justify-content-center align-items-center mb-10">&#8377 &nbsp;
                                    <h4 class="odometer title" data-odometer-final="<?php echo $invoice->totalamount ?>"></h4>
                                    <input type="hidden" id="price" value="<?php echo $invoice->totalamount ?>">
                                    <h4 class="title"></h4>
                                </div>
                                <p class="info">Amount Payable</p>
                            </div>
                        </div>
                        <div class="content" style="padding-top:62px;width:40%;" >
                        <div class="wrapper">
					  <a class="cta" onclick="razorpay()">
    <span class="button1"> Pay  Bill </span>
    <span class="button1">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
  							</div>
                        </div>
                      <div class="content" style="width:40%;padding-top:10%;" >
                      <div class="wrapper">
                      <a class="cta" href="<?php echo site_url() ?>/multiplexcontroller/displayfood/<?php echo $ticketno ?>">
    <span class="button1">Food Bavreges</span>
    <span class="button1">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
                        <!--<form method="post" action="<?php echo site_url() ?>/multiplexcontroller/displayfood">
                         
                            <h5 class="title"><input type="submit" value="Buy Food/Bevarage"/></h5>  
                        
                        </form>
                        -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Single========== -->

    <!-- ==========Speaker-Section========== -->
    <section class="feature-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">POWERFUL and FLEXIBLE</span>
                <h2 class="title">robust features</h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="<?php echo base_url() ?>./assets/images/feature/icon01.png" alt="feature"> -->
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">Brand New</h5>
                            <p>Brand New User Interface with Latest Technology</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="<?php echo base_url() ?>./assets/images/feature/icon02.png" alt="feature"> -->
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">seat map</h5>
                            <p>New Seat Map Feature for Ease of Ticket Booking</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="<?php echo base_url() ?>./assets/images/feature/icon03.png" alt="feature"> -->
                            <i class="fab fa-java"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">F&B</h5>
                            <p>Buy Food While Booking Tickets. Relax and Enjoy</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature-thumb">
                            <!-- <img src="<?php echo base_url() ?>./assets/images/feature/icon04.png" alt="feature"> -->
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="title">ticket filter</h5>
                            <p>Filter Movie Based on your choice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Section========== -->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    function razorpay()
    {
        // alert('pay')
       var name=$('#seat').val();
       var amt=$('#price').val();
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