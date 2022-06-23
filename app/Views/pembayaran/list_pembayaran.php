<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view('layout/admin/header_admin'); ?>
    <!-- /header -->
    <style type="text/css" class="init">
        div.dataTables_wrapper {
            margin-bottom: 3em;
        }
    </style>
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

            <div class="row">
                <div class="col-md-12 col-sm-12 ">

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Daftar Pembayaran</h2>
                                <ul class="nav navbar-right panel_toolbox float-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <a class="btn btn-round btn-sm btn-primary float-right mr-4" href="<?php echo base_url('index.php/admin/tambahPembayaran'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Pembayaran</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List Pembayaran Berjalan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">List Pembayaran Lunas</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <div class="row">
                                                                <div class="col-sm-9 col-md-9">
                                                                    <p class="text-muted font-13 m-b-30">
                                                                        List data pembayaran mesin Solo Tehnik :
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Pemesan</th>
                                                                        <th class="text-center">Total</th>
                                                                        <th class="text-center">Status Produksi</th>
                                                                        <th class="text-center">Status Pembayaran</th>
                                                                        <th class="text-center">Detail Pembayaran</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($pemesanan as $rs) { ?>
                                                                        <?php if ($rs['status_pembayaran'] < 2) { ?>
                                                                            <tr>
                                                                                <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                                <td class="align-middle text-center"><?php $total = 0;
                                                                                                                        foreach ($harga as $key => $val) {
                                                                                                                            if ($key == $rs['id_pemesanan']) {
                                                                                                                                echo "Rp" . number_format($val['harga'], 0, ",", ".");
                                                                                                                                $total = $val['harga'];
                                                                                                                            }
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center"><?php switch ($rs["status_produksi"]) {
                                                                                                                            case "0":
                                                                                                                                echo '<span class="badge badge-pill badge-danger">Belum Berjalan</span>';
                                                                                                                                break;
                                                                                                                            case "1":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Dalam Proses</span>';
                                                                                                                                break;
                                                                                                                            case "2":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Sudah Selesai</span>';
                                                                                                                                break;
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center"><?php switch ($rs["status_pembayaran"]) {
                                                                                                                            case "0":
                                                                                                                                echo '<span class="badge badge-pill badge-danger">Belum Membayar</span>';
                                                                                                                                break;
                                                                                                                            case "1":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Belum Lunas</span>';
                                                                                                                                break;
                                                                                                                            case "2":
                                                                                                                                echo '<span class="badge badge-pill badge-success">Lunas</span>';
                                                                                                                                break;
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center" width="10%">
                                                                                    <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal<?php echo $rs['id_pemesanan']; ?>"><span class="fa fa-info-circle"></span> Detail</a>
                                                                                </td>
                                                                            </tr>
                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <div class="row">
                                                                <div class="col-sm-9 col-md-9">
                                                                    <p class="text-muted font-13 m-b-30">
                                                                        List data pembayaran lunas mesin Solo Tehnik :
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Pemesan</th>
                                                                        <th class="text-center">Total</th>
                                                                        <th class="text-center">Status Produksi</th>
                                                                        <th class="text-center">Status Pembayaran</th>
                                                                        <th class="text-center">Detail Pembayaran</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($pemesanan as $rs) { ?>
                                                                        <?php if ($rs['status_pembayaran'] == 2) { ?>
                                                                            <tr>
                                                                                <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                                <td class="align-middle text-center"><?php $total = 0;
                                                                                                                        foreach ($harga as $key => $val) {
                                                                                                                            if ($key == $rs['id_pemesanan']) {
                                                                                                                                echo "Rp" . number_format($val['harga'], 0, ",", ".");
                                                                                                                                $total = $val['harga'];
                                                                                                                            }
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center"><?php switch ($rs["status_produksi"]) {
                                                                                                                            case "0":
                                                                                                                                echo '<span class="badge badge-pill badge-danger">Belum Berjalan</span>';
                                                                                                                                break;
                                                                                                                            case "1":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Dalam Proses</span>';
                                                                                                                                break;
                                                                                                                            case "2":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Sudah Selesai</span>';
                                                                                                                                break;
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center"><?php switch ($rs["status_pembayaran"]) {
                                                                                                                            case "0":
                                                                                                                                echo '<span class="badge badge-pill badge-danger">Belum Membayar</span>';
                                                                                                                                break;
                                                                                                                            case "1":
                                                                                                                                echo '<span class="badge badge-pill badge-primary">Belum Lunas</span>';
                                                                                                                                break;
                                                                                                                            case "2":
                                                                                                                                echo '<span class="badge badge-pill badge-success">Lunas</span>';
                                                                                                                                break;
                                                                                                                        } ?></td>
                                                                                <td class="align-middle text-center" width="10%">
                                                                                    <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal<?php echo $rs['id_pemesanan']; ?>"><span class="fa fa-info-circle"></span> Detail</a>
                                                                                </td>
                                                                            </tr>
                                                                    <?php }
                                                                    } ?>
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

            <!-- Modal -->
            <!-- Modal Detail -->
            <?php foreach ($pembayaran as $rs) { ?>
                <div class="modal fade detailModal<?php echo $rs['id_pemesanan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Detail Pembayaran - <?php echo $rs['id_pemesanan']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List</h2>
                                            <ul class="nav navbar-right panel_toolbox float-right">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="card-box table-responsive">
                                                <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Nama Pemesan</th>
                                                            <th class="text-center">Jumlah Dibayar</th>
                                                            <th class="text-center">Tanggal Dibayar</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $jumlah = 0; ?>
                                                        <?php foreach ($pembayaran as $key) {
                                                            if ($key['id_pemesanan'] == $rs['id_pemesanan']) { ?>

                                                                <tr>
                                                                    <td class="align-middle text-center"><?php echo $key['nama'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['jumlah_dibayar'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['tanggal_dibayar'] ?></td>
                                                                    <td class="align-middle text-center">
                                                                        <a href="<?php echo site_url() . '/admin/editPembayaran/' . $key['id_pembayaran']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                                                        <a href="" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target=".deleteModal<?php echo $key['id_pembayaran']; ?>"><span class="fa fa-trash"></span> Delete</a>
                                                                    </td>
                                                                </tr>
                                                        <?php $jumlah = $jumlah + $key['jumlah_dibayar'];
                                                            }
                                                        } ?>
                                                        <?php $kekurangan = $rs["total_bayar"] - $jumlah; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Detail</h2>
                                            <ul class="nav navbar-right panel_toolbox float-right">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <form method="post">
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="total-dibayar">Total Terbayar
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" name="total_dibayar" id="total_dibayar" value='<?php echo "Rp" . number_format($jumlah, 0, ",", "."); ?>' disabled class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Total
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" name="total" id="total" value='<?php $total = 0;
                                                                                                            foreach ($harga as $key => $val) {
                                                                                                                if ($key == $rs['id_pemesanan']) {
                                                                                                                    echo "Rp" . number_format($val['harga'], 0, ",", ".");
                                                                                                                    $total = $val['harga'];
                                                                                                                }
                                                                                                            } ?>' disabled class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Kekurangan
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" name="total" id="total" value='<?php echo "Rp" . number_format(($total - $jumlah), 0, ",", "."); ?>' disabled class="form-control ">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /Modal Delete -->
            <!-- Modal Delete -->
            <?php foreach ($pembayaran as $rs) { ?>
                <div class="modal fade deleteModal<?php echo $rs['id_pembayaran']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Hapus User - <?php echo $rs['id_pembayaran']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo site_url() . '/admin/hapusPembayaran/' . $rs['id_pembayaran']; ?>" class="btn btn-danger" role="button">Hapus</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /Modal Delete -->
            <!-- /Modals -->
        </div>

    </div>
    <!-- /page content -->

    <!-- footer -->
    <?php $this->load->view('layout/admin/footer.php'); ?>
    <!-- /footer -->
</body>

</html>