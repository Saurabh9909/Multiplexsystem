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
								<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo site_url() ?>/sportsmatch_controller/addmatch"  name="form4" role="form" id="form4" >
									<hr class="line-dashed full-witdh-line" />
										<div class="form-group">
										<label class="col-sm-3 control-label">Sports Category</label>
										<div class="col-sm-6">
										<select name="category_id" class="form-control">
										<option>Select Category</option>
										<?php  
										$category=$this->db->get('sportscategory')->result();
										foreach( $category as $cat)
										{
											?>
											<option value="<?php echo $cat->category_id ?>"><?php echo $cat->category_name ?></option>
											<?php
										}
										?>
										</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Sports SubCategory</label>
										<div class="col-sm-6">
										<select name="subcategory_id" class="form-control">
										<option>Select Subcategory</option>
										<?php  
										$subcategory=$this->db->get('sportssubcategory')->result();
										foreach( $subcategory as $cat)
										{
											?>
											<option value="<?php echo $cat->subcategory_id ?>"><?php echo $cat->subcategory_name ?></option>
											<?php
										}
										?>
										</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Title</label>
										<div class="col-sm-9">
											<input name="match_title" type="text" class="form-control" placeholder="Match Title"  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Team 1</label>
										<div class="col-sm-9">
											<input name="team1_name" type="text" class="form-control" placeholder="Team 1"  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Team 2</label>
										<div class="col-sm-9">
											<input name="team2_name" type="text" class="form-control" placeholder="Team 2"  required>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Date</label>
										<div class="col-sm-3">
											<input name="match_date" type="date" class="form-control" placeholder="Match Date"  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Time</label>
										<div class="col-sm-9">
										<select name="stadium_id" class="form-control">
										<option>Select Subcategory</option>
										<?php  
										$stadium=$this->db->get('sportsstadium')->result();
										foreach( $stadium as $cat)
										{
											?>
										<option value="<?php echo $cat->stadium_id ?>"><?php echo $cat->stadium_name ?></option>
											<?php
										}
										?>
										</select>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Images</label>
										<div class="col-sm-9">
										<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus "></i>
												<span>Add Files....</span>
												<input name="match_img" type="file" class="form-control" placeholder="Match Images" >
											</span>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Poster</label>
										<div class="col-sm-9">
                                        <span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus "></i>
												<span>Add Files....</span>
                                                <input name="match_banner" type="file" class="form-control" placeholder="Match Poster" >
											</span>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Details</label>
										<div class="col-sm-9">
											<input name="match_details" type="text" class="form-control" placeholder="Match Details"  required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Match Time</label>
										<div class="col-sm-9">
											<input name="match_time" type="text" class="form-control" placeholder="Match Time"  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
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