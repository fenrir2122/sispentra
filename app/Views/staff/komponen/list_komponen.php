<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view('layout/staff/header_staff'); ?>
    <!-- /header -->
    <style type="text/css" class="init">
        div.dataTables_wrapper {
            margin-bottom: 3em;
        }
    </style>
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
                    <h3>Komponen</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">

                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Daftar Komponen</h2>
                                <ul class="nav navbar-right panel_toolbox float-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pembelian Komponen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Penggunaan Komponen</a>
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
                                                                List komponen produksi mesin Solo Tehnik : <a class="btn btn-round btn-sm btn-primary float-right" href="<?php echo base_url('index.php/staff/tambahBeliKomponen'); ?>"><i class="fa fa-plus fa-fw"></i> Input Pembelian Komponen</a>
                                                            </p>
                                                            <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Petugas</th>
                                                                        <th class="text-center">Nama Komponen</th>
                                                                        <th class="text-center">Harga Satuan</th>
                                                                        <th class="text-center">Jumlah</th>
                                                                        <th class="text-center">Harga Total</th>
                                                                        <th class="text-center">Tanggal Beli</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($detail_beli_komponen as $rs) {
                                                                        foreach ($beli_komponen as $res) {
                                                                            if ($res['id_beli_komponen'] == $rs['id_beli_komponen']) { ?>
                                                                                <tr>
                                                                                    <td class="align-middle text-center"><?php echo $res['nama']; ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['harga_satuan'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['jumlah_beli'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['harga_total'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['tanggal_beli'] ?></td>
                                                                                </tr>
                                                                    <?php }
                                                                        }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box table-responsive">
                                                            <p class="text-muted font-13 m-b-30">
                                                                List komponen produksi mesin Solo Tehnik : <a class="btn btn-round btn-sm btn-primary float-right" href="<?php echo base_url('index.php/staff/tambahPakaiKomponen'); ?>"><i class="fa fa-plus fa-fw"></i> Input Pemakaian Komponen</a>
                                                            </p>
                                                            <table id="" class="table table-striped table-bordered datatable" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Nama Petugas</th>
                                                                        <th class="text-center">Nama Komponen</th>
                                                                        <th class="text-center">Jumlah</th>
                                                                        <th class="text-center">Tanggal Ambil</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($detail_pakai_komponen as $rs) {
                                                                        foreach ($pakai_komponen as $res) {
                                                                            if ($res['id_pakai_komponen'] == $rs['id_pakai_komponen']) { ?>
                                                                                <tr>
                                                                                    <td class="align-middle text-center"><?php echo $res['nama'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['nama'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['jumlah_pakai'] ?></td>
                                                                                    <td class="align-middle text-center"><?php echo $rs['tanggal_ambil'] ?></td>
                                                                                </tr>
                                                                    <?php }
                                                                        }
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

            <!-- Modal -->
            

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
                            <!-- <table class="" style="width:100%">
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
                            <!-- <canvas id="doughnut-chart" width="140" height="140" style="margin: 15px 10px 10px 0"></canvas>
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
                    </div> -->
                            <!-- </div> -->

                            <!-- <div class="col-md-8">
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
                                                <span><?php //echo $key['nama']; 
                                                        ?></span>
                                                <span class="time"><?php //echo $key['waktu_konversi'] . " " . $key['satuan']; 
                                                                    ?> ago</span>
                                            </span>
                                            <span class="message">
                                                <?php //echo $key['keterangan']; 
                                                ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php }; ?>
                            </ul>
                        </div>
                    </div>
                </div> -->

                        </div>

                    </div>
                </div>
                <!-- /page content -->

                <!-- footer -->
                <?php $this->load->view('layout/admin/footer.php'); ?>
                <!-- /footer -->
</body>

</html>