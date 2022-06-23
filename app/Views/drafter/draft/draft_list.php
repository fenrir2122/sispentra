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
          <h3>Contract</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Contract List</h2>
                <div class="x_content">
                  <ul class="nav navbar-right panel_toolbox float-right">
                    <li></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <a class="btn btn-round btn-sm btn-primary float-right" href=""><i class="fa fa-plus fa-fw"></i> Add Contract</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                          Daftar kontrak :
                        </p>
                        <table id="datatable" class="table nowrap table-bordered table-hover dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
                          <thead>
                            <tr role="row">
                              <th class="align-middle sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending">Judul Kontrak</th>
                              <th class="align-middle sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending">Tanggal Blangko</th>
                              <th class="align-middle sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending">Nama Kontraktor</th>
                              <th class="align-middle" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($draft as $value) { ?>
                              <tr role="row">
                                <td class="align-middle text-center"><?php echo $value['judul_kontrak']; ?></td>
                                <td class="align-middle text-center"><?php echo $value['tanggal_blangko']; ?></td>
                                <td class="align-middle text-center"><?php echo $value['nama_kontraktor']; ?></td>
                                <td class="align-middle text-center" width="5%">
                                  <div class="d-flex flex-column justify-content-center">
                                    <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal"><span class="fa fa-search"></span></a>
                                    <a href="" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                  </div>
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

  <!-- /page content -->

  <!-- footer -->
  <?php echo view('layout/admin/footer.php'); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "scrollX": true
      });
    });
  </script>
  <!-- /footer -->
</body>

</html>