<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('index.php/staff/user/'); ?>"><i class="fa fa-user"></i> User</a></li>
            <li><a><i class="fa fa-tags"></i> Komponen <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('index.php/staff/tambahBeliKomponen'); ?>"><i class="fa fa-plus"></i> Tambah Pembelian Komponen</a></li>
                    <li><a href="<?php echo base_url('index.php/staff/tambahPakaiKomponen'); ?>"><i class="fa fa-minus"></i> Tambah Penggunaan Komponen</a></li>
                </ul>
            </li>
            <!-- <li><a href="<?php //echo base_url('index.php/dashboard/user');
                                ?>"><i class="fa fa-sitemap"></i> User</a></li> -->
            <li><a><i class="fa fa-wrench"></i> Proyek <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('index.php/staff/proyek'); ?>"><i class="fa fa-briefcase"></i> Data Proyek</a></li>>
                </ul>
            </li>
            <li><a href="<?php echo base_url('index.php/dashboard/log'); ?>"><i class="fa fa-file-archive-o"></i> Log</a></li>
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