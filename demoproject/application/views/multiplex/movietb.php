<!--  CONTENT  -->
<section id="content">
			<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Movie Ticket Booking</strong> Records</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <th>ticketbooking_id</th>
                                            <th>movie_id</th>
                                            <th>multiplex_id</th>
                                            <th>movieticket_id</th>
                                            <th>seatplan_id</th>
                                            <th>ticketbooking_number</th>
                                            <th>no_of_seats</th>
                                            <th>toatlamomunt</th>
                                            <th>customername</th>
                                            <th>customeremail</th>
                                            <th>customermobile</th>
                                            <th>paymentgateway</th>
                                            <th>ticketbooking_status</th>
                                            <th>ticketbooking_dateregister</th>
										</tr>
									</thead>
									<tbody>
                                              <?php
                                                foreach($data as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->ticketbooking_id ?></td>
                                                        <td><?php echo $row->movie_name?></td>
                                                        <td><?php echo $row->multiplex_name ?></td>
                                                        <td><?php echo $row->movieticket_time ?></td>
                                                        <td><?php echo $row->seat_name ?></td>
                                                        <td><?php echo $row->ticketbooking_number ?></td>
                                                        <td><?php echo $row->no_of_seats?></td>
                                                        <td><?php echo $row->toatlamomunt ?></td>
                                                        <td><?php echo $row->customername ?></td>
                                                        <td><?php echo $row->customeremail ?></td>
                                                        <td><?php echo $row->customermobile ?></td>
                                                        <td><?php echo $row->paymentgateway ?></td>
														<?php 
															if($row->ticketbooking_status == "unblocked")
															{
																?>
																	<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/movietb_controller/update/<?php echo $row->ticketbooking_id ?>">
																	<?php echo $row->ticketbooking_status ?></a></td>
																<?php
															}
															else
															{
																?>
																	<td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/movietb_controller/update/<?php echo $row->ticketbooking_id ?>">
																	<?php echo $row->ticketbooking_status ?></a></td>
																<?php
															}
														?>
                                                        <td><?php echo $row->ticketbooking_dateregister ?></td>
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