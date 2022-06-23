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
                    <h3>Pembayaran</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Pembayaran</h2>
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
                            <br />
                            <form method="post" action="<?php echo base_url() . 'index.php/admin/tambahPembayaran'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Pemesanan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="selectpicker form-control" name="id_pemesanan" required="required" data-live-search="true">
                                            <?php foreach ($pemesanan as $key) { ?>
                                                <option value="<?php echo $key['id_pemesanan'] ?>"><?php echo $key['nama'] ?> | <?php
                                                                                                                                foreach ($harga as $rs => $val) {
                                                                                                                                    if ($rs == $key['id_pemesanan']) {
                                                                                                                                        echo "Rp" . number_format($val['harga'], 0, ",", ".");
                                                                                                                                    }
                                                                                                                                } ?> | <?php echo $key['tanggal_pesan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Total Bayar<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="jumlah_dibayar" id="jumlah_dibayar" class="form-control" required type="text">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Bayar<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tanggal_dibayar" id="tanggal_dibayar" class="form-control" required="required" type="date" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
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