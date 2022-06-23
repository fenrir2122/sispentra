<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php $this->load->view('layout/staff/header_staff'); ?>
  <!-- /header -->
</head>

<body class="nav-md">
  <!-- quick info -->
  <?php $this->load->view('layout/staff/quick_info'); ?>
  <!-- /quick info -->

  <!-- sidebar, top naivgation, menu footer -->
  <?php $this->load->view('layout/staff/navi_staff'); ?>
  <!-- /sidebar, top naivgation, menu footer -->

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Projects <small>Listing design</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Daftar Pengguna <small>User</small></h2>
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
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      List pengguna sistem informasi Solo Tehnik :
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
                        <?php foreach ($proyek as $rs) { ?>
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
                              <a href="<?php echo site_url() . '/staff/detailProyek/' . $rs['id_proyek']; ?>" class="btn btn-md btn-primary btn-sm"><i class="fa fa-folder"></i> View </a>
                              <a href="<?php echo site_url() . '/staff/tambahAktivitas/' . $rs['id_proyek']; ?>" class="btn btn-md btn-info btn-sm"><i class="fa fa-tasks"></i> Tambah Aktivitas</a>
                              <a href="<?php echo site_url() . '/staff/tambahBiayaTambahan/' . $rs['id_proyek']; ?>" class="btn btn-md btn-info btn-sm"><i class="fa fa-money"></i> Tambah Biaya Lain-lain</a>
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
  <!-- /page content -->

  <!-- footer -->
  <?php $this->load->view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>