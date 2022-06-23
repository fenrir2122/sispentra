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
	<div class="container" style="height: 80%">
		<div class="row h-100 justify-content-center">
			<div class="col-xl-8 col-10 align-self-center">

				<h6 class="text-white">powered by</h6>
				<div class="card shadow-lg">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?php echo base_url('public/asset/img/background-3301487.jpg'); ?>" style="height: 100%" class="card-img img-responsive" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<div class="card-title blue text-center mb-5">
									<small>SISPENTRA</small><br />
									<h6>Sign In</h6>
								</div>
								<div class="row">
									<div class="col-12">
										<form method="post" action="<?= base_url() . '/public/index.php/login/signin'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
											<?= csrf_field(); ?>
											<div class="form-row">
												<div class="form-group col-12">
													<?php if (isset($error)) { ?>
														<div class="alert alert-danger text-center" role="alert">
															<?= "<small>".$error."</small>"?>
														</div>
													<?php } ?>
													<!-- <label for="email">Email</label> -->
													<input type="email" name="email" class="form-control <?php if (isset($email) && $email != null) {
																								echo 'is-invalid';
																							} ?>" id="email" placeholder="E-mail" required>
													<div class="invalid-feedback">
														<?php if (isset($email) && $email != null) {
															echo $email;
														} ?>
													</div>
												</div>
												<div class="form-group col-12">
													<!-- <label for="password">Password</label> -->
													<input type="password" name="password" class="form-control <?php if (isset($password) && $password != null) {
																									echo 'is-invalid';
																								} ?>" id="password" placeholder="Password" required>
													<div class="invalid-feedback">
														<?php if (isset($password) && $password != null) {
															echo $password;
														} ?>
													</div>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn btn-dark mt-3">Login</button>
												</div>
												<div class="col-12 text-right">
													<small><a href="<?= base_url().'/public/index.php/fpassword'?>">Forgot Password?</a></small>
												</div>
											</div>
										</form>
										<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="mt-3 text-center text-white">Don't have an account? Create <a href="<?= base_url().'/public/index.php/register'?>">here</a></p>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- <script src="<?php //echo base_url('public/asset/js/my-login.js'); 
						?>"></script> -->
	<!-- <script src="js/my-login.js"></script> -->
</body>

</html>