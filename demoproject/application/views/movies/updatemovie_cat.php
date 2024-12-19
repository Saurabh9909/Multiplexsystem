
<section id="content">
		
<div class="page page-forms-validate">
				<!-- bradcome -->
				<div class="bg-light lter b-b wrapper-md mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Movies Category</h1>
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
								<form class="form-horizontal" name="form4" role="form" id="form4"  data-parsley-validate  method="post" action="<?php echo site_url()?>/moviecat_controller/update/<?php echo $edit->category_id ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label">Industry Name</label>
										<div class="col-sm-9">
										<select name="industry" class="form-control">
                                            <option>Select Industry Name</option>
                                            <?php
                                                foreach($cat as $rowcat)
                                                {
                                                    if($rowcat->industry_id==$edit->industry_id)
                                                    {
                                            ?>
                                                <option selected value="<?php echo $rowcat->industry_id ?>"><?php echo $rowcat->industry_name ?></option>
                                            <?php
                                                }
                                                else
                                            {
                                            ?>
                                            <option value="<?php echo $rowcat->industry_id ?>"><?php echo $rowcat->industry_name ?></option>
                                            
                                            <?php
                                            }
                                        }
                                            ?>
                                        </select>
                                        
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Category Name</label>
										<div class="col-sm-9">
										<input type="text" name="catname" class="form-control" value="<?php echo $edit->category_name ?>" placeholder="Enter Movie Category Name" data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
			
							</div>
							<div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-success" id="form4Submit">Update</button>
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