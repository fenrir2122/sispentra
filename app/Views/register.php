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
									<h6>Create a new account</h6>
								</div>
								<div class="ln_solid"></div>
								<div class="row">
									<div class="col-12">
										<form method="post" action="<?= base_url() . '/public/index.php/register/regist'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
											<?= csrf_field(); ?>
											<div class="form-row">
												<div class="form-group col-12">
													<label for="email">Email</label>
													<input type="email" class="form-control 
													<?php if (isset($errors['email'])) {
														echo 'is-invalid';
													} ?>" name="email" id="email" placeholder="Enter your e-mail" value="<?php if (isset($email) && !isset($errors['email'])) echo $email; ?>" required>
													<div class="invalid-feedback">
														<?php if (isset($errors['email'])) {
															echo $errors['email'];
														} ?>
													</div>
												</div>
												<div class="form-group col-12">
													<label for="pass">Password</label>
													<div class="input-group">
														<input type="password" class="form-control 
													<?php if (isset($errors['pass'])) {
														echo 'is-invalid';
													} ?>" name="pass" id="pass" placeholder="Enter your password" value="<?php if (isset($pass) && !isset($errors['pass'])) echo $pass; ?>" required>
														<div class="input-group-append">
															<button id="pass" class="btn btn-secondary" onclick="passconvert('pass')" type="button"><span class="fa fa-eye"></span></button>
														</div>
													</div>
													<div class="invalid-feedback">
														<?php if (isset($errors['password'])) {
															echo $errors['password'];
														} ?>
													</div>
												</div>
												<div class="form-group col-12">
													<label for="confirmpass">Password Confirmation</label>
													<div class="input-group">
														<input type="password" class="form-control
													<?php if (isset($errors['confirmpass'])) {
														echo 'is-invalid';
													} ?>" name="confirmpass" id="confirmpass" placeholder="Enter your password again" value="<?php if (isset($confirmpass) && !isset($errors['confirmpass'])) echo $confirmpass; ?>" required>
														<div class="input-group-append">
															<button id="conf" class="btn btn-secondary" onclick="passconvert('confirmpass')" type="button"><span class="fa fa-eye"></span></button>
														</div>
													</div>
													<div class="invalid-feedback">
														<?php if (isset($errors['confirmpass'])) {
															echo $errors['confirmpass'];
														} ?>
													</div>
												</div>
												<div class="form-group col-12">
													<label for="nama">Name</label>
													<input type="text" class="form-control
													<?php if (isset($errors['nama'])) {
														echo 'is-invalid';
													} ?>" name="nama" id="nama" placeholder="Enter your name" value="<?php if (isset($nama) && !isset($errors['nama'])) echo $nama; ?>" required>
													<div class="invalid-feedback">
														<?php if (isset($errors['nama'])) {
															echo $errors['nama'];
														} ?>
													</div>
												</div>
												<div class="form-group col-12">
													<label for="bagian">Role</label>
													<select id="bagian" name="bagian" class="form-control">
														<?php foreach ($list_bagian as $key => $val) {?>
															<option <?php if (isset($errors['bagian']) && $key == $errors['bagian']) echo "selected"; ?> value="<?= $key?>"><?= $val?></option>
														<?php } ?>
													</select>
													</div>
												</div>
												<div class="col-12 text-center">
													<button type="submit" class="btn btn-dark mt-3">Register</button>
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