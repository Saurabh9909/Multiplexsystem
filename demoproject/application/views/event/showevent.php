<!--  CONTENT  -->
<section id="content">
	<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>EVENT Records</strong></h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="20" class="footable table table-custom">
									<thead>
										<tr>
											<th>event_id</th>
                                            <th>eventcategory_title</th>
                                            <th>eventspeaker_name</th>
                                            <th>event_title</th>
                                            <th>event_trailer</th>
                                            <th>event_price</th>
                                            <th>event_images</th>
											<th>event_poster</th>
                                            <th>event_description</th>
                                            <th>event_type</th>
                                            <th>event_address</th>
                                            <th>event_date</th>
                                            <th>state_id</th>
                                            <th>city_id</th>
                                            <th>area_id</th>
                                            <th>event_status</th>
                                            <th>event_dateregister</th>
											<th>Update</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($data as $show)
										{
										?>
											<tr>
												<td><?php echo $show->event_id?></td>
                                                <td><?php echo $show->eventcategory_title?></td>
                                                <td><?php echo $show->eventspeaker_name ?></td>
                                                <td><?php echo $show->event_title?></td>
                                                <td><?php echo $show->event_trailer?></td>
                                                <td><?php echo $show->event_price ?></td>
                                                <td><img src="<?php echo base_url() ?>/images/<?php echo $show->event_images ?>" height="50" alt=""></td>
												<td><img src="<?php echo base_url() ?>/images/<?php echo $show->event_poster ?>" height="50" alt=""></td>
                                                <td><?php echo $show->event_description?></td>
                                                <td><?php echo $show->event_type ?></td>
                                                <td><?php echo $show->event_address ?></td>
                                                <td><?php echo $show->event_date?></td>
                                                <td><?php echo $show->state_name?></td>
                                                <td><?php echo $show->city_name?></td>
                                                <td><?php echo $show->area_name?></td>
												<?php 
												if($show->event_status == "unblocked")
												{
													?>
														<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/eventcontroller/update/<?php echo $show->event_id ?>">
														<?php echo $show->event_status ?></a></td>
													<?php
												}
												else
												{
													?>
	                                        	    <td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/eventcontroller/update/<?php echo $show->event_id ?>">
													<?php echo $show->event_status ?></a></td>
													<?php
												}
											?>
                                                <td><?php echo $show->event_dateregister ?></td>
												<td><a class="fa fa-edit (alias)" href="<?php echo site_url() ?>/eventcontroller/edit_event/<?php echo $show->event_id ?>">Update</a></td>
												<td><a class=" fa  fa-trash-o" href="<?php echo site_url() ?>/eventcontroller/delete_event/<?php echo $show->event_id ?>">Delete</a></td>
											</tr>
											<?php
										}
										?>
									</tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->

	</div>
	<!--/ Application Content -->

	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
</html>



