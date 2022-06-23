<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Keamanan Data | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/gentelella-master/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- NProgress -->
    <link href="<?php echo base_url('asset/gentelella-master/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('asset/gentelella-master/build/css/custom.min.css'); ?>" rel="stylesheet">
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Keamanan Data</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $this->session->userdata('username'); ?></h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url('index.php/dashboard');?>"><i class="fa fa-home"></i> Home</a></li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Barang <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url('index.php/dashboard/tambah');?>"><i class="fa fa-edit"></i> Tambah Barang</a></li>
                                        <li><a href="<?php echo base_url('index.php/dashboard/listbarang');?>"><i class="fa fa-table"></i> Data Barang</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('index.php/dashboard/listhapus');?>"><i class="fa fa-sitemap"></i> Log</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/login/Logout') ?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt=""><?php echo $this->session->userdata('username'); ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url('index.php/login/Logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Detail Barang</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Sukses!</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="table-responsive">
                                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                                            <tbody>
                                                <?php foreach ($query->result_array() as $row) {
                                                    ?>
                                                    <tr>
                                                        <td style="width: 150px">Nama Barang</td>
                                                        <td style="width: 20px">:</td>
                                                        <td style="width: 500px;"><?php echo $row['nama_barang'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Barang</td>
                                                        <td>:</td>
                                                        <td><?php echo $row['jumlah'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan</td>
                                                        <td>:</td>
                                                        <td><?php echo $row['keterangan'] ?></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Barang</td>
                                                        <td>:</td>
                                                        <td><?php echo $row['nama_tabel'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Note</td>
                                                        <td>:</td>
                                                        <td>Data di <?php if ($row['id_aksi'] == '1') {
                                                                            echo '<strong>TAMBAHKAN</strong>';
                                                                        } else {
                                                                            echo '<strong>' . strtoupper($row['nama_aksi']) . '</strong>';
                                                                        } ?>
                                                            oleh <?php echo '<strong>' . strtoupper($row['username']) . '</strong>' ?> pada <?php echo '<strong>' . $row['date'] . '</strong>'; ?> melalui IP <?php echo '<strong>' . $row['ip'] . '</strong>' ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <a href="<?php echo base_url('index.php/dashboard/update/') . $row['id_barang']; ?>" style="width: 100px;" class="btn btn-success"><i class="fa fa-wrench"></i> Edit</a>
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
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Sistem Keamanan Data
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- FastClick -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('asset/gentelella-master/build/js/custom.min.js'); ?>"></script>
    <!-- <script src="../build/js/custom.min.js"></script> -->
</body>

</html>