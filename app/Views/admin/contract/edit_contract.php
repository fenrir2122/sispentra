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
                    <h3>Contracts</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Contract</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <?php echo session()->getFlashdata('error'); ?>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url() . '/public/index.php/admin/onSubmitContract/' . $contract_id['id_kontrak']; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <?= csrf_field(); ?>
                                <pre><?php echo base_url() . '/public/index.php/admin/addcontracts'; ?></pre>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Bidding Code<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="bidding_code" id="bidding_code" required="required" class="form-control" value="<?php echo $contract_id['bidding_code']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Permintaan Lelang<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_permintaan_lelang" id="tgl_permintaan_lelang" class="form-control" required="required" type="date" value="<?php echo $contract_id['tgl_permintaan_lelang']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Penetapan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_penetapan" id="tgl_penetapan" class="form-control" required="required" type="date" value="<?php echo $contract_id['tgl_penetapan']; ?>">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-4 col-4"></div>
                                            <div style="font-style: italic" class="col-md-8 col-sm-8">
                                                (panjang maksimum 9 karakter)
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nomor PR<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <?php $num = count($pr) - 1; ?>
                                                <?php for ($x = 0; $x <= $num; $x++) { ?>
                                                    <div id="inputFormRow<?= $x ?>">
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="pr_no[<?= $x ?>][no]" value="<?= $pr[$x]['no_pr'] ?>" class="form-control col-6" required="required" autocomplete="off" maxlength="9">
                                                            <select name="pr_no[<?= $x ?>][jenis_pr]" class="form-control col-4 ml-2">
                                                                <option <?php if ($pr[$x]['tipe'] == 0) {echo 'selected';} ?> value="0">OLD</option>
                                                                <option <?php if ($pr[$x]['tipe'] == 1) {echo 'selected';} ?> value="1">NEW</option>
                                                            </select>
                                                            <?php if ($x == 0) { ?>
                                                                <button id="addRowN" data-value="<?= $num ?>" type="button" class="btn btn-info ml-2"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <?php } else if ($x == 1) { ?>
                                                                <button id="removeRowN" type="button" class="btn btn-danger ml-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div id="newRow"></div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nomor Coll<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="coll_no" id="coll_no" required="required" class="form-control" value="<?php echo $contract_id['coll_no']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Kode<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="code" id="code" required="required" class="form-control" value="<?php echo $contract_id['code']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nama Pekerjaan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <textarea name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" rows="4"><?php echo $contract_id['nama_pekerjaan']; ?></textarea>
                                                <!-- <input type="text" name="nama_pekerjaan" id="nama_pekerjaan" required="required" class="form-control "> -->
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Tipe<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="tipe" id="tipe" required="required" class="form-control" value="<?php echo $contract_id['tipe']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Durasi<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" name="durasi" id="durasi" required="required" class="form-control col-md-8 col-sm-8" value="<?php echo $contract_id['durasi']; ?>">
                                                    <?php $opsi_durasi = ['HKL', 'BLN', 'THN']; ?>
                                                    <select name="jenis_durasi" id="jenis_durasi" class="form-control col-4 ml-2">
                                                        <?php foreach ($opsi_durasi as $key) { ?>
                                                            <option <?php if ($contract_id['jenis_durasi'] == $key) echo "selected"; ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Vendor<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="vendor" id="vendor" required="required" class="form-control" value="<?php echo $contract_id['vendor']; ?>">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-4 col-sm-4 col-4"></div>
                                            <div style="font-style: italic" class="col-md-8 col-sm-8">
                                                (panjang maksimum 10 karakter)
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nomor PO</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_no" id="po_no" class="form-control" maxlength="10" value="<?php echo $contract_id['po_no']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">PO Pengganti</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_pengganti" id="po_pengganti" class="form-control" value="<?php echo $contract_id['po_pengganti']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Minim
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_minim" id="tkdn_minim" class="form-control" aria-describedby="basic-addon%" value="<?php echo $contract_id['tkdn_minim']; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nilai TKDN Barang
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="tkdn_barang_nilai" id="tkdn_barang_nilai" class="form-control" data-type="currency" value="<?php echo str_replace(".", ",", $contract_id['tkdn_barang_nilai']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Barang
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_barang" id="tkdn_barang" class="form-control" aria-describedby="basic-addon%" value="<?php echo $contract_id['tkdn_barang']; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nilai TKDN Jasa
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="tkdn_jasa_nilai" id="tkdn_jasa_nilai" class="form-control" data-type="currency" value="<?php echo str_replace(".", ",", $contract_id['tkdn_jasa_nilai']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Jasa</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_jasa" id="tkdn_jasa" class="form-control" aria-describedby="basic-addon%" value="<?php echo $contract_id['tkdn_jasa']; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Total<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_total" id="tkdn_total" class="form-control" aria-describedby="basic-addon%" value="<?php echo $contract_id['tkdn_total']; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">PO Risk<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_risk" id="po_risk" required="required" class="form-control " value="<?php echo $contract_id['po_risk']; ?>">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nilai Kontrak<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="nilai_kontrak" id="nilai_kontrak" required="required" class="form-control" data-type="currency" aria-describedby="basic-addonrp" value="<?php echo str_replace(".", ",", $contract_id['nilai_kontrak']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nilai Penawaran Awal<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="nilai_penawaran_awal" id="nilai_penawaran_awal" required="required" class="form-control" data-type="currency" aria-describedby="basic-addonrp" value="<?php echo str_replace(".", ",", $contract_id['nilai_penawaran_awal']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nilai OE<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="nilai_oe" id="nilai_oe" required="required" class="form-control" data-type="currency" value="<?php echo str_replace(".", ",", $contract_id['nilai_oe']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Drafter<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <select class="form-control" id="drafter" name="drafter">
                                                    <option>Choose option</option>
                                                    <?php $opsi_drafter = ['Dodi', 'Imas', 'Tri', 'Tasiman', 'Agung', 'Immanesti'];
                                                    foreach ($opsi_drafter as $key) { ?>
                                                        <option <?php if ($contract_id['drafter'] == $key) echo "selected"; ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>
                                                    <?php } ?>
                                                </select>
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
                                <!-- <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div> -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->

    <!-- footer -->
    <?php echo view('layout/admin/footer.php'); ?>
    <script src="<?= base_url('public/asset/gentelella-master/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js');?>"></script>
    <script src="<?= base_url('public/asset/js/addinputs.js');?>"></script>
    <script src="<?= base_url('public/asset/js/currency.js');?>"></script>
    <script src="<?= base_url('public/asset/js/percentage.js');?>"></script>
    <!-- /footer -->
</body>

</html>