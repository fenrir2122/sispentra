<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <!-- <li><a href="<?php //echo base_url('index.php/dashboard/user');?>"><i class="fa fa-sitemap"></i> User</a></li> -->
                                <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url('index.php/admin/user');?>"><i class="fa fa-user-md"></i> Users</a></li>
                                        <li><a href="<?php echo base_url('index.php/admin/tambahUser');?>"><i class="fa fa-user-plus"></i> Tambah User</a></li>
                                        <li><a href="<?php echo base_url('index.php/admin/jabatan');?>"><i class="fa fa-briefcase"></i> Data Jabatan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-book"></i> Contracts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url('index.php/admin/pemesanan');?>"><i class="fa fa-shopping-cart"></i> Contracts</a></li>
                                        <li><a href="<?php echo base_url('index.php/admin/tambahPemesanan');?>"><i class="fa fa-cart-plus"></i> Tambah Pemesanan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-credit-card"></i> Amandments <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url('index.php/admin/pembayaran');?>"><i class="fa fa-line-chart"></i> Amandments</a></li>
                                        <li><a href="<?php echo base_url('index.php/admin/tambahPembayaran');?>"><i class="fa fa-usd"></i> Tambah Pemesanan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-briefcase"></i> Novations <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo base_url('index.php/admin/proyek');?>"><i class="fa fa-file-text"></i> Novations</a></li>
                                        <li><a href="<?php echo base_url('index.php/admin/tambahProyek');?>"><i class="fa fa-cubes"></i> Tambah Proyek</a></li>
                                    </ul>
                                </li>
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