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
        <div class="col-md-12 col-sm-12">

          <!-- Informasi Kontrak panel -->
          <div class="x_panel">
            <div class="x_title">
              <h2>Contract Information</h2>
              <ul class="nav navbar-right panel_toolbox float-right">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <h6 class="text-center" style="color:gray">Purging dan Pneumatic Test di Area 018 FOC-II PT Kilang Pertamina Internasional RU IV Cilacap</h6>
                  <div class="card-box table-responsive">
                    <div class="tile_count">
                      <div class="col-md-12 col-sm-12">
                        <div class="col-md-3 col-sm-3  tile_stats_count">
                          <span class="count_top"><i class="fa fa-gears"></i> Perkiraan Biaya Komponen</span>
                          <div class="count"><?= $contract_id['vendor']; ?></div>
                        </div>
                        <div class="col-md-3 col-sm-3  tile_stats_count">
                          <span class="count_top"><i class="fa fa-wrench"></i> Total Biaya Lain-lain</span>
                          <div class="count"><?= $contract_id['tgl_penetapan']; ?></div>
                        </div>
                        <div class="col-md-3 col-sm-3  tile_stats_count">
                          <span class="count_top"><i class="fa fa-file"></i> Perkiraan Keuntungan Kotor</span>
                          <div class="count"><?= $contract_id['bidding_code']; ?></div>
                        </div>
                        <div class="col-md-3 col-sm-3  tile_stats_count">
                          <span class="count_top"><i class="fa fa-money"></i> Perkiraan Keuntungan Bersih</span>
                          <div class="count green"><?= $contract_id['nilai_kontrak']; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="x_title">
                    <hr>
                    <h2>Details</h2>
                    <ul class="nav navbar-right panel_toolbox float-right">
                      <li><a class=""><i class="fa fa-chevron-down" data-toggle="collapse" data-target="#detailCont" aria-expanded="false" aria-controls="detailCont" role="button"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="collapse" id="detailCont">
                      <div class="row">
                        <div class="col-6">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th>Nama Pekerjaan</th>
                                <td><?php echo $contract_id['nama_pekerjaan'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tgl Permintaan Lelang</th>
                                <td><?php echo $contract_id['tgl_permintaan_lelang'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tgl Penetapan</th>
                                <td><?php echo $contract_id['tgl_penetapan'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Coll No.</th>
                                <td><?php echo $contract_id['coll_no'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Kode</th>
                                <td><?php echo $contract_id['code'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tipe</th>
                                <td><?php echo $contract_id['tipe'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Durasi</th>
                                <td><?php echo $contract_id['durasi'] . ' ' . $contract_id['jenis_durasi']  ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nomor PO</th>
                                <td><?php echo $contract_id['po_no'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">PO Pengganti</th>
                                <td><?php echo $contract_id['po_pengganti'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">TKDN Minim</th>
                                <td><?php echo $contract_id['tkdn_minim'] . '%' ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-6">
                            <table class="table">
                            <tbody>
                              <tr>
                                <th>TKDN Barang</th>
                                <td><?php echo $contract_id['tkdn_barang'].'%' ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nilai TKDN Barang</th>
                                <td><?php echo $contract_id['tkdn_barang_nilai'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">TKDN Jasa</th>
                                <td><?php echo $contract_id['tkdn_jasa'].'%' ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nilai TKDN Jasa</th>
                                <td><?php echo $contract_id['tkdn_jasa_nilai'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">TKDN Total</th>
                                <td><?php echo $contract_id['tkdn_total'].'%' ?></td>
                              </tr>
                              <tr>
                                <th scope="row">PO Risk</th>
                                <td><?php echo $contract_id['po_risk'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nilai Penawaran Awal</th>
                                <td><?php echo $contract_id['nilai_penawaran_awal'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nilai OE</th>
                                <td><?php echo $contract_id['nilai_oe'] ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Drafter</th>
                                <td><?php echo $contract_id['drafter'] ?></td>
                              </tr>
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
      <!-- End of Informasi Kontrak panel -->

    </div>
  </div>

  <!-- /page content -->

  <!-- footer -->
  <?php echo view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>