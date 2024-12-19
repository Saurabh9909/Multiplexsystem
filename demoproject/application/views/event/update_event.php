<!-- CONTENT -->
        <section id="content">
			<div class="page page-forms-validate">
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Update Event</strong></h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo site_url() ?>/eventcontroller/update_event/<?php echo $edit->event_id  ?>"  name="form4" role="form" id="form4" >
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Categoryid</label>
                                        <input type="hidden" name="event_id" value="<?php echo $edit->event_id ?>">
                                        <div class="col-sm-9">
											<select name="event_cat_id" class="form-control">
												<option>Select Event Category</option>
													<?php 
													foreach($eventcatagory as $row)
													{
														if($row->eventcategory_id==$edit->eventcategory_id)
														{
													?>
															<option selected value="<?php echo $row->eventcategory_id ?>"><?php echo $row->eventcategory_title ?></option>
													<?php
														}
														else
														{
													?>
																<option value="<?php echo $row->eventcategory_id ?>"><?php echo $row->eventcategory_title ?></option>
													<?php
														}
													}
													?>
											</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Speakerid</label>
										<div class="col-sm-9">
										<select name="event_speaker_id" class="form-control">
												<option>Select Event Speaker</option>
													<?php  
													foreach($eventspeaker as $row)
													{
														if($row->eventspeaker_id==$edit->eventspeaker_id)
														{
													?>
															<option selected value="<?php echo $row->eventspeaker_id ?>"><?php echo $row->eventspeaker_name ?></option>
													<?php
														}
														else
														{
													?>
															<option value="<?php echo $row->eventspeaker_id ?>"><?php echo $row->eventspeaker_name ?></option>
													<?php
														}	
													}
													?>
											
											</select>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Title</label>
										<div class="col-sm-9">
											<input name="event_title" type="text" class="form-control" value="<?php echo $edit->event_title ?>" placeholder="Event Title"   required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Trailer</label>
										<div class="col-sm-9">
											<input name="event_trailer" type="text" class="form-control" value="<?php echo $edit->event_trailer ?>">
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Price</label>
										<div class="col-sm-9">
											<input name="event_price" type="text" class="form-control"  value="<?php echo $edit->event_price ?>" placeholder="Event Price"  required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Images</label>
										<div class="col-sm-9">
										<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input name="event_images" type="file" class="form-control" placeholder="Event Images" value=<?php echo  $edit->event_images ?> >
											</span>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Poster</label>
										<div class="col-sm-9">
										<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input name="event_poster" type="file" class="form-control" placeholder="Event Poster" value=<?php echo  $edit->event_poster ?> >
											</span>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Description</label>
										<div class="col-sm-9">
											<input name="event_description" type="text" class="form-control"  value="<?php echo $edit->event_description ?>" placeholder="Event Description"required>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Type</label>
										<div class="col-sm-9">
											<input name="event_type" type="text" class="form-control" value="<?php echo $edit->event_type ?>" placeholder="Event Type" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Address</label>
										<div class="col-sm-9">
											<input name="event_address" type="text" class="form-control"value="<?php echo $edit->event_address ?>" placeholder="Event Address" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Event Date</label>
										<div class="col-sm-9">
											<input name="event_date" type="text" class="form-control" value="<?php echo $edit->event_date ?>" placeholder="Event Date" required>
										</div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
                                    <div class="form-group">
										<label class="col-sm-3 control-label">State</label>
										<div class="col-sm-9">
                                                <select id="state" class="form-control" name="txtstate" value="<?php echo $edit->state_id ?>" onchange="getcity(this.value)">
                                                    <option>Select State</option>
                                                    <?php
                                                    foreach($state as $rowstate)
                                                    {
														if($rowstate->state_id==$edit->state_id)
														{
													?>
															<option selected value="<?php echo $rowstate->state_id ?>"><?php echo $rowstate->state_name ?></option>    
													<?php
														}
														else
														{
													?>
															<option value="<?php echo $rowstate->state_id ?>"><?php echo $rowstate->state_name ?></option>    
													<?php
														}
                                                    }
                                                    ?>
                                                </select>
                                        </div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
                                    <div class="form-group">
										<label class="col-sm-3 control-label">City</label>
										<div class="col-sm-9">
                                                <select id="city" class="form-control" name="txtcity" value="<?php echo $edit->city_id ?>"onchange="getarea(this.value)">
                                                    <option>Select City</option>
                                                    <?php
                                                    foreach($city as $rowcity)
                                                    {
														if($rowcity->city_id==$edit->city_id)
														{
													?>
                                                            <option selected value="<?php echo $rowcity->city_id ?>"><?php echo $rowcity->city_name ?></option>    
													<?php
														}
														else
														{
													?>
                                                            <option value="<?php echo $rowcity->city_id ?>"><?php echo $rowcity->city_name ?></option>    
													<?php
														}
                                                    }  
                                                    ?>
                                                </select>
                                        </div>
									</div>
                                    <hr class="line-dashed full-witdh-line" />
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Area</label>
										<div class="col-sm-9">
                                                <select id="area" class="form-control" value="<?php echo $edit->area_id ?>"name="txtarea">
                                                    <option>Select Area</option>
                                                    <?php
                                                    foreach($area as $rowarea)
                                                    {
														if($rowarea->area_id==$edit->area_id)
														{
													?>
															<option selected value="<?php echo $rowarea->area_id ?>"><?php echo $rowarea->area_name ?></option>    															
													<?php
														}
														else
														{
													?>
                                                            <option value="<?php echo $rowarea->area_id ?>"><?php echo $rowarea->area_name ?></option>   
													<?php
														}
                                                    }
                                                    ?>
                                                </select>
                                        </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
							
							</div>
							<div class="boxs-footer text-center bg-tr-black lter dvd dvd-top">
								<input type="submit" value="submit" class="btn btn-raised btn-success" id="form4Submit">
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
			})
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
</html>>
			