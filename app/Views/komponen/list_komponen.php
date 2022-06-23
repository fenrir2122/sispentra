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
                    <h3>Komponen</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Daftar Komponen</h2>
                                <ul class="nav navbar-right panel_toolbox float-right">
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
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Komponen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pembelian Komponen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Penggunaan Komponen</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <p class="text-muted font-13 m-b-30">
                                                                List komponen produksi mesin Solo Tehnik : <a class="btn btn-round btn-sm mr-4 btn-primary float-right" href="<?php echo base_url('index.php/admin/tambahKomponen'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Komponen Baru</a>
                                                            </p>
                                                            <table class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama</th>
                                                                        <th class="text-center">Jenis</th>
                                                                        <th class="text-center">Jumlah</th>
                                                                        <th class="text-center">Detail</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($komponen as $rs) { ?>
                                                                        <tr>
                                                                            <td class="align-middle text-center"><?php echo $rs['nama_komponen'] ?></td>
                                                                            <td class="align-middle text-center"><?php echo $rs['jenis_komponen'] ?></td>
                                                                            <td class="align-middle text-center"><?php echo $rs['jumlah_komponen'] ?></td>
                                                                            <td class="align-middle text-center" width="10%">
                                                                                <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal<?php echo $rs['id_komponen']; ?>"><span class="fa fa-folder"></span> View</a>
                                                                            </td>
                                                                            <td class="align-middle text-center" width="10%">
                                                                                <a href="<?php echo site_url() . '/admin/editKomponen/' . $rs['id_komponen']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                                                            </td>
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
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <p class="text-muted font-13 m-b-30">
                                                                List komponen produksi mesin Solo Tehnik : <a class="btn btn-round btn-sm btn-primary mr-4 float-right" href="<?php echo base_url('index.php/admin/tambahBeliKomponen'); ?>"><i class="fa fa-plus fa-fw"></i> Input Pembelian Komponen</a>
                                                            </p>
                                                            <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Petugas</th>
                                                                        <th class="text-center">Detail</th>
                                                                        <th class="text-center">Tanggal Beli</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($beli_komponen as $rs) { ?>
                                                                        <tr>
                                                                            <td class="align-middle text-center"><?php echo $rs['nama']; ?></td>
                                                                            <td class="align-middle text-center">
                                                                                <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailBeliModal<?php echo $rs['id_beli_komponen']; ?>"><span class="fa fa-folder"></span> View</a>
                                                                            </td>
                                                                            <td class="align-middle text-center"><?php echo $rs['tanggal_beli'] ?></td>
                                                                            <td class="align-middle text-center">
                                                                                <a href="<?php echo site_url() . '/admin/editBeliKomponen/' . $rs['id_beli_komponen']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                                                                <a href="" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target=".deleteBeliModal<?php echo $rs['id_beli_komponen']; ?>"><span class="fa fa-trash"></span> Delete</a>
                                                                            </td>
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
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <p class="text-muted font-13 m-b-30">
                                                                List komponen produksi mesin Solo Tehnik : <a class="btn btn-round btn-sm btn-primary mr-4 float-right" href="<?php echo base_url('index.php/admin/tambahPakaiKomponen'); ?>"><i class="fa fa-plus fa-fw"></i> Input Pemakaian Komponen</a>
                                                            </p>
                                                            <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Petugas</th>
                                                                        <th class="text-center">Detail</th>
                                                                        <th class="text-center">Tanggal Pakai</th>
                                                                        <th class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($pakai_komponen as $rs) { ?>
                                                                        <tr>
                                                                            <td class="align-middle text-center"><?php echo $rs['nama']; ?></td>
                                                                            <td class="align-middle text-center">
                                                                                <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailPakaiModal<?php echo $rs['id_pakai_komponen']; ?>"><span class="fa fa-folder"></span> View</a>
                                                                            </td>
                                                                            <td class="align-middle text-center"><?php echo $rs['tanggal_ambil'] ?></td>
                                                                            <td class="align-middle text-center">
                                                                                <a href="<?php echo site_url() . '/admin/editPakaiKomponen/' . $rs['id_pakai_komponen']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                                                                <a href="" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target=".deletePakaiModal<?php echo $rs['id_pakai_komponen']; ?>"><span class="fa fa-trash"></span> Delete</a>
                                                                            </td>
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

            <!-- Modal -->

            <!-- Modal Detail-->
            <?php foreach ($komponen as $rs) { ?>
                <div class="modal fade detailModal<?php echo $rs['id_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Detail Komponen - <?php echo $rs['id_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List Pembelian</h2>
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
                                                            <th class="text-center">Nama Petugas</th>
                                                            <th class="text-center">Nama Komponen</th>
                                                            <th class="text-center">Harga Satuan</th>
                                                            <th class="text-center">Jumlah</th>
                                                            <th class="text-center">Harga Total</th>
                                                            <th class="text-center">Tanggal Beli</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $jumlah = 0; ?>
                                                        <?php foreach ($detail_beli_komponen as $key) {
                                                            if ($key['id_komponen'] == $rs['id_komponen']) { ?>

                                                                <tr>
                                                                    <td class="align-middle text-center"><?php foreach ($beli_komponen as $res) {
                                                                                                                if ($res['id_beli_komponen'] == $key['id_beli_komponen']) {
                                                                                                                    echo $res['nama'];
                                                                                                                }
                                                                                                            } ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['nama_komponen'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['harga_satuan'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['jumlah_beli'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo ($key['harga_satuan'] * $key['jumlah_beli']) ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['tanggal_beli'] ?></td>
                                                                    <td class="align-middle text-center">
                                                                        <a href="<?php echo site_url() . '/admin/editBeliKomponen/' . $key['id_beli_komponen']; ?>" class="btn btn-success btn-sm" role="button">Edit</a>
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

                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List Penggunaan</h2>
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
                                                            <th class="text-center">Nama Petugas</th>
                                                            <th class="text-center">Nama Komponen</th>
                                                            <th class="text-center">Jumlah Pakai</th>
                                                            <th class="text-center">Tanggal Ambil</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $jumlah = 0; ?>
                                                        <?php foreach ($detail_pakai_komponen as $key) {
                                                            if ($key['id_komponen'] == $rs['id_komponen']) { ?>

                                                                <tr>
                                                                    <td class="align-middle text-center"><?php foreach ($pakai_komponen as $res) {
                                                                                                                if ($res['id_pakai_komponen'] == $key['id_pakai_komponen']) {
                                                                                                                    echo $res['nama'];
                                                                                                                }
                                                                                                            } ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['nama_komponen'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['jumlah_pakai'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['tanggal_ambil'] ?></td>
                                                                    <td class="align-middle text-center">
                                                                        <a href="<?php echo site_url() . '/admin/editPakaiKomponen/' . $key['id_pakai_komponen']; ?>" class="btn btn-success btn-sm" role="button">Edit</a>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($beli_komponen as $rs) { ?>
                <div class="modal fade detailBeliModal<?php echo $rs['id_beli_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Beli Komponen - <?php echo $rs['id_beli_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List Pembelian</h2>
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
                                                            <th class="text-center">Nama Petugas</th>
                                                            <th class="text-center">Nama Komponen</th>
                                                            <th class="text-center">Harga Satuan</th>
                                                            <th class="text-center">Jumlah</th>
                                                            <th class="text-center">Harga Total</th>
                                                            <th class="text-center">Tanggal Beli</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $jumlah = 0; ?>
                                                        <?php foreach ($detail_beli_komponen as $key) {
                                                            if ($key['id_beli_komponen'] == $rs['id_beli_komponen']) { ?>

                                                                <tr>
                                                                    <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['nama_komponen'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['harga_satuan'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['jumlah_beli'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo ($key['harga_satuan'] * $key['jumlah_beli']) ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['tanggal_beli'] ?></td>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($pakai_komponen as $rs) { ?>
                <div class="modal fade detailPakaiModal<?php echo $rs['id_pakai_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Pakai Komponen - <?php echo $rs['id_pakai_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List Pemakaian</h2>
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
                                                            <th class="text-center">Nama Petugas</th>
                                                            <th class="text-center">Nama Komponen</th>
                                                            <th class="text-center">Jumlah Pakai</th>
                                                            <th class="text-center">Tanggal Pakai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $jumlah = 0; ?>
                                                        <?php foreach ($detail_pakai_komponen as $key) {
                                                            if ($key['id_pakai_komponen'] == $rs['id_pakai_komponen']) { ?>
                                                                <tr>
                                                                    <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['nama_komponen'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['jumlah_pakai'] ?></td>
                                                                    <td class="align-middle text-center"><?php echo $key['tanggal_ambil'] ?></td>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Modal Delete -->
            <?php foreach ($komponen as $rs) { ?>
                <div class="modal fade deleteModal<?php echo $rs['id_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Hapus User - <?php echo $rs['id_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Hapus</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($beli_komponen as $rs) { ?>
                <div class="modal fade deleteBeliModal<?php echo $rs['id_beli_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Hapus Pembelian Komponen - <?php echo $rs['id_beli_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda yakin ingin menghapus data pemesanan atas nama <?php echo $rs['nama'] ?> - <?php echo $rs['id_beli_komponen'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo site_url() . '/admin/hapusBeliKomponen/' . $rs['id_beli_komponen']; ?>" class="btn btn-danger" role="button">Hapus</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($pakai_komponen as $rs) { ?>
                <div class="modal fade deletePakaiModal<?php echo $rs['id_pakai_komponen']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Hapus Pembelian Komponen - <?php echo $rs['id_pakai_komponen']; ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda yakin ingin menghapus data pemesanan atas nama <?php echo $rs['nama'] ?> - <?php echo $rs['id_pakai_komponen'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo site_url() . '/admin/hapusPakaiKomponen/' . $rs['id_pakai_komponen']; ?>" class="btn btn-danger" role="button">Hapus</a>
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