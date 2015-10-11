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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login-style.css" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        $q_instansi = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
        ?>
        <!-- BEGIN LOGIN SECTION -->
        <div class="container">
            <!--
            <div class="text-center">
            -->
                <!--<span class="text-lg text-bold text-primary">PT. Galaxy Prima Karya<br/>"Login Administrator"</span>-->
            <!--
                <div style="width: 350px; margin: 0 auto">
                    <div>
                        <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; width: 80px; height: 80px">
                        <h3 style="margin: 5px 0 0.4em 0; font-size: 1.3em; color: #000; padding-top: 20px; padding-right: 25px;"><?php echo $q_instansi->nama; ?></h3>
                        <div style="color: #000; font-size: 13px; margin-top: -10px; padding-right: 25px;" class="clearfix"><?php echo $q_instansi->alamat; ?></div>
                    </div>
                </div>
            </div>
            -->
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="<?php echo base_URL(); ?>index.php/admin/do_login" method="POST">
                    <?php echo $this->session->flashdata("k"); ?>
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" autofocus name="u" required autofocus class="form-control" placeholder="Username">
                    <input type="password" name="p" required class="form-control" placeholder="Password">
                    <!--
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    -->
                    <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" id="submit" type="submit"><i class="fa fa-arrow-circle-right"></i>&nbsp; L O G I N</button>
                </form><!-- /form -->
                <!--
                <a href="#" class="forgot-password">
                    Forgot the password?
                </a>
                -->
            </div><!-- /card-container -->
        </div><!-- /container -->
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
        <script>
            $(document).ready(function () {
                loadProfile();
            });

            function getLocalProfile(callback) {
                var profileImgSrc = localStorage.getItem("PROFILE_IMG_SRC");
                var profileName = localStorage.getItem("PROFILE_NAME");
                var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

                if (profileName !== null
                        && profileReAuthEmail !== null
                        && profileImgSrc !== null) {
                    callback(profileImgSrc, profileName, profileReAuthEmail);
                }
            }

            function loadProfile() {
                if (!supportsHTML5Storage()) {
                    return false;
                }
                getLocalProfile(function (profileImgSrc, profileName, profileReAuthEmail) {
                    $("#profile-img").attr("src", profileImgSrc);
                    $("#profile-name").html(profileName);
                    $("#reauth-email").html(profileReAuthEmail);
                    $("#inputEmail").hide();
                    $("#remember").hide();
                });
            }
            
            function supportsHTML5Storage() {
                try {
                    return 'localStorage' in window && window['localStorage'] !== null;
                } catch (e) {
                    return false;
                }
            }
            
            function testLocalStorageData() {
                if (!supportsHTML5Storage()) {
                    return false;
                }
                localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120");
                localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
                localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
            }
        </script>
    </body>
</html>