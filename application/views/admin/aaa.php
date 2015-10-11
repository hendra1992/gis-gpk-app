<!DOCTYPE html>
<?php
    $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
    //echo $this->session->userdata('admin_level');
?>   
<html lang="en">
    <head>
        <title>Sistem Informasi Geografis | <?php echo $q_instansi->nama; ?></title>
        <!-- BEGIN META -->
        <meta name="keywords" content="Sistem Informasi Geografis | PT. Galaxy Prima Karya">
        <meta name="description" content="Sistem yang menyajikan layanan berupa informasi terkait dengan proses penjualan property di PT. Galaxy Prima Karya">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <?php $this->load->view('admin/' . $head); ?>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom-style.css" />
        <!-- END STYLESHEETS -->
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed menubar-pin ">
        <?php 
            $restrict_area = $this->session->userdata('admin_level');
            $userlogin = $this->session->userdata('admin_nama');
        ?>
        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a href="#">
                                    <span class="text-lg text-bold text-primary">
                                         <?php echo $q_instansi->nama; ?>                                    
                                    </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="headerbar-right">
                    <!--
                    <ul class="header-nav header-nav-options">
                        <li>
                            <form class="navbar-search" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                                </div>
                                <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                            </a>
                            <ul class="dropdown-menu animation-expand">
                                <li class="dropdown-header">Today's messages</li>
                                <li>
                                    <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                                        <img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url(); ?>assets/img/avatar2.jpg?1404026449" alt="" />
                                        <strong>Alex Anistor</strong><br/>
                                        <small>Testing functionality...</small>
                                    </a>
                                </li>
                                <li>
                                    <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                        <img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url(); ?>assets/img/avatar3.jpg?1404026799" alt="" />
                                        <strong>Alicia Adell</strong><br/>
                                        <small>Reviewing last changes...</small>
                                    </a>
                                </li>
                                <li class="dropdown-header">Options</li>
                                <li><a href="http://localhost/materialadmin/html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                                <li><a href="http://localhost/materialadmin/html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-area-chart"></i>
                            </a>
                            <ul class="dropdown-menu animation-expand">
                                <li class="dropdown-header">Server load</li>
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Today</strong></span>
                                            <strong class="pull-right">93%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                                    </a>
                                </li>
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Yesterday</strong></span>
                                            <strong class="pull-right">30%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                                    </a>
                                </li>
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Lastweek</strong></span>
                                            <strong class="pull-right">74%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    -->
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" />
                                <span class="profile-info">
                                    Daniel Johnson
                                    <small>Administrator</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li class="dropdown-header">Config</li>
                                <li><a href="http://localhost/materialadmin/html/pages/profile.html">My profile</a></li>
                                <li><a href="http://localhost/materialadmin/html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id="base">

            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- BEGIN CONTENT-->
            <div id="content">

                <!-- BEGIN BLANK SECTION -->
                <section>
                    <?php $this->load->view('admin/' . $page); ?>
                </section>

                <!-- BEGIN BLANK SECTION -->
            </div><!--end #content-->
            <!-- END CONTENT -->

            <!-- BEGIN MENUBAR-->
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="http://localhost/materialadmin/html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">

                    <!-- BEGIN MAIN MENU -->
                    <ul id="main-menu" class="gui-controls">
                        <!-- BEGIN DASHBOARD -->
                        <li>
                            <a href="<?php  echo base_url(); ?>" class="active">
                                <div class="gui-icon"><i class="md md-home"></i></div>
                                <span class="title">Dashboard</span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN TABLES -->
                        <li class="gui-folder">
                            <a>
                                <div class="gui-icon"><i class="fa fa-table"></i></div>
                                <span class="title">Tables</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="http://localhost/materialadmin/html/tables/static.html" ><span class="title">Static Tables</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <!-- END TABLES -->
                        <?php
                        if ($restrict_area !== "Super Admin") {
                        ?>
                        <li class="gui-folder">
                            <a>
                                <div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
                                <span class="title">Forms</span>
                            </a>
                            <ul>
                                <li><a href="http://localhost/materialadmin/html/forms/basic.html" ><span class="title">Form basic</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/forms/editors.html" ><span class="title">Editors</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/forms/validation.html" ><span class="title">Form validation</span></a></li>
                                <li><a href="http://localhost/materialadmin/html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2015</span> <strong>Cyber Global Tritama</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->

        </div><!--end #base-->
        <!-- END BASE -->

        <?php $this->load->view('admin/' . $footer); ?>

    </body>
</html>