<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sistem Keamanan Data | </title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('asset/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Font Awesome -->
  <link href="<?php echo base_url('asset/gentelella-master/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <!-- NProgress -->
  <link href="<?php echo base_url('asset/gentelella-master/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
  <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->
  <!-- Animate.css -->
  <link href="<?php echo base_url('asset/gentelella-master/vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <!-- <link href="../vendors/animate.css/animate.min.css" rel="stylesheet"> -->

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url('asset/gentelella-master/build/css/custom.min.css'); ?>" rel="stylesheet">
  <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
        <form action="<?php echo base_url('index.php/login') ?>" method="post">
            <h1>Login Form</h1>
            <div>
            <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
            </div>
            <div>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <select name="role" required="required" class="form-control" >
                <option disabled="selected">Login Sebagai :</option>
                <option value="2">User</option>
                <option value="1">Admin</option>
              </select>
            <div class="row justify-content-center">
              <input type="submit" name="submit" id="submit" value="Login" class="btn btn-default submit">
            </div>
        </form>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Sistem Keamanan Data</h1>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
            <h1>Create Account</h1>
            <?php echo form_open(base_url('index.php/login/regis')); ?>
            <div>
              <input id="rusername" name="rusername" type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input id="rpassword" name="rpassword" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <input id="passconf" name="passconf" type="password" class="form-control" placeholder="Confirm Password" required="" />
            </div>
            <div class="row justify-content-center">
              <input type="submit" name="submit" id="submit" value="Register" class="btn btn-default submit">
            </div>
            </form>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Sistem Keamanan Data</h1>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>