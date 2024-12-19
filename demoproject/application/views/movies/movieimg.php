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
								<table id="searchTextResults" data-filter="#filter" data-page-size="100" class="footable table table-custom">
									<thead>
										<tr>
											<th>movieimg_id	</th>
                                            <th>movie_name</th>
                                            <th>movieimg</th>
                                            <th  colspan="2" style="text-align:center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										
										foreach($data as $row)
										{
										?>
										<tr>
											<td><?php echo $row->movieimg_id ?></td>
                                            <td><?php echo $row->movie_name ?></td>
											<td><img src="<?php echo base_url() ?>/images/<?php echo $row->movieimg ?>" height="100"> </td>
                                            
											<td><a href="<?php echo site_url()?>/movieimg_controller/edit/<?php echo $row->movieimg_id ?>"><i class="fa fa-edit"></i> </a></td>
                    						  <td><a href="<?php echo site_url()?>/movieimg_controller/delete/<?php echo $row->movieimg_id ?>"><i class="fa fa-trash-o"></i>  </a></td></tr>
										
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
	<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
</html>