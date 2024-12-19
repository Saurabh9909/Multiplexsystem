<!--  CONTENT  -->
<section id="content">
			<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Multiplex</strong> Records</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <th>multiplex_id</th>
                                            <th>area_id</th>
                                            <th>city_id</th>
                                            <th>state_id</th>
                                            <th>multiplex_name</th>
                                 
                                            <th>multiplex_status</th>
                                            <th>multiplex_dateregister</th>
											<th>Update</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
                                              <?php
                                                foreach($data as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row->multiplex_id ?></td>
                                                        <td><?php echo $row->area_name?></td>
                                                        <td><?php echo $row->city_name ?></td>
                                                        <td><?php echo $row->state_name ?></td>
                                                        <td><?php echo $row->multiplex_name ?></td>
                                                 
														<?php 
															if($row->multiplex_status == "unblocked")
															{
																?>
																	<td><a class="btn btn-raised btn-success btn-xs" href="<?php echo site_url() ?>/multiplex_controller/update/<?php echo $row->multiplex_id ?>">
																	<?php echo $row->multiplex_status ?></a></td>
																<?php
															}
															else
															{
																?>
																	<td><a class="btn btn-raised btn-danger btn-xs" href="<?php echo site_url() ?>/multiplex_controller/update/<?php echo $row->multiplex_id ?>">
																	<?php echo $row->multiplex_status ?></a></td>
																<?php
															}
														?>
                                                        <td><?php echo $row->multiplex_dateregister?></td>
														<td><a class="fa fa-edit (alias)" href="<?php echo site_url() ?>/multiplex_controller/edit_multiplex/<?php echo $row->multiplex_id ?>">Update</a></td>
														<td><a class="fa  fa-trash-o" href="<?php echo site_url() ?>/multiplex_controller/delete_multiplex/<?php echo $row->multiplex_id ?>">Delete</a></td>
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