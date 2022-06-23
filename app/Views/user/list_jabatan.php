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
          <h3>Jabatan</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Daftar Jabatan <small>Jabatan</small></h2>
              <ul class="nav navbar-right panel_toolbox float-right">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <a class="btn btn-round btn-sm btn-primary float-right mr-4" href="<?php echo base_url('index.php/admin/tambahJabatan'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Jabatan</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      List jabatan sistem informasi Solo Tehnik :
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="text-center">Nama Jabatan</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($jabatan as $rs) { ?>
                          <tr>
                            <td class="align-middle text-center"><?php echo $rs['nama_jabatan'] ?></td>
                            <td class="align-middle text-center">
                              <a href="<?php echo site_url() . '/admin/editJabatan/' . $rs['id_jabatan']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                              <a href="" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target=".deleteModal<?php echo $rs['id_jabatan']; ?>"><span class="fa fa-trash-o"></span> Delete</a>
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
      <!-- Modal Delete -->
      <?php foreach ($jabatan as $rs) { ?>
        <div class="modal fade deleteModal<?php echo $rs['id_jabatan']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Hapus Jabatan - <?php echo $rs['nama_jabatan']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <?php foreach ($jabatan as $res) { ?>
                  <?php if ($res['id_jabatan'] == $rs['id_jabatan']) { ?>
                    <p>Apa anda yaking ingin menghapus jabatan <?php echo $res['id_jabatan'] . ' / ' . $res['nama_jabatan']; ?> dari tabel?</p>
                    <p>(Data yang berkaitan dengan jabatan tersebut juga akan dihapus!)</p>
                <?php }
                } ?>
              </div>
              <div class="modal-footer">
                <a href="<?php echo site_url() . '/admin/hapusJabatan/' . $rs['id_jabatan']; ?>" class="btn btn-danger btn-secondary" role="button">Hapus</a>
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