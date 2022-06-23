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
                    <h3>Pemesanan</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Pemesanan</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <? //var_dump($this->session->userdata); ?>
                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Input Pemesanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tabel Cart Pemesanan</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <form method="post" action="<?php echo base_url() . 'index.php/admin/setEditPemesanan'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                                <br>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mesin<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <select class="selectpicker form-control" data-live-search="true" id="id_mesin" name="id_mesin" data-live-search="true">
                                                            <?php foreach ($mesin as $key) { ?>
                                                                <option value="<?php echo $key['id_mesin'] ?>"><?php echo $key['nama_mesin'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input name="jumlah_mesin" id="jumlah_mesin" class="date-picker form-control" required="required" type="text">
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <div class="col-md-2 col-sm-2 offset-md-3">
                                                        <button class="btn btn-warning" type="reset">Reset</button>
                                                        <button type="submit" class="btn btn-primary">Input</button>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 offset-md-3">
                                                        <a class="btn btn-success" href="<?php echo base_url('index.php/admin/insertEditPemesanan/'); ?>">Submit</a>
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
                                                                    <th class="text-center">Nama Mesin</th>
                                                                    <th class="text-center">Jumlah</th>
                                                                    <th class="text-center">Harga Pokok</th>
                                                                    <th class="text-center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($this->cart->contents() as $items) { ?>
                                                                    <tr>
                                                                        <td class="align-middle text-center">
                                                                            <?php foreach ($mesin as $key) {
                                                                                if ($key['id_mesin'] == $items['id_mesin']) {
                                                                                    echo $key['nama_mesin'];
                                                                                }
                                                                            } ?>
                                                                        </td>
                                                                        <td class="align-middle text-center"><?php echo $items['qty']; ?></td>
                                                                        <td class="align-middle text-center">
                                                                            <?php foreach ($mesin as $key) {
                                                                                if ($key['id_mesin'] == $items['id_mesin']) {
                                                                                echo $key['harga_pokok'];}} ?></td>
                                                                        <td class="align-middle text-center"><a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/admin/hapusCartEditPemesanan/') . $items['rowid']; ?>">Hapus</a></td>
                                                                    </tr>
                                                                <?php } ?>
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