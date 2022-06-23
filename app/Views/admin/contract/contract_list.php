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
                        <table id="example" class="table table-striped table-bordered datatable" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="text-center">Bidding Code</th>
                              <th class="text-center">No. PR</th>
                              <th class="text-center">Nama Pekerjaan</th>
                              <th class="text-center">Vendor</th>
                              <th class="text-center">Tgl Permintaan Lelang</th>
                              <th class="text-center">Tgl Penetapan</th>
                              <th class="text-center">Durasi</th>
                              <th class="text-center">No. PO</th>
                              <th class="text-center">Po Pengganti</th>
                              <th class="text-center">Minim TKDN</th>
                              <th class="text-center">PO Risk</th>
                              <th class="text-center">Nilai Kontrak</th>
                              <th class="text-center">Nilai Penawaran Awal</th>
                              <th class="text-center">Nilai OE</th>
                              <th class="text-center">Drafter</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($kontrak as $value) { ?>
                            <tr>
                              <td class="align-middle text-center"><?php echo $value['bidding_code'];?></td>
                              <td class="align-middle text-center"><?php echo $value['pr_no'];?></td>
                              <td class="align-middle text-center"><?php echo $value['nama_pekerjaan'];?></td>
                              <td class="align-middle text-center"><?php echo $value['vendor'];?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_permintaan_lelang'];?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_penetapan'];?></td>
                              <td class="align-middle text-center"><?php echo $value['durasi'].' '.$value['jenis_durasi'];?></td>
                              <td class="align-middle text-center"><?php echo $value['po_no'];?></td>
                              <td class="align-middle text-center"><?php echo $value['po_pengganti'];?></td>
                              <td class="align-middle text-center"><?php echo $value['tkdn_minim'].'%';?></td>
                              <td class="align-middle text-center"><?php echo $value['po_risk'];?></td>
                              <td class="align-middle text-center"><?php echo 'Rp'.number_format($value['nilai_kontrak'], 2, ',','.');?></td>
                              <td class="align-middle text-center"><?php echo 'Rp'.number_format($value['nilai_penawaran_awal'], 2, ',','.');?></td>
                              <td class="align-middle text-center"><?php echo 'Rp'.number_format($value['nilai_oe'], 2, ',','.');?></td>
                              <td class="align-middle text-center"><?php echo $value['drafter'];?></td>
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