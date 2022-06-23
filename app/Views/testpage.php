<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php

  use Kint\Zval\Value;

  echo view('layout/admin/header_admin'); ?>
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
          <h3>User</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <?php echo base_url(); ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Form Design <small>different form elements</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="#">Settings 1</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <pre>
              <?php //echo $nama;
              //echo $jenis_kelamin;
              // $pemesanan = 'PO0001';
              // var_dump($test);
              echo $id_kontrak."<br>";
              echo $no_pr."<br>";
              echo $type;
              // $data = array();
              // foreach ($test['pr_no'] as $key => $value) {
              //   $data['pr_no'][$key]['no'] = 'required';
              //   $data['pr_no'][$key]['jenis_pr'] = 'required';
              //   // $data['pr_no'][$key];
              // }

              // var_dump($data);

              // echo $pembayaran['id_pemesanan'];
              // echo $harga[$pemesanan]['harga'];
              ?>
              </pre>
              <div class="clearfix"></div>
              <pre>
                <?php //var_dump($rule);
                ?>
              </pre>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->

  <!-- footer -->
  <?php echo view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>