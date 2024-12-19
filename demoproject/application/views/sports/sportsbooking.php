<!--  CONTENT  -->
<section id="content">
			<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Sports Booking </strong> Details</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <th>sportsbooking_id</th>
                                            <th>sports_title</th>
                                            <th>customer_name</th>
                                            <th>customer_email</th>
                                            <th>customer_mobile</th>
                                            <th>ticket_type</th>
                                            <th>ticket_quantity</th>
                                            <th>totalamount</th>
                                            <th>sportsbooking_status</th>
                                            <th>sportsbooking_dateregister</th>
										</tr>
									</thead>
									<tbody>
                                              <?php
                                                foreach($data as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->sportsbooking_id ?></td>
                                                        <td><?php echo $row->sports_title?></td>
                                                        <td><?php echo $row->customer_name ?></td>
                                                        <td><?php echo $row->customer_email ?></td>
                                                        <td><?php echo $row->customer_mobile ?></td>
                                                        <td><?php echo $row->ticket_type ?></td>
                                                        <td><?php echo $row->ticket_quantity?></td>
                                                        <td><?php echo $row->totalamount ?></td>
														<?php 
															if($row->sportsbooking_status == "unblocked")
															{
																?>
																	<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/sportsbooking_controller/update/<?php echo $row->sportsbooking_id ?>">
																	<?php echo $row->sportsbooking_status ?></a></td>
																<?php
															}
															else
															{
																?>
																	<td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/sportsbooking_controller/update/<?php echo $row->sportsbooking_id ?>">
																	<?php echo $row->sportsbooking_status ?></a></td>
																<?php
															}
														?>
                                                        <td><?php echo $row->sportsbooking_status ?></td>
                                                        <td><?php echo $row->sportsbooking_dateregister ?></td>
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