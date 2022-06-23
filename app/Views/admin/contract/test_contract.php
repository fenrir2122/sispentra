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
                            <h2>Add New Contract</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form method="post" action="<?= base_url() . '/public/index.php/admin/testcontracts'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <?= csrf_field(); ?>
                                <pre><?php echo base_url() . '/public/index.php/admin/addcontracts'; ?></pre>
                                 <?php var_dump($test); ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Bidding Code<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="bidding_code" id="bidding_code"  class="form-control ">
                                                <input type="hidden" name="test" id="test" value="test">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Permintaan Lelang<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_permintaan_lelang" id="tgl_permintaan_lelang" class="form-control"  type="date">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align">Tanggal Penetapan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input name="tgl_penetapan" id="tgl_penetapan" class="form-control"  type="date">
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
                                                <input type="text" name="pr_no" id="pr_no"  class="form-control" maxlength="9">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nomor Coll<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="coll_no" id="coll_no"  class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Kode<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="code" id="code"  class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Nama Pekerjaan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <textarea name="nama_pekerjaan" id="nama_pekerjaan" class="form-control" rows="4"></textarea>
                                                <!-- <input type="text" name="nama_pekerjaan" id="nama_pekerjaan"  class="form-control "> -->
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Tipe<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="tipe" id="tipe"  class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Durasi<span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" name="durasi" id="durasi"  class="form-control ">
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-4">
                                                <select name="jenis_durasi" id="jenis_durasi" class="form-control">
                                                    <option value="HKL">HKL</option>
                                                    <option value="BLN">BLN</option>
                                                    <option value="THN">THN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Vendor<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="vendor" id="vendor"  class="form-control ">
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
                                                <input type="text" name="po_no" id="po_no" class="form-control" maxlength="10">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">PO Pengganti</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <input type="text" name="po_pengganti" id="po_pengganti" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Minim
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_minim" id="tkdn_minim" class="form-control" aria-describedby="basic-addon%">
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
                                                    <input type="text" name="tkdn_barang_nilai" id="tkdn_barang_nilai" class="form-control" data-type="currency">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Barang
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_barang" id="tkdn_barang" class="form-control" aria-describedby="basic-addon%">
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
                                                    <input type="text" name="tkdn_jasa_nilai" id="tkdn_jasa_nilai" class="form-control" data-type="currency">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">TKDN Jasa</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <div class="input-group mb-1">
                                                    <input type="text" name="tkdn_jasa" id="tkdn_jasa" class="form-control" aria-describedby="basic-addon%">
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
                                                    <input type="text" name="tkdn_total" id="tkdn_total" class="form-control" aria-describedby="basic-addon%">
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
                                                <input type="text" name="po_risk" id="po_risk"  class="form-control ">
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
                                                    <input type="text" name="nilai_kontrak" id="nilai_kontrak"  class="form-control" data-type="currency" aria-describedby="basic-addonrp">
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
                                                    <input type="text" name="nilai_penawaran_awal" id="nilai_penawaran_awal"  class="form-control" data-type="currency" aria-describedby="basic-addonrp">
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
                                                    <input type="text" name="nilai_oe" id="nilai_oe"  class="form-control" data-type="currency">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 col-4 label-align" for="first-name">Drafter<span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 ">
                                                <select class="form-control" id="drafter" name="drafter">
                                                    <option>Choose option</option>
                                                    <option value="Dodi">Dodi</option>
                                                    <option value="Imas">Imas</option>
                                                    <option value="Tri">Tri</option>
                                                    <option value="Tasiman">Tasiman</option>
                                                    <option value="Agung">Agung</option>
                                                    <option value="Immanesti">Immanesti</option>
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
    <script src="../../../public/asset/gentelella-master/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script>
        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatMoney(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(",") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(",");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatMoney(left_side);

                // validate right side
                right_side = formatMoney(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "00";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "," + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatMoney(input_val);
                input_val = input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += ",00";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>
    <script>
        $("input[data-type='percentage']").on({
            keyup: function() {
                formatPercentage($(this));
            },
            blur: function() {
                formatPercentage($(this), "blur");
            }
        });


        function formatCommas(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{2})+(?!\d))/g, ",")
        }


        function formatPercentage(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            // if (input_val === "") {
            //     return;
            // }

            // // original length
            // var original_len = input_val.length;

            // // initial caret position 
            // var caret_pos = input.prop("selectionStart");

            // // check for decimal
            // if (input_val.indexOf(",") >= 0) {

            //     // get position of first decimal
            //     // this prevents multiple decimals from
            //     // being entered
            //     var decimal_pos = input_val.indexOf(",");

            //     // split number by decimal point
            //     var left_side = input_val.substring(0, decimal_pos);
            //     var right_side = input_val.substring(decimal_pos);

            //     // add commas to left side of number
            //     left_side = formatCommas(left_side);

            //     // validate right side
            //     right_side = formatCommas(right_side);

            //     // On blur make sure 2 numbers after decimal
            //     if (blur === "blur") {
            //         right_side += "00";
            //     }

            //     // Limit decimal to only 2 digits
            //     right_side = right_side.substring(0, 2);

            //     // join number by .
            //     input_val = "Rp" + left_side + "," + right_side;

            // } else {
            //     // no decimal entered
            //     // add commas to number
            //     // remove all non-digits
            //     input_val = formatCommas(input_val);
            //     input_val = "Rp" + input_val;

            //     // final formatting
            //     if (blur === "blur") {
            //         input_val += ",00";
            //     }
            // }

            input_val = formatCommas(input_val);

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>
    <!-- /footer -->
</body>

</html>