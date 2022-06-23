<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php $this->load->view('layout/admin/header_admin'); ?>
    <!-- /header -->
</head>

<body class="nav-md footer_fixed">
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
                            <h3>Dashboard</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>HELLO, <?php echo strtoupper($this->session->userdata('username')); ?>!</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="row justify-content-center">
                                        <h5>
                                            <table>
                                                <tr>
                                                    <td>IP</td>
                                                    <td>:</td>
                                                    <td> <?php echo $this->session->userdata('ip') ?></td>
                                                </tr>
                                                <tr>
                                                    <td>MAC</td>
                                                    <td>:</td>
                                                    <td> <?php echo $this->session->userdata('mac') ?></td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS</td>
                                                    <td>:</td>
                                                    <td> <?php echo $this->session->userdata('status') ?></td>
                                                </tr>
                                            </table>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

    <!-- sidebar, top naivgation, menu footer -->
    <?php $this->load->view('layout/admin/footer.php'); ?>
    <!-- /sidebar, top naivgation, menu footer -->
</body>

</html>