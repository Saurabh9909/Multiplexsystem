<!--  CONTENT  -->
<section id="content">
			<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Contact</strong> Records</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>contact_id</th>
											<th>contact_name</th>
											<th>contact_email</th>
											<th>contact_subject</th>
											<th>contact_message</th>
											<th>contact_status</th>
											<th>contact_dateregister</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($data as $show)
										{
										?>
											<tr>
												<td><?php echo $show->contact_id ?></td>
												<td><?php echo $show->contact_name ?></td>
												<td><?php echo $show->contact_email ?></td>
												<td><?php echo $show->contact_subject ?></td>
												<td><?php echo $show->contact_message ?></td>
												<?php 
												if($show->contact_status == "unblocked")
												{
													?>
														<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/contactcontroller/update/<?php echo $show->contact_id ?>">
														<?php echo $show->contact_status ?></a></td>
													<?php
												}
												else
												{
													?>
	                                        	    <td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/contactcontroller/update/<?php echo $show->contact_id ?>">
													<?php echo $show->contact_status ?></a></td>
													<?php
												}
											?>
												<td><?php echo $show->contact_dateregister ?></td>
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