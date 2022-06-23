<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view('layout/admin/header_admin'); ?>
    <!-- /header -->
</head>

<body class="nav-md">
    <!-- quick info -->
    <?php $this->load->view('layout/admin/quick_info'); ?>
    <!-- /quick info -->

    <!-- sidebar, top naivgation, menu footer -->
    <?php $this->load->view('layout/admin/navi_admin'); ?>
    <!-- /sidebar, top naivgation, menu footer -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form User</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <?php echo validation_errors(); ?>
                            <form method="post" action="<?php echo base_url() . 'index.php/admin/editUser/' . $user['id_user']; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Akun <span class="required">*</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Non-Admin <input type="radio" class="flat" name="role_id" id="NonAdmin" value="0" required <?php if ($user['role_id'] == 0) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> />

                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Admin <input type="radio" class="flat" name="role_id" id="Admin" value="1" <?php if ($user['role_id'] == 1) {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nama" id="nama" required="required" class="form-control" value="<?php echo $user['nama']; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nik">NIK <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nik" id="nik" required="required" class="form-control" value="<?php echo $user['nik']; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin <span class="required">*</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Pria <input type="radio" class="flat" name="jenis_kelamin" id="genderM" value="L" required <?php if ($user['jenis_kelamin'] == 'L') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> />

                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Wanita <input type="radio" class="flat" name="jenis_kelamin" id="genderF" value="P" <?php if ($user['jenis_kelamin'] == 'P') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tempat_lahir" id="tempat_lahir" class="date-picker form-control" required="required" type="text" value="<?php echo $user['tempat_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tanggal_lahir" id="tanggal_lahir" class="date-picker form-control" required="required" type="date" value="<?php echo $user['tanggal_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="selectpicker form-control" data-live-search="true" id="jabatan" name="jabatan" data-live-search="true">
                                            <?php foreach ($jabatan as $key) {?>
                                            <option value="<?php echo $key['id_jabatan']; ?>" <?php if($key['id_jabatan'] == $user['jabatan']) echo "selected";?> ><?php echo $key['nama_jabatan']; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3"><?php echo $user['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Status <span class="required">*</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="status1" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Aktif <input type="radio" class="flat" name="status" id="aktif" value="1" required <?php if ($user['status'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                            </label>
                                            <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Belum Verifikasi <input type="radio" class="flat" name="status" id="tidak-aktif" value="2" <?php if ($user['status'] == 2) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> />
                                            </label>
                                            <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                Tidak Aktif <input type="radio" class="flat" name="status" id="belum-verifikasi" value="0" <?php if ($user['status'] == 0) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->

    <!-- footer -->
    <?php $this->load->view('layout/admin/footer.php'); ?>
    <!-- /footer -->
</body>

</html>