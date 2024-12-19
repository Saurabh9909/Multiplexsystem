
<section id="content">
		
<div class="page page-forms-validate">
				<!-- bradcome -->
				<div class="bg-light lter b-b wrapper-md mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Movies</h1>
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
								<form class="form-horizontal" name="form4" role="form" id="form4" enctype="multipart/form-data"  data-parsley-validate  method="post" action="<?php echo site_url()?>/movie_controller/insert">
									<div class="form-group">
										<label class="col-sm-3 control-label">Industry Name</label>
										<div class="col-sm-9">
										<select name="industry" class="form-control">
                                            <option>Select Industry</option>
                                            <?php
                                                foreach($movie as $rowindustry)
                                                {
                                            ?>
                                                <option value="<?php echo $rowindustry->industry_id ?>"><?php echo $rowindustry->industry_name ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        
										</div>	
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Category Name</label>
										<div class="col-sm-9">
                                        <select name="category[]" class="form-control" multiple>
                                            <option>Select Category</option>
                                            <?php
                                                foreach($movie1 as $rowcategory)
                                                {
                                            ?>
                                                <option value="<?php echo $rowcategory->category_id ?>"><?php echo $rowcategory->category_name ?></option>
												
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        	
                                    </div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Multiplex Name</label>
										<div class="col-sm-9">
                                        <select name="multiplex[]" class="form-control" multiple>
                                            <option>Select MultiPlex</option>
                                            <?php
                                                foreach($movie2 as $rowmultiplex)
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
										<label class="col-sm-3 control-label">Movie Name</label>
										<div class="col-sm-9">
										<input type="text" name="name" class="form-control" placeholder="Enter Movie Name" data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />


									<div class="form-group">
										<label class="col-sm-3 control-label">Movie cast</label>
										<div class="col-sm-9">
											<select name="cast[]" id="" class="form-control" multiple >
												<option value="">Select movie Cast</option>
												<?php
													foreach($cast as $row)
													{
												?>
												 <option value="<?php echo $row->cast_id ?>"><?php echo $row->cast_name ?></option>
                                      
												<?php
													}
												?>
											</select>
                                      
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Price</label>
										<div class="col-sm-9">
                                        <input type="text" name="price" class="form-control" placeholder="Enter Movie Price " data-parsley-trigger="change" required>
										
                                     </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Rating</label>
										<div class="col-sm-9">
										<input type="text" name="rating" class="form-control" placeholder="Enter Movie Rating" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
								
									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Experience</label>
										<div class="col-sm-9">
											<input type="text" name="experience" class="form-control" placeholder="Enter Movie Experience" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Status</label>
										<div class="col-sm-9">
											<input type="text" name="status" class="form-control" placeholder="Enter Status" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Description</label>
										<div class="col-sm-9">
											<input type="text" name="description" class="form-control" placeholder="Movie Description" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">	Movie Poster</label>
										<div class="col-sm-9">
										<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="poster" multiple>
											</span>		
									</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Images</label>
										<div class="col-sm-9">
										<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="image" multiple>
										</span>	
									</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Review</label>
										<div class="col-sm-9">
											<input type="text" name="review" class="form-control" placeholder="Enter Movie Review" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Trailer</label>
										<div class="col-sm-9">
										<textarea  name="trailer" placeholder="Enter Movie Trailer" class="form-control" required></textarea>
											
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Langauge</label>
										<div class="col-sm-9">
											<input type="text" name="langauge" class="form-control" placeholder=" Enter Movie Langauge" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Date </label>
										<div class="col-sm-9">
											<input type="date" name="screen" class="form-control" placeholder=" Enter Screen " data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									<div class="form-group">
										<label class="col-sm-3 control-label">Movie Duration</label>
										<div class="col-sm-9">
											<input type="text" name="duration" class="form-control" placeholder="Enter Movie Duration" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									

									
							</div>
							<div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-success" id="form4Submit">Submit</button>
							</div>
							</form>
							
						</section>
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