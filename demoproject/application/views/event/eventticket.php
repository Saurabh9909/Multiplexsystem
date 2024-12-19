<!--  CONTENT  -->
<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">FooTable Tables</h1>
							<small class="text-muted">Welcome to Falcon application</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>FooTable</strong> Example</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>eventticket_id</th>
                                            <th>eventspeaker_id</th>
                                            <th>eventcategory_id</th>
                                            <th>event_id</th>
                                            <th>eventticket_type</th>
                                            <th>totalamount</th>
                                            <th>cuntomer_name</th>
                                            <th>customer_email	</th>
                                            <th>customer_mob</th>
                                            <th>eventticket_status</th>
                                            <th>eventticket_dateregister</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($data as $show)
										{
										?>
											<tr>
												<td><?php echo $show->eventticket_id?></td>
                                                <td><?php echo $show->eventspeaker_id?></td>
                                                <td><?php echo $show->eventcategory_id ?></td>
                                                <td><?php echo $show->event_id?></td>
                                                <td><?php echo $show->eventticket_type?></td>
                                                <td><?php echo $show->totalamount ?></td>
                                                <td><?php echo $show->cuntomer_name?></td>
                                                <td><?php echo $show->customer_email?></td>
                                                <td><?php echo $show->customer_mob ?></td>
												<?php 
												if($show->eventticket_status == "unblocked")
												{
													?>
														<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/eventticket_controller/update/<?php echo $show->eventticket_id ?>">
														<?php echo $show->eventticket_status ?></a></td>
													<?php
												}
												else
												{
													?>
	                                        	    <td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/eventticket_controller/update/<?php echo $show->eventticket_id ?>">
													<?php echo $show->eventticket_status ?></a></td>
													<?php
												}
											?>
                                                <td><?php echo $show->eventticket_dateregister?></td>
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