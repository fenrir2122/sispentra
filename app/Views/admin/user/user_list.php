<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php echo view('layout/admin/header_admin'); ?>
  <!-- /header -->
  <style type="text/css" class="init">
    div.dataTables_wrapper {
      margin-bottom: 3em;
    }
  </style>
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

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>User List</h2>
                <div class="x_content">
                  <ul class="nav navbar-right panel_toolbox float-right">
                    <li></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <a class="btn btn-round btn-sm btn-primary float-right" href=""><i class="fa fa-plus fa-fw"></i> Add User</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                          Contract Office Pertamina Cilacap
                        </p>
                        <table id="datatable-scrollx" class="table table-striped table-bordered" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Email</th>
                              <th class="text-center">Bagian</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($user as $value) { ?>
                              <tr>
                                <td class="align-middle text-center"><?php echo $value['nama']; ?></td>
                                <td class="align-middle text-center"><?php echo $value['email']; ?></td>
                                <td class="align-middle text-center"><?php echo $value['bagian']; ?></td>
                                <td class="align-middle text-center"><?php echo $value['status']; ?></td>
                                <td class="align-middle text-center"></td>
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

  <!-- /page content -->

  <!-- footer -->
  <?php echo view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>