<!-- CONTENT -->
<section id="content">
			<div class="page page-forms-validate">
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Add Admin</strong></h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" name="form4" role="form" id="form4" data-parsley-validate>
									<div class="form-group">
										<label class="col-sm-3 control-label">Admin Name</label>
										<div class="col-sm-9">
											<input type="text" name="admin_name" class="form-control" placeholder="Admin Name" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Admin Address </label>
										<div class="col-sm-9">
											<input type="text" name="admin_address" class="form-control" placeholder="Admin Address "  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<input type="email" name="admin_email" class="form-control" placeholder="Email" data-parsley-type="digits" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Admin Password</label>
										<div class="col-sm-9">
											<input type="text" name="admin_password" class="form-control" placeholder="Admin Password" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Admin Profile</label>
										<div class="col-sm-9">
											<input type="text" name="admin_profileimg" class="form-control" placeholder="Admin Profile"  pattern="/^[a-zA-Z]+$/" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Admin Mobile</label>
										<div class="col-sm-9">
											<input type="text" name="admin_mobile" class="form-control" placeholder="Admin Mobile" data-parsley-trigger="change" data-parsley-type="alphanum"
											 required>
										</div>
									</div>
										</div>
									</div>
								</form>
							</div>
							<div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-success" id="form4Submit">Submit</button>
							</div>
						</section>
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