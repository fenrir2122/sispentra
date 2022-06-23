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
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Pembayaran</h2>
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
                            <form method="post" action="<?php echo base_url() . 'index.php/admin/editPembayaran/'.$id_pembayaran; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">ID Pemesanan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="pemesanan" id="pemesanan" class="form-control" required disabled type="text" value="<?php echo $id_pemesanan.' | ' . 'Rp' . number_format($total_bayar, 0, ",", "."); ?> | <?php echo $tanggal_pesan?>">
                                    </div>
                                </div>
                                <input name="id_pemesanan" id="id_pemesanan" type="hidden" value="<?php echo $id_pemesanan?>">
                                <!-- <input name="id_pembayaran" id="id_pembayaran" type="hidden" value="<?php echo $id_pembayaran?>"> -->
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Total Bayar<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="jumlah_dibayar" id="jumlah_dibayar" class="form-control" required type="text" value="<?php echo $jumlah_dibayar?>">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Bayar<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input name="tanggal_dibayar" id="tanggal_dibayar" class="form-control" required="required" type="date" value="<?php echo $tanggal_dibayar; ?>">
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