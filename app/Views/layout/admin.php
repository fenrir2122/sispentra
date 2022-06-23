<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Keamanan Data - Responsi 2</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('asset/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">

  <?php $this->load->view('layout/admin/temp_sidebar'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <?php 
      echo $content;
      //$this->load->view($pa); ?>
          
      </div>

      <?php $this->load->view('layout/admin/temp_footer'); ?>

    </div>

  </div>
  

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">PERHATIAN</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Yakin Ingin Keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">TIDAK</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/login/Logout') ?>">YA</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('asset/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('asset/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('asset/datatables/dataTables.bootstrap4.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('asset/js/sb-admin.min.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('asset/js/demo/datatables-demo.js') ?>"></script>
  <script src="<?php echo base_url('asset/js/demo/chart-area-demo.js') ?>"></script>

</body>

</html>
