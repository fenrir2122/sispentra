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
          <h3>Project</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Menu Staff</h2>
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
                    <div class="col-md-12 col-sm-12">
                      <div class="col-md-6 col-sm-6 text-center">
                        <a href="<?php echo site_url() . '/staff/tambahAktivitas/' . $id_proyek; ?>" class="btn btn-md btn-info btn-sm"><i class="fa fa-tasks"></i> Tambah Aktivitas</a>
                      </div>
                      <div class="col-md-6 col-sm-6 text-center">
                        <a href="<?php echo site_url() . '/staff/tambahBiayaTambahan/' . $id_proyek; ?>" class="btn btn-md btn-info btn-sm"><i class="fa fa-money"></i> Tambah Biaya Lain-lain</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Aktivitas Proyek<small>Aktivitas</small></h2>
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
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Aktivitas</th>
                          <th class="text-center">Waktu</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($aktivitas as $rs) {
                          if ($rs['id_user'] == $this->session->userdata('id_user')) { ?>
                            <tr>
                              <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                              <td class="align-middle text-center"><?php echo $rs['aktivitas'] ?></td>
                              <td class="align-middle text-center"><?php echo $rs['tanggal_aktivitas'] ?></td>
                              <td class="align-middle text-center">
                                <a href="<?php echo site_url() . '/staff/editAktivitas/' . $rs['id_aktivitas']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                <a href="<?php echo site_url() . '/staff/hapusAktivitas/' . $rs['id_aktivitas'].'/'.$rs['id_proyek']; ?>" class="btn btn-dark btn-sm" role="button"><span class="fa fa-trash"></span> Delete</a>
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

      <div class="row">

        <div class="col-md-6 col-sm-6 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Komponen <small>Komponen</small></h2>
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
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Jenis</th>
                          <th class="text-center">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($komponen as $rs => $value) { ?>
                          <tr>
                            <td class="align-middle text-center"><?php echo $value['nama_komponen'] ?></td>
                            <td class="align-middle text-center"><?php echo $value['jenis_komponen'] ?></td>
                            <td class="align-middle text-center"><?php echo $value['jml_komponen'] ?></td>
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

        <div class="col-md-6 col-sm-6 ">

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Progress Produksi</h2>
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
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Progress</th>
                              <th class="text-center">Jumlah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($mesin as $rs) { ?>
                              <tr>
                                <td class="align-middle text-center"><?php echo $rs['nama_mesin'] ?></td>
                                <td class="project_progress">
                                  <div class="progress progress_sm">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php $progress = 0;
                                                                                                                $progress = $rs['mesin_selesai'] / $rs['jumlah_mesin'] * 100;
                                                                                                                echo $progress; ?>"></div>
                                  </div>
                                  <small><?php echo number_format($progress) . '%'; ?></small>
                                </td>
                                <td class="align-middle text-center"><?php echo $rs['mesin_selesai'] . ' dari ' . $rs['jumlah_mesin']; ?></td>
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

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>List Staff <small>Staff</small></h2>
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
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Foto</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($staff as $rs) { ?>
                              <tr>
                                <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                <td class="align-middle text-center"><img height="40" width="30" src="<?php echo base_url() . 'uploads/profile/' . $rs['id_user'] . '.png'; ?>"></td>
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

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Biaya Lain-lain<small>Non-Material</small></h2>
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
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="text-center">Keterangan</th>
                              <th class="text-center">Biaya</th>
                              <th class="text-center">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($tambahan as $rs) {
                              if ($rs['id_user'] == $this->session->userdata('id_user')) { ?>
                                <tr>
                                  <td class="align-middle text-center"><?php echo $rs['nama_tambahan'] ?></td>
                                  <td class="align-middle text-center"><?php echo "Rp" . (number_format(($rs['nilai']), 0, ',', '.')) ?></td>
                                  <td class="align-middle text-center">
                                    <a href="<?php echo site_url() . '/staff/editBiayaTambahan/' . $rs['id_tambahan']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                    <a href="<?php echo site_url() . '/staff/hapusBiayaTambahan/' . $rs['id_tambahan'].'/'.$rs['id_proyek']; ?>" class="btn btn-dark btn-sm" role="button"><span class="fa fa-trash"></span></a>
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
  <!-- /page content -->

  <!-- footer -->
  <?php $this->load->view('layout/staff/footer.php'); ?>
  <!-- /footer -->
</body>

</html>