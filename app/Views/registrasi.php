<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php $this->load->view('layout/admin/header_admin'); ?>
  <!-- /header -->
</head>

<body>
  <div class="row justify-content-center">
    <div class="col-md-6 col-sm-6 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Registrasi Akun Baru</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form method="post" action="<?php echo base_url() . 'index.php/login/registrasi'; ?>" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Akun <span class="required">*</label>
              <div class="col-md-6 col-sm-6 ">
                <div id="gender" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    Non-Admin <input type="radio" class="flat" name="role_id" id="NonAdmin" value="0" checked="" required />

                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    Admin <input type="radio" class="flat" name="role_id" id="Admin" value="1" />
                  </label>
                </div>
              </div>
            </div>
            <br>
            <br>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" name="nama" id="nama" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nik">NIK <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" name="nik" id="nik" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="password" name="password" id="password" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="password2">Konfirmasi Password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="password" name="password2" id="password2" required="required" class="form-control ">
              </div>
            </div>
            <br>
            <br>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin <span class="required">*</label>
              <div class="col-md-6 col-sm-6 ">
                <div id="gender" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    Pria <input type="radio" class="flat" name="jenis_kelamin" id="genderM" value="L" checked="" required />

                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    Wanita <input type="radio" class="flat" name="jenis_kelamin" id="genderF" value="P" />
                  </label>
                </div>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input name="tempat_lahir" id="tempat_lahir" class="date-picker form-control" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input name="tanggal_lahir" id="tanggal_lahir" class="date-picker form-control" required="required" type="date">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <select class="selectpicker form-control" data-live-search="true" id="jabatan" name="jabatan" data-live-search="true">
                  <?php foreach ($jabatan as $key) {  ?>
                    <option value="<?php echo $key['id_jabatan'] ?>"><?php echo $key['nama_jabatan'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="url_foto">Foto <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input name="url_foto" id="url_foto" class="form-control" required="required" type="file">
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <!-- <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- FastClick -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/fastclick/lib/fastclick.js'); ?>"></script>
  <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
  <!-- NProgress -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/nprogress/nprogress.js'); ?>"></script>
  <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/jszip/dist/jszip.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/gentelella-master/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>
  <!-- Chart.js -->

  <script src="<?php echo base_url('asset/gentelella-master/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
  <!-- bootstrap-datetimepicker -->
  <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'); ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url('asset/gentelella-master/build/js/custom.js'); ?>"></script>
  <!-- <script src="../build/js/custom.min.js"></script> -->

  <!-- Initialize datetimepicker -->
  <script type="text/javascript">
    $(function() {
      $('#myDatepicker').datetimepicker();
    });

    $('#myDatepicker2').datetimepicker({
      format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
      format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
      ignoreReadonly: true,
      allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
      useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
      $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
      $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
  </script>
</body>

</html>