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
              <h2>Daftar Pengguna <small>User</small></h2>
              <ul class="nav navbar-right panel_toolbox float-right">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <a class="btn btn-round btn-sm btn-primary float-right mr-4" href="<?php echo base_url('index.php/admin/tambahUser'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah User</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      List pengguna sistem informasi Solo Tehnik :
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th class="text-center">Nama</th>
                          <th class="text-center">NIK</th>
                          <th class="text-center">Jenis Kelamin</th>
                          <th class="text-center">Role</th>
                          <th class="text-center">Foto</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($tabel as $rs) { ?>
                          <tr>
                            <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                            <td class="align-middle text-center"><?php echo $rs['nik'] ?></td>
                            <td class="align-middle text-center"><?php if ($rs['jenis_kelamin'] == "L") {
                                                                    echo "Pria";
                                                                  } else {
                                                                    echo "Wanita";
                                                                  } ?></td>
                            <td class="align-middle text-center"><?php if ($rs['role_id'] == 0) {
                                                                    echo "Staff";
                                                                  } else {
                                                                    echo "Admin";
                                                                  } ?></td>
                            <td class="align-middle text-center"><img src="<?php echo base_url() . 'uploads/profile/' . $rs['url_foto'] ?>" alt="<?php echo $rs['url_foto'] ?>" height="50" width="37.5"></td>
                            <td class="align-middle text-center"><?php if ($rs['status'] == 1) {
                                                                    echo "Aktif";
                                                                  } else if ($rs['status'] == 0) {
                                                                    echo "Tidak Aktif";
                                                                  } else {
                                                                    echo "Belum Verifikasi";
                                                                  } ?></td>
                            <td class="align-middle text-center" width="10%">
                              <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal<?php echo $rs['id_user']; ?>"><span class="fa fa-info-circle"></span> Details</a>
                              <a href="<?php echo site_url() . '/admin/editUser/' . $rs['id_user']; ?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit</a>
                              <a href="<?php echo site_url() . '/admin/editFoto/' . $rs['id_user']; ?>" class="btn btn-dark btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Edit Foto</a>
                              <a href="<?php echo site_url() . '/admin/editPassword/' . $rs['id_user']; ?>" class="btn btn-secondary btn-sm" role="button"><span class="fa fa-pencil-square-o"></span> Ganti Password</a>
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
      <?php foreach ($tabel as $rs) { ?>
        <div class="modal fade detailModal<?php echo $rs['id_user']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Detail User - <?php echo $rs['nama']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <?php foreach ($tabel as $res) { ?>
                  <?php if ($res['id_user'] == $rs['id_user']) { ?>

                    <div class="col-md-12 col-sm-12">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th>Nama</th>
                              <td><?php echo $res['nama']; ?></td>
                            </tr>
                            <tr>
                              <th>Role</th>
                              <td><?php if ($rs['role_id'] == 0) {
                                    echo '<span class="badge badge-pill badge-primary">Staff</span>';
                                  } else {
                                    echo '<span class="badge badge-pill badge-success">Admin</span>';
                                  } ?></td>
                            </tr>
                            <tr>
                              <th>Jenis Kelamin</th>
                              <td><?php if ($res['jenis_kelamin'] == 'L') {
                                    echo 'Pria';
                                  } else {
                                    echo 'Wanita';
                                  } ?></td>
                            </tr>
                            <tr>
                              <th>Tempat Lahir</th>
                              <td><?php echo $res['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                              <th>Tanggal Lahir</th>
                              <td><?php echo $res['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                              <th>Jabatan</th>
                              <td><?php echo $res['nama_jabatan']; ?></td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td><?php echo $res['alamat']; ?></td>
                            </tr>
                            <tr>
                              <th>Status</th>
                              <td><?php if ($res['status'] == '1') {
                                    echo '<span class="badge badge-pill badge-primary">Aktif</span>';
                                  } else if ($res['status'] == '0') {
                                    echo '<span class="badge badge-pill badge-danger">Tidak Aktif</span>';
                                  } else {
                                    echo '<span class="badge badge-pill badge-warning">Belum Verifikasi</span>';
                                  } ?></td>
                            </tr>
                            <tr>
                              <th>Foto</th>
                              <td><img height="180" width="120" src="<?php echo base_url() . 'uploads/profile/' . $rs['id_user'] . '.png'; ?>"></td>
                            </tr>
                            <tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                <?php }
                } ?>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- /Modal Detail -->

      <!-- Modal Delete -->
      <?php foreach ($tabel as $rs) { ?>
        <div class="modal fade deleteModal<?php echo $rs['id_user']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Hapus User - <?php echo $rs['id_user']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <?php foreach ($tabel as $res) { ?>
                  <?php if ($res['id_user'] == $rs['id_user']) { ?>
                    <p>Apa anda yaking ingin menghapus user <?php echo $res['id_user'] . '/' . $res['nama']; ?> dari tabel?</p>
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

      <div class="row">
        <div class="col-md-4 col-sm-4 ">
          <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
              <h2>Statistik Pengguna</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="" style="width:100%">
                <tr>
                  <th style="width:37%;">
                    <p>Statistik</p>
                  </th>
                  <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                      <p class="">Status</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                      <p class="">Progress</p>
                    </div>
                  </th>
                </tr>
                <tr>
                  <td>
                    <!-- <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas> -->
                    <canvas id="doughnut-chart" width="140" height="140" style="margin: 15px 10px 10px 0"></canvas>
                    <script>
                      new Chart(document.getElementById("doughnut-chart"), {
                        type: 'doughnut',
                        data: {
                          labels: ["Belum Verifikasi", "Tidak Aktif", "Aktif"],
                          datasets: [{
                            backgroundColor: ["#9B59B6", "#E74C3C", "#3498DB"],
                            data: [<?php echo $statistik['2']; ?>, <?php echo $statistik['0']; ?>, <?php echo $statistik['1']; ?>]
                          }]
                        },
                        options: {
                          legend: {
                            display: false
                          }
                        }
                      });
                    </script>
                  </td>
                  <td>
                    <table class="tile_info">
                      <tr>
                        <td>
                          <p><i class="fa fa-square blue"></i>Aktif </p>
                        </td>
                        <td><?php echo round($statistik['1'] / $statistik['4'] * 100, 1); ?>%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square purple"></i>Belum Verifikasi </p>
                        </td>
                        <td><?php echo round($statistik['2'] / $statistik['4'] * 100, 1); ?>%</td>
                      </tr>
                      <tr>
                        <td>
                          <p><i class="fa fa-square red"></i>Tidak Aktif </p>
                        </td>
                        <td><?php echo round($statistik['0'] / $statistik['4'] * 100, 1); ?>%</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="x_panel">
            <div class="x_title">
              <h2>Aktivitas Pengguna</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <ul class="list-unstyled msg_list">
                <?php foreach ($aktivitas as $key) { ?>
                  <li>
                    <a>
                      <span>
                        <span><?php echo $key['nama']; ?></span>
                        <span class="time"><?php echo $key['waktu_konversi'] . " " . $key['satuan']; ?> ago</span>
                      </span>
                      <span class="message">
                        <?php echo $key['keterangan']; ?>
                      </span>
                    </a>
                  </li>
                <?php }; ?>
              </ul>
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