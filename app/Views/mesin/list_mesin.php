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
          <h3>User</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Daftar Mesin <small>Mesin</small></h2>
              <ul class="nav navbar-right panel_toolbox float-right">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <a class="btn btn-round btn-sm btn-primary float-right" href="<?php echo base_url('index.php/admin/tambahMesin'); ?>"><i class="fa fa-wrench fa-fw"></i> Tambah Mesin</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      List mesin sistem informasi Solo Tehnik :
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Jenis</th>
                          <th class="text-center">Harga Pokok</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($mesin as $rs) { ?>
                          <tr>
                            <td class="align-middle text-center"><?php echo $rs['nama_mesin'] ?></td>
                            <td class="align-middle text-center"><?php echo $rs['jenis_mesin'] ?></td>
                            <td class="align-middle text-center"><?php echo 'Rp' . (number_format($rs['harga_pokok'], 0, ',', '.')) ?></td>
                            <td class="align-middle text-center" width="20%">
                              <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-detail<?php echo $rs['id_mesin']; ?>"><span class="fa fa-info-circle"></span> Detail</</a>
                              <a href="<?php echo site_url() . '/admin/editMesin/' . $rs['id_mesin']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                              <a href="<?php echo site_url() . '/admin/editDetailMesin/' . $rs['id_mesin']; ?>" class="btn btn-dark btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit Komponen Penyusun</a>
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

      <!-- Modal -->

      <!-- Modal Detail -->
      <?php foreach ($mesin as $key) { ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal-detail<?php echo $key['id_mesin'] ?>" class="modal fade">
          <div class="modal-dialog modal-xl">
            <div class="modal-content modal-dialog-scrollable">
              <div class="modal-header">
                <h4 class="modal-title">Detail Aset</h4>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nama Komponen</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <?php foreach ($detail_mesin as $rs) { ?>
                      <?php if ($rs['id_mesin'] == $key['id_mesin']) { ?>
                        <tr>
                          <td><?php echo $rs['nama_komponen'] ?></td>
                          <td><?php echo $rs['jenis_komponen'] ?></td>
                          <td><?php echo $rs['jml_komponen'] ?></td>
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
      <?php foreach ($mesin as $rs) { ?>
        <div class="modal fade deleteModal<?php echo $rs['id_mesin']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Hapus User - <?php echo $rs['id_mesin']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <?php foreach ($mesin as $res) { ?>
                  <?php if ($res['id_mesin'] == $rs['id_mesin']) { ?>
                    <p>Apa anda yaking ingin menghapus user <?php echo $res['id_mesin'] . '/' . $res['nama']; ?> dari tabel?</p>
                    <p>(Data yang berkaitan dengan user tersebut juga akan dihapus!)</p>
                <?php }
                } ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>

            </div>
          </div>
        </div>
      <?php } ?>
      <!-- /Modal Delete -->
      <!-- /Modals -->

    </div>
  </div>
  <!-- /page content -->

  <!-- footer -->
  <?php $this->load->view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>