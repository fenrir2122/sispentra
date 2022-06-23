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
          <h3>Proyek</h3>
        </div>

        <div class="title_right">
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Form Proyek</h2>
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
              <form method="post" action="<?php echo base_url() . 'index.php/admin/tambahProyek'; ?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <br>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Pemesanan<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6">
                    <select class="selectpicker form-control" name="id_pemesanan" required="required" data-live-search="true">
                      <?php foreach ($pemesanan as $key) { ?>
                        <option value="<?php echo $key['id_pemesanan'] ?>"><?php echo $key['nama'] ?> | <?php echo "Rp" . number_format($key["total_bayar"], 0, ",", "."); ?> | <?php echo $key['tanggal_pesan'] ?></option>
                      <?php } ?>
                    </select>
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