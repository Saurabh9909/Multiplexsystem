<!--  CONTENT  -->
<section id="content">
			<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Food & Bevrages Booking</strong> Records</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <th>foodbeverage_id</th>
                                            <th>foodbeverage_name</th>
                                            <th>foodbeverage_price</th>
                                            <th>foodbeverage_image</th>
                                            <th>foodbeverage_status</th>
                                            <th>foodbeverage_dateregister</th>
											<th>Attribute</th>
										</tr>
									</thead>
									<tbody>
                                              <?php
                                                foreach($data as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->foodbeverage_id?></td>
                                                        <td><?php echo $row->foodbeverage_name ?></td>
                                                        <td><?php echo $row->foodbeverage_price ?></td>
                                                        <td><img src="<?php echo base_url() ?>/images/<?php echo $row->foodbeverage_image ?>" height="100" width="100"></td>
														<?php 
															if($row->foodbeverage_status == "unblocked")
															{
																?>
																	<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/fbbooking_controller/update/<?php echo $row->foodbeverage_id ?>">
																	<?php echo $row->foodbeverage_status ?></a></td>
																<?php
															}
															else
															{
																?>
																	<td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/fbbooking_controller/update/<?php echo $row->foodbeverage_id ?>">
																	<?php echo $row->foodbeverage_status ?></a></td>
																<?php
															}
														?>
														<td><?php echo $row->foodbeverage_dateregister ?></td>
                                                        <td><a class="fa fa-edit (alias)" href="<?php echo site_url(); ?>/fbbooking_controller/edit_fb/<?php echo $row->foodbeverage_id ?>">Update</a></td>
														<td><a class="fa  fa-trash-o" href="<?php echo site_url(); ?>/fbbooking_controller/delete_fb/<?php echo $row->foodbeverage_id ?>">Delete</a></td>
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