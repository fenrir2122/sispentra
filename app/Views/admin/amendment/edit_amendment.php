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
                    <h3>Amendment</h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <?php //if ($data) {print_r($data);}
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Amendment</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <?php echo session()->getFlashdata('error'); ?>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url() . '/public/index.php/admin/editamendment/' . $id_amandemen; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <?= csrf_field(); ?>
                                <pre><?php echo base_url() . '/public/index.php/admin/addamendment'; ?></pre>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nama Pekerjaan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <textarea name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" rows="4"><?php echo $nama_pekerjaan; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Tipe Amandemen<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="tipe_amandemen" value="<?php echo $tipe_amandemen; ?>" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Amandemen ke-<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="amandemen_ke" value="<?php echo $amandemen_ke; ?>" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Mulai<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_mulai" value="<?php echo $tgl_mulai; ?>" class="form-control" required="required" type="date">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Selesai<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_selesai" value="<?php echo $tgl_selesai; ?>" class="form-control" required="required" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="item form-group align-items-center">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Durasi<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group">
                                                    <input type="text" name="durasi" value="<?php echo $durasi; ?>" required="required" class="form-control col-8">
                                                    <?php $opt = array("HKL", "BLN", "THN"); ?>
                                                    <select class="form-control col-4" name="jenis_durasi">
                                                        <?php foreach ($opt as $key) {
                                                        ?>
                                                            <option <?php if ($jenis_durasi == $key) {
                                                                        echo 'selected';
                                                                    } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Vendor<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="vendor" value="<?php echo $vendor; ?>" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nomor PO</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_no" id="po_no" value="<?php echo $po_no; ?>" class="form-control" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">PO Pengganti</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_pengganti" id="po_pengganti" value="<?php echo $po_pengganti; ?>" class="form-control" maxlength="10">
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
                                                    <input type="text" name="nilai_kontrak" id="nilai_kontrak" value="<?php echo $nilai_kontrak; ?>" required="required" class="form-control" data-type="currency" aria-describedby="basic-addonrp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Drafter<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <?php $opt = array(
                                                    "Dodi",
                                                    "Imas",
                                                    "Tri",
                                                    "Tasiman",
                                                    "Agung",
                                                    "Immanesti",
                                                ); ?>
                                                <select class="form-control" id="drafter" name="drafter">
                                                    <option>Choose option</option>
                                                    <?php foreach ($opt as $key) {
                                                    ?>
                                                        <option <?php if ($drafter == $key) {
                                                                    echo 'selected';
                                                                } ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>';
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
    <script src="<?= base_url('public/asset/js/currency.js');?>"></script>
    <script src="<?= base_url('public/asset/js/percentage.js');?>"></script>
    <!-- /footer -->
</body>

</html>