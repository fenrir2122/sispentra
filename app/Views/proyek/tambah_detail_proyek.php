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
                    <h3>Proyek</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Staff Proyek</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Input Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tabel Input Staff</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <form method="post" action="<?php echo base_url() . 'index.php/admin/tambahDetailProyek'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Staff<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <select class="selectpicker form-control" data-live-search="true" id="id_user" name="id_user" data-live-search="true">
                                                            <?php foreach ($user as $key) { ?>
                                                                <option value="<?php echo $key['id_user'] ?>"><?php echo $key['nama'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <div class="col-md-2 col-sm-2 offset-md-3">
                                                        <button class="btn btn-warning" type="reset">Reset</button>
                                                        <button type="submit" class="btn btn-primary">Input</button>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 offset-md-3">
                                                        <a class="btn btn-success" href="<?php echo base_url('index.php/admin/insertProyek/'); ?>">Submit</a>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box table-responsive">
                                                        <p class="text-muted font-13 m-b-30">
                                                            List komponen produksi mesin Solo Tehnik :
                                                        </p>
                                                        <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Nama Staff</th>
                                                                    <th class="text-center">NIK</th>
                                                                    <th class="text-center">Jenis Kelamin</th>
                                                                    <th class="text-center">Jabatan</th>
                                                                    <th class="text-center">Foto</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if (isset($cart_user)) {
                                                                foreach ($cart_user as $key) { ?>
                                                                    <tr>
                                                                        <td class="align-middle text-center"><?php echo $key['nama']; ?></td>
                                                                        <td class="align-middle text-center"><?php echo $key['nik']; ?></td>
                                                                        <td class="align-middle text-center"><?php if ($key['jenis_kelamin'] == 'L') {
                                                                                                                    echo 'Pria';
                                                                                                                } else {
                                                                                                                    echo 'Wanita';
                                                                                                                }
                                                                                                                ?></td>
                                                                        <td class="align-middle text-center"><?php echo $key['nama_jabatan']; ?></td>
                                                                        <td class="align-middle text-center"><img src="<?php echo base_url() . 'uploads/profile/' . $key['url_foto'] ?>" alt="<?php echo $key['url_foto'] ?>" height="50" width="37.5"></td>
                                                                        <td class="align-middle text-center"><a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/admin/hapusCartTambahProyek/') . $key['id_user']; ?>">Hapus</a></td>
                                                                    </tr>
                                                                <?php }} ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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