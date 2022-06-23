<!DOCTYPE html>
<html style="height: 100%" lang="en">

<head>
	<!-- <meta charset="utf-8"> -->
	<!-- <meta name="author" content="Kodinger"> -->
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
	<!-- <title>My Login Page</title> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- header -->
	<?php echo view('layout/admin/header_admin'); ?>
	<link href="<?php echo base_url('public/asset/bootstrap/scss/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- /header -->
	<!-- <script src="<?php //echo base_url('public/asset/css/my-login.css'); 
						?>"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/my-login.css"> -->
</head>

<body style="height: 100%; background: url(<?php echo base_url('public/asset/img/office-g932d71e71_1920.jpg'); ?>" class="bg-light">
	<div class="container" style="height: 100%">
		<div class="row h-100 justify-content-center">
			<div class="col-lg-6 col-md-8 col-10 align-self-center">

				<div class="card shadow-lg">
					<div class="row no-gutters">
						<div class="col-lg-12">
							<div class="card-body">
								<div class="card-title blue text-center">
									<small>SISPENTRA</small><br />
									<h6>Forgot password</h6>
								</div>
								<div class="ln_solid"></div>
								<div class="row">
									<div class="col-12">
										<form method="post" action="<?= base_url() . '/public/index.php/fpassword/verify'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
											<?= csrf_field(); ?>
											<div class="form-row">
												<div class="form-group col-12 mb-0">
													<label for="email">Email</label>
													<div class="input-group">
														<input type="email" class="form-control" name="email" id="email" placeholder="Enter your e-mail" required>
														<div class="input-group-append">
															<button type="submit" class="btn btn-dark">Send</button>
														</div>
													</div>
												</div>
												<?php if (isset($errors)) { ?>
													<div class="form-group col-12 mb-2">
														<div class="alert alert-danger" role="alert">
															<small><?= $errors?></small>
														</div>
													</div>
												<?php } ?>
											</div>
											<hr class="mt-1">
											<div class="alert alert-info" role="alert">
												Check your e-mail for verification code. The verification code will expire in 5 minutes.
											</div>
									</div>
									</form>
								</div>
								<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('public/asset/gentelella-master/build/js/custom.js'); ?>"></script>
	<!-- <script src="<?php //echo base_url('public/asset/js/my-login.js'); 
						?>"></script> -->
	<!-- <script src="js/my-login.js"></script> -->
</body>

</html>