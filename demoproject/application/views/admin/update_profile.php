<!--CONTENT  -->
<section id="content">
			<div class="page profile-page">
				<!-- page content -->
				<div class="pagecontent">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<section class="boxs">
								<div class="profile-header">
									<div class="profile_info">
										<div class="profile-image">
											<img src="<?php echo base_url()?>assets/images/profile-photo.jpg">
										</div>
										<h4 class="mb-0"><strong>Alexander</strong></h4>
										<span class="text-muted">Ui UX Designer</span>
										<div class="mt-10">
											<button class="btn btn-raised bg-blush btn-sm">Follow</button>
											<button class="btn btn-raised bg-green btn-sm">Message</button>
										</div>
										<p class="m-0">
											<a title="Twitter" href="#" class="icon-color p-5">
												<i class="fa fa-twitter"></i>
											</a>
											<a title="Facebook" href="#" class="icon-color p-5">
												<i class="fa fa-facebook"></i>
											</a>
											<a title="Google-plus" href="#" class="icon-color p-5">
												<i class="fa fa-google-plus"></i>
											</a>											
											<a title="Behance" href="#" class="icon-color p-5">
												<i class="fa fa-behance"></i>
											</a>
											<a title="Instagram" href="#" class="icon-color p-5">
												<i class="fa fa-instagram "></i>
											</a>
										</p>
									</div>
								</div>
					<div class="col-md-9 col-sm-9">
							<section class="boxs boxs-simple">
								<div class="boxs-body p-0">
									<div role="tabpanel">
										<ul class="nav nav-tabs tabs-dark-t" role="tablist">
											<li role="">
												<a href="#setting"   data-toggle="tab">Setting</a>
											</li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane" id="setting" style="display:block">
												<div class="wrap-reset">
													<form class="profile-settings" method="POST" action="<?php echo site_url() ?>/admincontroller">
														<div class="row">
															<div class="form-group col-md-12 legend">
																<h4>
																	<strong>Security</strong> Settings</h4>
																	<p>Secure your account</p>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="username">Username</label>
																<input type="text" class="form-control" id="username" value="<?php echo $data->admin_email ?>" >
																<p><?php echo $this->session->userdata('admin_email') ?></p>
															</div>
															<div class="form-group col-sm-6">
																<label for="password">Current Password</label>
																<input type="password" class="form-control" id="password" value=""  readonly>
															</div>
                                                            <div class="form-group col-sm-6">
																<label for="username">Address</label>
																<input type="text" class="form-control" id="" value="" readonly>
															</div>
															<div class="form-group col-sm-6	">
																<label for="password">Mobile</label>
																<input type="text" class="form-control" id="" value="" readonly>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="new-password">New Password</label>
																<input type="password" class="form-control" id="new-password">
															</div>
															<div class="form-group col-sm-6">
																<label for="new-password-repeat">New Password Repeat</label>
																<input type="password" class="form-control" id="new-password-repeat">
															</div>
															<div class="form-group col-sm-12">
																<button class="btn btn-raised btn-primary">Save Changes</button>
															</div>
														</div>
														<hr>
														    </div>
															<div class="col-sm-12">
																<button class="btn btn-raised btn-default">Cancel</button>
																<button class="btn btn-raised btn-primary">Save All</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /boxs body -->
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<!-- Vendor JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:14 GMT -->
</html>