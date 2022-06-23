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
          <h3>Proyek
        </div>

        <div class="title_right">
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar Proyek</h2>
                <ul class="nav navbar-right panel_toolbox float-right">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <a class="btn btn-round btn-sm btn-primary float-right mr-4" href="<?php echo base_url('index.php/admin/tambahProyek'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Proyek</a>
                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List Proyek Berjalan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">List Proyek Selesai</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="x_panel">
                      <div class="x_content">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <p class="text-muted font-13 m-b-30">
                                List proyek sistem informasi Solo Tehnik :
                              </p>
                              <table id="datatable" class="table table-striped projects">
                                <thead>
                                  <tr>
                                    <th style="width: 15%">NIK</th>
                                    <th>Nama Klien</th>
                                    <th>Anggota Tim</th>
                                    <th>Progress</th>
                                    <th style="width: 20%">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($proyek as $rs) {
                                    if ($rs['status_produksi'] < 2) { ?>
                                      <tr>
                                        <td><?php echo $rs['nik'] ?></td>
                                        <td>
                                          <?php echo $rs['nama'] ?>
                                        </td>
                                        <td class="align-middle">
                                          <button class="btn btn-sm btn-block btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseStaff<?php echo $rs['id_proyek']; ?>" aria-expanded="false" aria-controls="collapseStaff<?php echo $rs['id_proyek']; ?>">
                                            List Staff
                                          </button>
                                          <div class="collapse" id="collapseStaff<?php echo $rs['id_proyek']; ?>">
                                            <div class="card card-body">
                                              <ul class="list-group list-group-flush">
                                                <?php foreach ($list_staff as $key) if ($key['id_proyek'] == $rs['id_proyek']) {
                                                  echo '<li class="list-group-item">' . $key['nama'] . '</li>';
                                                } ?>
                                              </ul>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php $progress = 0;
                                                                                                                        foreach ($mesin as $key => $val) if ($key == $rs['id_pemesanan']) {
                                                                                                                          $progress = $val['mesin_selesai'] / $val['jumlah_mesin'] * 100;
                                                                                                                          echo $progress;
                                                                                                                        } ?>"></div>
                                          </div>
                                          <small><?php echo number_format($progress) . '% Complete'; ?></small>
                                        </td>
                                        <td class="align-middle text-center" width="15%">
                                          <a href="<?php echo site_url() . '/admin/detailProyek/' . $rs['id_proyek']; ?>" class="btn btn-md btn-primary btn-sm"><i class="fa fa-folder"></i> View </a>
                                        </td>
                                      </tr>
                                  <?php }
                                  } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="x_panel">
                      <div class="x_content">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <p class="text-muted font-13 m-b-30">
                                List proyek sistem informasi Solo Tehnik :
                              </p>
                              <table id="datatable" class="table table-striped projects">
                                <thead>
                                  <tr>
                                    <th style="width: 15%">NIK</th>
                                    <th>Nama Klien</th>
                                    <th>Anggota Tim</th>
                                    <th>Progress</th>
                                    <th style="width: 20%">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($proyek as $rs) {
                                    if ($rs['status_produksi'] == 2) { ?>
                                      <tr>
                                        <td><?php echo $rs['nik'] ?></td>
                                        <td>
                                          <?php echo $rs['nama'] ?>
                                        </td>
                                        <td class="align-middle">
                                          <button class="btn btn-sm btn-block btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseStaff<?php echo $rs['id_proyek']; ?>" aria-expanded="false" aria-controls="collapseStaff<?php echo $rs['id_proyek']; ?>">
                                            List Staff
                                          </button>
                                          <div class="collapse" id="collapseStaff<?php echo $rs['id_proyek']; ?>">
                                            <div class="card card-body">
                                              <ul class="list-group list-group-flush">
                                                <?php foreach ($list_staff as $key) if ($key['id_proyek'] == $rs['id_proyek']) {
                                                  echo '<li class="list-group-item">' . $key['nama'] . '</li>';
                                                } ?>
                                              </ul>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php $progress = 0;
                                                                                                                        foreach ($mesin as $key => $val) if ($key == $rs['id_pemesanan']) {
                                                                                                                          $progress = $val['mesin_selesai'] / $val['jumlah_mesin'] * 100;
                                                                                                                          echo $progress;
                                                                                                                        } ?>"></div>
                                          </div>
                                          <small><?php echo number_format($progress) . '% Complete'; ?></small>
                                        </td>
                                        <td class="align-middle text-center" width="15%">
                                          <a href="<?php echo site_url() . '/admin/detailProyek/' . $rs['id_proyek']; ?>" class="btn btn-md btn-primary btn-sm"><i class="fa fa-folder"></i> View </a>
                                        </td>
                                      </tr>
                                  <?php }
                                  } ?>
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
      </div>

    </div>
  </div>
  <!-- /page content -->

  <!-- footer -->
  <?php $this->load->view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>