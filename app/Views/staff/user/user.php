<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view('layout/staff/header_staff'); ?>
    <!-- /header -->
</head>

<body class="nav-md">
    <!-- quick info -->
    <?php $this->load->view('layout/staff/quick_info'); ?>
    <!-- /quick info -->

    <!-- sidebar, top naivgation, menu footer -->
    <?php $this->load->view('layout/staff/navi_staff'); ?>
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
            <?php //print_r ($id_user());
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data User</h2>
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
                            <div class="d-flex justify-content-center">
                                <img class="center" src="<?php echo base_url() . 'uploads/profile/' . $url_foto; ?>" width="200" height="300">
                            </div>
                            <br>
                            <br>
                            <br>
                            <form method="post" action="" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis-akun">Jenis Akun
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="jenis_akun" id="jenis_akun" class="form-control" disabled value="<?php switch ($role_id) {
                                                                                                                                        case "0":
                                                                                                                                            echo "Staff";
                                                                                                                                            break;
                                                                                                                                        case "1":
                                                                                                                                            echo "Admin";
                                                                                                                                            break;
                                                                                                                                    } ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="nama" id="nama" class="form-control" disabled value="<?php echo $nama; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_kelamin">Jenis Kelamin
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" disabled value="<?php switch ($jenis_kelamin) {
                                                                                                                                            case "P":
                                                                                                                                                echo "Wanita";
                                                                                                                                                break;
                                                                                                                                            case "L":
                                                                                                                                                echo "Pria";
                                                                                                                                                break;
                                                                                                                                        } ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tempat_lahir" id="tempat_lahir" class="date-picker form-control" disabled type="text" value="<?php echo $tempat_lahir; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tanggal_lahir" id="tanggal_lahir" class="date-picker form-control" type="date" disabled value="<?php echo $tanggal_lahir; ?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="jabatan" id="jabatan" class="date-picker form-control" disabled type="text" value="<?php echo $jabatan; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3" disabled><?php echo $alamat; ?></textarea>
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