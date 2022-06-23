<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php $this->load->view('layout/admin/header_admin'); ?>
  <!-- /header -->
  <style type="text/css" class="init">
    div.dataTables_wrapper {
      margin-bottom: 3em;
    }
  </style>
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
          <h3>Kontrak</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar Kontrak</h2>
                <ul class="nav navbar-right panel_toolbox float-right">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <a class="btn btn-round btn-sm btn-primary float-right mr-4" href=""><i class="fa fa-plus fa-fw"></i> Tambah Kontrak</a>
                <div class="clearfix"></div>
              </div>
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                          List pesanan produksi mesin Solo Tehnik :
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
                            <tr>
                              <td class="align-middle text-center">MN20-38</td>
                              <td class="align-middle text-center">30057643</td>
                              <td class="align-middle text-center">TSA INJEKSI CHEMICAL TREATMENT CLARIFIER DI AREA UTILITIES RFCC</td>
                              <td class="align-middle text-center">ADI PURA PT</td>
                              <td class="align-middle text-center">15 April 2020</td>
                              <td class="align-middle text-center">02 Julis 2020</td>
                              <td class="align-middle text-center">90 HKL</td>
                              <td class="align-middle text-center">3950066053</td>
                              <td class="align-middle text-center">3950077053</td>
                              <td class="align-middle text-center">14,38%</td>
                              <td class="align-middle text-center">60%</td>
                              <td class="align-middle text-center">Medium</td>
                              <td class="align-middle text-center">Rp1.922.000.000</td>
                              <td class="align-middle text-center">Rp1.980.600.000</td>
                              <td class="align-middle text-center">Rp1.935.185.000</td>
                              <td class="align-middle text-center">Imas</td>
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

      <!-- Modal -->
      <!-- Modal Detail -->
      <?php foreach ($pemesanan['key'] as $key) { ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-detail<?php echo $key['id_pemesanan'] ?>" class="modal fade">
          <div class="modal-dialog modal-xl">
            <div class="modal-content modal-dialog-scrollable">
              <div class="modal-header">
                <h4 class="modal-title">Detail Pemesanan</h4>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga Pokok</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <?php foreach ($pemesanan['detail'] as $rs) { ?>
                      <?php if ($rs['id_pemesanan'] == $key['id_pemesanan']) { ?>
                        <tr>
                          <td><?php echo $rs['nama_mesin'] ?></td>
                          <td><?php echo $rs['jenis_mesin'] ?></td>
                          <td>Rp<?php echo number_format($rs['harga_pokok']) ?></td>
                          <td><?php echo $rs['jumlah_mesin'] ?></td>
                        </tr>
                    <?php }
                    } ?>
                  </table>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-warning" data-dismiss="modal">Kembali</button></div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- END Modal Detail -->

      <!-- Modal Delete -->
      <?php foreach ($pemesanan['key'] as $rs) { ?>
        <div class="modal fade deleteModal<?php echo $rs['id_pemesanan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Hapus Pemesanan - <?php echo $rs['id_pemesanan']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Anda yakin ingin menghapus data pemesanan atas nama <?php echo $rs['nama'] ?>?</p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo site_url() . '/admin/hapusPemesanan/' . $rs['id_pemesanan']; ?>" class="btn btn-danger" role="button">Hapus</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>

            </div>
          </div>
        </div>
      <?php } ?>
      <!-- /Modal Delete -->
      <!-- /Modals -->

      <!-- /page content -->

      <!-- footer -->
      <?php $this->load->view('layout/admin/footer.php'); ?>
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