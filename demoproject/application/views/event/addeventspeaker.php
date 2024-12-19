<!-- CONTENT -->
<section id="content">
			<div class="page page-forms-validate">
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Add Event</strong></h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>/eventspeaker_controller/insert_eventspeaker"  name="form4" role="form" id="form4" data-parsley-validate>
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Categoryid</label>
										<div class="col-sm-9">
											<select name="eventcat_id" class="form-control">
												<option>Select Event Category</option>
												<?php  
													foreach($eventcat as $eventcatrow)
													{
														?>
															<option value="<?php echo $eventcatrow->eventcategory_id ?>"><?php echo $eventcatrow->eventcategory_title ?></option>
														<?php
													}
												?>
											</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">EventSpeaker Name</label>
										<div class="col-sm-9">
											<input name="eventspeaker_name" type="text" class="form-control" placeholder="EventSpeaker Name"  required>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">EventSpeaker Proffesion</label>
										<div class="col-sm-9">
											<input name="eventspeaker_proffession" type="text" class="form-control" placeholder="EventSpeaker Proffesion"  required>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">EventSpeaker Profileimg</label>
										<div class="col-sm-9">
											<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input name="eventspeaker_profileimg" type="file" class="form-control"  required>
											</span>
										</div>
									</div>
								
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
	<script src="<?php echo  base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo  base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

	<script src="<?php echo  base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->

	<!-- Custom JavaScripts  -->
	<script src="<?php echo  base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
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