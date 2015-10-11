<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrator Login</title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">
        <?php
        $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
        ?>
        <!-- BEGIN LOGIN SECTION -->
        <section class="section-account">
            <div class="img-backdrop" style="background-image: url('<?php echo base_url(); ?>assets/img/img16.jpg')"></div>
            <div class="spacer"></div>
            <div class="card contain-sm style-transparent">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 center-block" style="float: none!important;">
                            <div class="well" style="padding-top: 0px;">
                                <br/>
                                <div class="text-center">
                                    <!--<span class="text-lg text-bold text-primary">PT. Galaxy Prima Karya<br/>"Login Administrator"</span>-->
                                    <div style="width: 350px; margin: 0 auto">
                                        <div>
                                            <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; width: 80px; height: 80px">
                                            <h3 style="margin: 5px 0 0.4em 0; font-size: 1.3em; color: #000; padding-top: 20px; padding-right: 25px;"><?php echo $q_instansi->nama; ?></h3>
                                            <div style="color: #000; font-size: 13px; margin-top: -10px; padding-right: 25px;" class="clearfix"><?php echo $q_instansi->alamat; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <form class="form floating-label" action="<?php echo base_URL(); ?>index.php/admin/do_login" method="post">
                                    <?php echo $this->session->flashdata("k"); ?>
                                    <div class="form-group">
                                        <input type="text" autofocus name="u" required autofocus class="form-control">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="p" required class="form-control">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="form-group" style="display: none!important;">
                                        <select name="ta" class="form-control" required><option value="">--</option>
                                            <?php
                                            for ($i = 2012; $i <= (date('Y')); $i++) {
                                                if (date('Y') == $i) {
                                                    echo "<option value='$i' selected>$i</option>";
                                                } else {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <!--
                                        <div class="col-xs-6 text-left">
                                            <div class="checkbox checkbox-inline checkbox-styled">
                                                <label>
                                                    <input type="checkbox"> <span>Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                        -->
                                        <div class="col-xs-12">
                                            <button class="btn btn-accent btn-raised text-right pull-right" name="submit" id="submit" type="submit">Login &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                        </div><!--end .col -->
                                    </div><!--end .row -->
                                </form>
                            </div>
                        </div>
                    </div><!--end .row -->
                </div><!--end .card-body -->
            </div><!--end .card -->
        </section>
        <!-- END LOGIN SECTION -->

        <!-- BEGIN JAVASCRIPT -->
        <script src="<?php echo base_url(); ?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/libs/spin.js/spin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/App.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppNavigation.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppOffcanvas.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppCard.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppForm.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppNavSearch.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/source/AppVendor.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/demo/Demo.js"></script>
        <!-- END JAVASCRIPT -->

    </body>
</html>