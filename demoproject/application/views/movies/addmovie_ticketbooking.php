
<section id="content">
		
<div class="page page-forms-validate">
				<!-- bradcome -->
				<div class="bg-light lter b-b wrapper-md mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Movies Ticket Booking</h1>
							<!-- <small class="text-muted">Welcome to Falcon application</small> -->
						</div>
					</div>
				</div>


			
	<div class="row text-center" >
					<div class="col-md-6 col-sm-3">
						<section class="boxs">
							<div class="boxs-header">
								<!-- <h3 class="custom-font hb-blush">
									<strong>Event</strong>  Information</h3> -->
							</div>
							<div class="boxs-body" >
								<form class="form-horizontal" name="form4" role="form" id="form4"  data-parsley-validate  method="post" action="<?php echo site_url()?>/movieticketbooking_controller/insert">
									
                                <div class="form-group">
										<label class="col-sm-3 control-label">Movie Name</label>
										<div class="col-sm-9">
										<select name="movie" class="form-control">
                                            <option>Select Movie Name</option>
                                            <?php
                                                foreach($movie as $rowticket)
                                                {
                                            ?>
                                                <option value="<?php echo $rowticket->movie_id ?>"><?php echo $rowticket->movie_name ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">Multiplex Name</label>
										<div class="col-sm-9">
										<select name="multiplex" class="form-control">
                                            <option>Select Multiplex Name</option>
                                            <?php
                                                foreach($multiplex as $rowmultiplex)
                                                {
                                            ?>
                                                <option value="<?php echo $rowmultiplex->multiplex_id ?>"><?php echo $rowmultiplex->multiplex_name ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                <div class="form-group">
										<label class="col-sm-3 control-label">Movie Ticket Time</label>
										<div class="col-sm-9">
										<select name="time" class="form-control">
                                            <option>Select Ticket Time</option>
                                            <?php
                                                foreach($ticket as $rowticket)
                                                {
                                            ?>
                                                <option value="<?php echo $rowticket->	movieticket_id ?>"><?php echo $rowticket->	movieticket_time ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Seat Name</label>
										<div class="col-sm-9">
										<select name="seatname" class="form-control">
                                            <option>Select Seat Name</option>
                                            <?php
                                                foreach($seatname as $rowseat)
                                                {
                                            ?>
                                                <option value="<?php echo $rowseat->seatplan_id ?>"><?php echo $rowseat->seat_name ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />


									<div class="form-group">
										<label class="col-sm-3 control-label">TicketBooking Number	</label>
										<div class="col-sm-9">
                                        <input type="text" name="ticketbooking" class="form-control" placeholder="Enter TicketBooking Number" data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">	No Of Seats	</label>
										<div class="col-sm-9">
                                        <input type="text" name="seat" class="form-control" placeholder="Enter 	No Of Seats	 " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">	Total Amount	</label>
										<div class="col-sm-9">
                                        <input type="text" name="amount" class="form-control" placeholder="Enter Total Amount	 " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">	Customer Name</label>
										<div class="col-sm-9">
                                        <input type="text" name="custmomer" class="form-control" placeholder="Enter Customer Name	 " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">Customer Mobile	</label>
										<div class="col-sm-9">
                                        <input type="text" name="mobile" class="form-control" placeholder="Enter Customer Mobile " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									<div class="form-group">
										<label class="col-sm-3 control-label">	Payment Gateway	</label>
										<div class="col-sm-9">
                                        <input type="text" name="payment" class="form-control" placeholder="Enter Payment Gateway	 " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">	Customer Email	</label>
										<div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Customer Email	 " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
								
									
							</div>
							<div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-success" id="form4Submit">Submit</button>
							</div>
							
							
						</section>
                        </form>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	
	
	<!--/ Application Content -->

	<!-- Vendor JavaScripts -->
	<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>

	<script src="<?php echo base_url()?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->

	<!-- Custom JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
	<!--/ custom javascripts -->

	<!-- Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form1Submit').on('click', function () {
				$('#form1').submit();
			});

			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});

			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script>
	<!--/ Page Specific Scripts -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:26 GMT -->
</html>