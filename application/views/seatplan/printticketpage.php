  <section class="main-page-header speaker-banner bg_img" data-background="<?php echo base_url() ?>assets/images/banner/banner07.jpg">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">Ticket Summary</h2>
                <ul class="breadcrumb">
                     <li>
                        Your are just one step away !
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->
    
<div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
            
<div class="col-lg-6" style="margin:auto;" id="printableArea">
                    <div class="booking-summery bg-one"><ul>
                     <li><h6 class="subtitle mb-0"><span>BOOKLIT</span><span> A few clicks is all it takes!</span></h6>
  </li></ul><br/>
                        <h4 class="title">Ticket Invoice</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle"><?php
                    $this->db->where('movie_id',$this->session->userdata('movie_id'));
					$query=$this->db->get('movie')->row();
					echo $query->movie_name;


					 ?></h6>
                                <span class="info">English-2d</span>
                            </li>
                            <li>
                                
                                <span class="info"><h6 class="subtitle"><?php 
					$this->db->where('multiplex_id',$this->session->userdata('multiplex_id'));
					$query2=$this->db->get('multiplex')->row();
					echo $query2->multiplex_name;
					 ?></h6></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span><?php $result=$this->session->userdata('selecteddate');
								echo date('D', strtotime($result));
								 ?>,
                                 <?php
									$monthNum=substr($result,5,2);
									$monthNum=date("M",mktime(0,0,0,$monthNum,10));
									echo $monthNum;
								?> <?php echo substr($result,8,2) ?>, <?php echo substr($result,0,4) ?>
                                 </span><span><?php $time=$this->session->userdata('selectedtime');
								
							echo date('h:i A', strtotime($time));
								
								?></span></h6>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Total Tickets</span><span><?php echo $this->session->userdata('totalseat') ?></span></h6>
                            </li>
                              <span class="info">Seat No.</span>
                            <?php	
								$seatarr=$this->session->userdata('seatnamearr');
								$result= implode(',',$seatarr);
								echo strtoupper($result);
								?>
							</h6>
                            <li>
                                <h6 class="subtitle mb-0"><span>Tickets  Price</span><span>&#8377 <?php echo ($query->movie_price)*($this->session->userdata('totalseat')) ?></span></h6>
                            </li>
                        </ul>
                        <ul class="side-shape">
                            <li>
                            <h6 class="subtitle mb-0"><span>USER NAME</span><span><?php echo  $invoice->customername ?></span></h6>
                                
                            </li>
                            <li>
                                <span class="info"><h6 class="subtitle">Contact</h6><span>&nbsp;
                                <span><?php echo $invoice->customermobile ?></span>
                                 
                            </li>
                            <!-- <li>
                                <h6 class="subtitle"></span>Screen</span>
<span><?php echo $this->session->userdata('screen'); ?></span></h6>
                            </li> -->
                        </ul>
                        <!--
                        <ul>
                        
                            <li>
                                <span class="info"><span>price</span><span>---</span></span>
                                <span class="info"><span>vat</span><span>---</span></span>
                            </li>
                            </ul>
                            -->
                            <ul class="side-shape">
                            <li>
                           <h6 class="subtitle"><span>Amount Payable</span><span>&#8377 <?php echo ($query->movie_price)*($this->session->userdata('totalseat')) ?></span></h6>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                       
                        <a id="nonprint" class="custom-button back-button" onclick="printDiv('printableArea')">Print Ticket</a>
                    </div>
                </div>
                
                </div>
                </div>
                </div>
                <script>
				function printDiv(divName)
				 {
					var printContents = document.getElementById(divName).innerHTML;
					var originalContents = document.body.innerHTML;
					
					document.body.innerHTML = printContents;
					$("#nonprint").hide()
					window.print();
					
					document.body.innerHTML = originalContents;
				}
				</script>