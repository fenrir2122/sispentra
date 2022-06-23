<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php echo view('layout/admin/header_admin'); ?>
    <!-- /header -->
</head>

<body class="nav-md">
    <!-- quick info -->
    <?php echo view('layout/admin/quick_info'); ?>
    <!-- /quick info -->

    <!-- sidebar, top naivgation, menu footer -->
    <?php echo view('layout/admin/navi_admin'); ?>
    <!-- /sidebar, top naivgation, menu footer -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Drafts</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Draft</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <?php if (!empty(session()->getFlashdata('form'))) : ?>
                                    <?php echo session()->getFlashdata('form'); ?>
                                <?php endif; ?>
                                <form method="post" action="<?= base_url() . '/public/index.php/drafter/editdraft/' . $id_kelengkapan; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <?= csrf_field(); ?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="item form-group align-items-center col-12">
                                                <label class="col-form-label col-3 label-align" for="first-name">Judul Pekerjaan<span class="required">*</span>
                                                </label>
                                                <div class="col-7 ">
                                                    <textarea name="judul_kontrak" id="judul_kontrak" class="form-control" rows="4"><?php echo $judul_kontrak; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="item form-group align-items-center col-12">
                                                <label class="col-form-label col-3 label-align">Tanggal Blangko<span class="required">*</span>
                                                </label>
                                                <div class="col-7 ">
                                                    <input name="tanggal_blangko" id="tanggal_blangko" class="form-control" required="required" value="<?php echo $tanggal_blangko; ?>" type="date">
                                                </div>
                                            </div>
                                            <div class="item form-group align-items-center col-12">
                                                <label class="col-form-label col-3 label-align" for="first-name">Nama Kontraktor<span class="required">*</span>
                                                </label>
                                                <div class="col-7 ">
                                                    <input type="text" name="nama_kontraktor" id="nama_kontraktor" required="required" value="<?php echo $nama_kontraktor; ?>" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="accordion col-12" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <span class="btn btn-outline-info">Surat Perintah Pelaksanaan Pekerjaan Mendahului Kontrak (SPM3K)</span>
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Nomor<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sp3mk_nomor" id="sp3mk_nomor" required="required" value="<?php echo $sp3mk_nomor; ?>" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input name="sp3mk_tanggal" id="sp3mk_tanggal" class="form-control" required="required" value="<?php echo $sp3mk_tanggal; ?>" type="date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Harga Kontrak<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Rp</span>
                                                                                    </div>
                                                                                    <input type="text" name="sp3mk_harga_kontrak" id="sp3mk_harga_kontrak" value="<?php echo $sp3mk_harga_kontrak; ?>" required="required" class="form-control" data-type="currency" aria-describedby="basic-addonrp">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Penyelesaian Pekerjaan<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="sp3mk_mpp" value="<?php echo $sp3mk_mpp; ?>" class="form-control col-8">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="sp3mk_mjenis_mpp" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($sp3mk_mjenis_mpp == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Jaminan Pelaksanaan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sp3mk_jaminan_pelaksanaan" id="sp3mk_jaminan_pelaksanaan" value="<?php echo $sp3mk_jaminan_pelaksanaan; ?>" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Berlaku</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="sp3mk_masa_berlaku" value="<?php echo $sp3mk_masa_berlaku; ?>" class="form-control col-8" required="required">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="sp3mk_mjenis_jpelaksanaan" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($sp3mk_mjenis_jpelaksanaan == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal Mulai / Sampai dengan<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input name="sp3mk_tanggal_mulai" value="<?php echo $sp3mk_tanggal_mulai; ?>" class="form-control col-5" required="required" type="date">
                                                                                    <div class="col-2">
                                                                                        <h2 class="text-center mt-2">-</h2>
                                                                                    </div>
                                                                                    <input name="sp3mk_sampai_dengan" value="<?php echo $sp3mk_sampai_dengan; ?>" class="form-control col-5" required="required" type="date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <span class="btn btn-outline-info">Surat Penunjukkan Pemenang Pengadaan Jasa</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Nomor<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="spppj_nomor" id="spppj_nomor" value="<?php echo $spppj_nomor; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input name="spppj_tanggal" id="spppj_tanggal" value="<?php echo $spppj_tanggal; ?>" class="form-control" required="required" type="date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Coll. No.<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="spppj_coll_no" id="spppj_coll_no" required="required" value="<?php echo $spppj_coll_no; ?>" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Harga Kontrak<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Rp</span>
                                                                                    </div>
                                                                                    <input type="text" name="spppj_harga_kontrak" id="spppj_harga_kontrak" value="<?php echo $spppj_harga_kontrak; ?>" required="required" class="form-control" data-type="currency" aria-describedby="basic-addonrp">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Jangka Waktu Pelaksanaan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="spppj_jangka_pelaksanaan" id="spppj_jangka_pelaksanaan" value="<?php echo $spppj_jangka_pelaksanaan; ?>" class="form-control ">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="spppj_mjenis_pelaksanaan" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($spppj_mjenis_pelaksanaan == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Berlaku Jaminan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="spppj_masa_berlaku" value="<?php echo $spppj_masa_berlaku; ?>" class="form-control col-8" required="required">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="spppj_mjenis_berlaku" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($spppj_mjenis_berlaku == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <span class="btn btn-outline-info">RKS</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Tanggal Revisi<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="rks_revisi" id="rks_revisi" value="<?php echo $rks_revisi; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Revisi No<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="rks_keterangan" id="rks_keterangan" value="<?php echo $rks_keterangan; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Penyelesaian Pekerjaan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="rks_mpp" id="rks_mpp" value="<?php echo $rks_mpp; ?>" class="form-control ">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="rks_mjenis_mpp" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($sp3mk_mjenis_mpp == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Pemeliharaan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="rks_masa_pemeliharaan" id="rks_masa_pemeliharaan" value="<?php echo $rks_masa_pemeliharaan; ?>" class="form-control ">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="rks_mjenis_pemeliharaan" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($rks_mjenis_pemeliharaan == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Garansi</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="rks_masa_garansi" id="rks_masa_garansi" value="<?php echo $rks_masa_garansi; ?>" class="form-control ">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="rks_mjenis_garansi" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($rks_mjenis_garansi == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-3 label-align" for="first-name">Denda
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group mb-1">
                                                                                    <input type="text" name="rks_denda" id="rks_denda" value="<?php echo $rks_denda; ?>" class="form-control" aria-describedby="basic-addon%">
                                                                                    <div class="input-group-append">
                                                                                        <span class="input-group-text">%</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-3 label-align" for="first-name">Mekanisme Pembayaran<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <textarea name="rks_mekanisme_pembayaran" id="rks_mekanisme_pembayaran" placehoder="Apabila terlalu panjang agar dituliskan nomor halaman pada RKS." class="form-control" rows="4"><?php echo $rks_mekanisme_pembayaran; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Jenis Kontrak<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="rks_jenis_kontrak" id="rks_jenis_kontrak" required="required" value="<?php echo $rks_jenis_kontrak; ?>" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-3 label-align" for="first-name">Besar Jaminan
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group mb-1">
                                                                                    <input type="text" name="rks_besar_jaminan" id="rks_besar_jaminan" value="<?php echo $rks_besar_jaminan; ?>" class="form-control" aria-describedby="basic-addon%">
                                                                                    <div class="input-group-append">
                                                                                        <span class="input-group-text">%</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Direksi Pekerjaan<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="rks_direksi_pekerjaan" id="rks_direksi_pekerjaan" value="<?php echo $rks_direksi_pekerjaan; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Penyelesaian Administrasi</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="rks_mpa" id="rks_mpa" value="<?php echo $rks_mpa; ?>" class="form-control ">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="rks_mjenis_mpa" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($rks_mjenis_mpa == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading4">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                                <span class="btn btn-outline-info">Surat Penawaran Harga Negosiasi</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">No.<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sphn_nomor" id="sphn_nomor" value="<?php echo $sphn_nomor; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Perihal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sphn_perihal" id="sphn_perihal" value="<?php echo $sphn_perihal; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input name="sphn_tanggal" id="sphn_tanggal" class="form-control" value="<?php echo $sphn_tanggal; ?>" required="required" type="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading5">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                                <span class="btn btn-outline-info">Surat Negosiasi Harga</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-9 ">
                                                                                <input name="snh_tanggal" id="snh_tanggal" class="form-control" value="<?php echo $snh_tanggal; ?>" required="required" type="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading6">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                                <span class="btn btn-outline-info">Surat Penawaran Harga</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">No.<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sph_nomor" id="sph_nomor" value="<?php echo $sph_nomor; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Perihal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="sph_perihal" id="sph_perihal" value="<?php echo $sph_perihal; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input name="sph_tanggal" id="sph_tanggal" class="form-control" value="<?php echo $sph_tanggal; ?>" required="required" type="date">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading7">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                                <span class="btn btn-outline-info">Berita Acara Prebid Meeting Online</span>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Coll No.<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="prebid_coll_no" id="prebid_coll_no" value="<?php echo $prebid_coll_no; ?>" required="required" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align">Tanggal<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input name="prebid_tanggal" id="prebid_tanggal" value="<?php echo $prebid_tanggal; ?>" class="form-control" required="required" type="date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Penyelesaian Pekerjaan<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="prebid_mpp" value="<?php echo $prebid_mpp; ?>" class="form-control col-8" required="required">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="prebid_mjenis_mpp" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($prebid_mjenis_mpp == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Pemeliharaan<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="prebid_masa_pemeliharaan" value="<?php echo $prebid_masa_pemeliharaan; ?>" class="form-control col-8" required="required">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="prebid_mjenis_pemeliharaan" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                        ?>
                                                                                            <option <?php if ($prebid_mjenis_pemeliharaan == $key) {
                                                                                                        echo 'selected';
                                                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Masa Garansi<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <div class="input-group">
                                                                                    <input type="text" name="prebid_masa_garansi" value="<?php echo $prebid_masa_garansi; ?>" class="form-control col-8" required="required">
                                                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                                                    <select name="prebid_mjenis_garansi" class="form-control col-4 ml-2">
                                                                                        <?php foreach ($opt as $key) {
                                                                                            echo '<option';
                                                                                            if ($prebid_mjenis_garansi == $key) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                            echo 'value="' . $key . '">' . $key . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Jaminan Pelaksanaan</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <input type="text" name="prebid_jaminan_pelaksanaan" value="<?php echo $prebid_jaminan_pelaksanaan; ?>" id="prebid_jaminan_pelaksanaan" class="form-control ">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group align-items-center">
                                                                            <label class="col-form-label col-md-3 col-sm-3 col-3 label-align" for="first-name">Revisi RKS<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9 ">
                                                                                <?php $opt = array(0 => "Tidak Ada", 1 => "Ada"); ?>
                                                                                <select name="prebid_keterangan" class="form-control">
                                                                                    <?php foreach ($opt as $key => $value) {
                                                                                    ?>
                                                                                        <option <?php if ($prebid_keterangan == $key) {
                                                                                                    echo 'selected';
                                                                                                } ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>';
                                                                                    <?php } ?>
                                                                                </select>
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
                                    <div class="ln_solid"></div>
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                        </div>
                                        <div class="p-2">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                        </div>
                                        <div class="ml-auto p-2">
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
    </div>
    <!-- /page content -->

    <!-- footer -->
    <?php echo view('layout/admin/footer.php'); ?>
    <script src="../../../public/asset/gentelella-master/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../../../public/asset/js/addinputs.js"></script>
    <script src="../../../public/asset/js/currency.js"></script>
    <script src="../../../public/asset/js/percentage.js"></script>
    <!-- /footer -->
</body>

</html>