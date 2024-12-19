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
								<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo site_url() ?>/sports_controller/update_stadium/<?php echo $edit->stadium_id ?>"  name="form4" role="form" id="form4" data-parsley-validate>
									
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Stadium Name</label>
										<div class="col-sm-9">
											<input name="stadium_name" type="text" class="form-control" placeholder="Stadium Name" value="<?php echo $edit->stadium_name  ?>"   required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label">State</label>
										<div class="col-sm-9">
											<select name="state_id" id="state" onchange="getcity(this.value)" class="form-control">
												<option>Select State</option>
												<?php  
													foreach($state as $row)
													{
														?>
															<option value="<?php echo $row->state_id ?>"><?php echo $row->state_name ?></option>
														<?php
													}
												?>
											</select>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">City</label>
										<div class="col-sm-9">
										<select name="city_id" id="city" onchange="getarea	(this.value)"class="form-control">
												<option>Select City </option>
												<?php  
													foreach($city as $row)
													{
														?>
															<option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option>
														<?php
													}
												?>
											</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Area</label>
										<div class="col-sm-9">
										<select name="area_id" id="area"class="form-control">
												<option>Select Area </option>
												<?php  
													foreach($area as $row)
													{
														?>
															<option value="<?php echo $row->area_id ?>"><?php echo $row->area_name ?></option>
														<?php
													}
												?>
											</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
							        <div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-success" id="form4Submit">UPDATE</button>
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
    <script>
        function getcity(id)
        {
           $.ajax({
                    url:"<?php echo site_url() ?>/eventcontroller/getcity/"+id,
                    method:"post",
                    success:function(data)
                    {
                        $("#city").html("<option>Select City</option>")
                        $("#city").append(data)
                    }
           });
        }
		function getarea(id)
		{
			$.ajax({
				url:"<?php echo site_url() ?>/eventcontroller/getarea/"+id,
				method:"post",
				success:function(data)
				{
					$("#area").html("<option>Select Area</opotion>")
					$("#area").append(data)
				}
			});
		}
    </script>                                                






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