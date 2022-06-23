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

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Invoice</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <section class="content invoice">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-sm-4 invoice-header">
                                        <h1>
                                            Invoice
                                        </h1>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Dari,
                                        <address>
                                            <strong>CV. Solo Tehnik</strong>
                                            <br>Pucangsawit, RT 04 RW 08, Jebres
                                            <br>Kota Surakarta, Jawa Tengah 57125
                                            <br>Telepon: 0858-6714-5533
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        Kepada Yth,
                                        <address>
                                            <strong><?php echo $nama['nama'];?></strong>
                                            <br><?php echo $nama['alamat'];?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #<?php echo $nama['id_pemesanan'];?></b>
                                        <br>
                                        <br>
                                        <b>Per Tanggal:</b> <?php echo date('d/m/Y');?>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="  table">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Product</th>
                                                    <th>Harga Satuan</th>
                                                    <th style="width: 20%;">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $total = 0;
                                                foreach ($pemesanan as $key) { ?>
                                                    <tr>
                                                        <td><?php echo $key['jumlah_mesin'] ?></td>
                                                        <td><?php echo $key['nama_mesin'] ?></td>
                                                        <td><?php echo "Rp" . number_format($key['harga_pokok']) ?></td>
                                                        <td><?php echo "Rp" . number_format($key['harga_pokok'] * $key['jumlah_mesin']) ?></td>
                                                    </tr>
                                                <?php $total += $key['harga_pokok'] * $key['jumlah_mesin'];
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <?php $bayar = 0;
                                foreach ($pembayaran as $key) {
                                    $bayar += $key['jumlah_dibayar'];
                                } ?>

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-md-6">
                                        <p class="lead">Teknis Pembayaran</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>DP I - 50%</th>
                                                        <td><?php echo 'Rp' . number_format($total * 0.5); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>DP II - 30%</th>
                                                        <td><?php echo 'Rp' . number_format($total * 0.3); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pelunasan (Barang Ready)</th>
                                                        <td><?php echo 'Rp' . number_format($total * 0.2); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <p class="lead">Jumlah yang Harus Dibayar</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th style="width:50%">Total:</th>
                                                        <td><?php echo 'Rp' . number_format($total); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah Terbayar</th>
                                                        <td><?php echo 'Rp' . number_format($bayar); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kekurangan:</th>
                                                        <td><?php echo 'Rp' . number_format($total - $bayar); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">

                                        <div class="col-md-12">
                                            <p>Berikut kami cantumkan nomer rekening untuk pembayaran mesin di atas :</p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>No Rek 153.046.155.2</td>
                                                            <td>Bank BCA</td>
                                                            <td>Atas Nama Daru Sumantoro Rosidi</td>
                                                        </tr>
                                                        <tr>
                                                            <td>No Rek 900.00.1991.419.2</td>
                                                            <td>Bank Mandiri</td>
                                                            <td>Atas Nama Daru Sumantoro Rosidi</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($bayar >= $total) {
                                        echo '
                                    <div class="col-md-6">
                                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                            Dengan ini pembayaran atas nama ' . $nama["nama"] . ', pada tanggal ' . date('d / m / Y') . ' telah LUNAS.
                                        </p>
                                    </div>';
                                    } ?>
                                </div>
                                <!-- /.row -->


                                <!-- this row will not appear when printing -->
                                <div class="row d-print-none">
                                    <div class=" ">
                                        <button class="btn btn-outline-dark" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                    </div>
                                </div>
                            </section>
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