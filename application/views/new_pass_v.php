

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Forgot Password</title>
    
    <link rel="apple-touch-icon" href="<?= base_url('assets/logo.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/logo.png') ?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap-extend.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/center/assets/css/site.min.css') ?>">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/animsition/animsition.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/asscrollable/asScrollable.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/switchery/switchery.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/intro-js/introjs.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/slidepanel/slidePanel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/flag-icon-css/flag-icon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/chartist/chartist.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/jvectormap/jquery-jvectormap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/vendor/formvalidation/formValidation.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/forms/validation.css') ?>">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?= base_url('assets/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-forgot-password layout-full">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <h2>Input Your New Password</h2>
        <p>Masukkan Password Baru Anda</p>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('login/changePassword')?>" method="post" role="form">
          <div class="form-group">
            <?= form_error('new_password1','<small class="text-danger">','</small>'); ?>
            <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password" required=""><br>
            <?= form_error('new_password2','<small class="text-danger">','</small>'); ?>
            <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Confirm Password" required="">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
          </div>
        </form>
        <!-- <a href="index">&larr; Back to Login</a> -->

        <!-- <footer class="page-copyright">
          <p>Universitas Abdurrab</p>
          <p>© 2019. All RIGHT RESERVED.</p>
        </footer>
 -->      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?= base_url('assets/global/vendor/babel-external-helpers/babel-external-helpers.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/jquery/jquery.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/popper-js/umd/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/bootstrap/bootstrap.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/animsition/animsition.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/mousewheel/jquery.mousewheel.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/asscrollbar/jquery-asScrollbar.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/asscrollable/jquery-asScrollable.js')?>"></script>
    
    <!-- Plugins -->
    <script src="<?= base_url('assets/global/vendor/switchery/switchery.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/intro-js/intro.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/screenfull/screenfull.js')?>"></script>
    <script src="<?= base_url('assets/global/vendor/slidepanel/jquery-slidePanel.js')?>"></script>
    
    <!-- Scripts -->
    <script src="<?= base_url('assets/global/js/Component.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Plugin.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Base.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Config.js')?>"></script>
    
    <script src="<?= base_url('assets/js/Section/Menubar.js')?>"></script>
    <script src="<?= base_url('assets/js/Section/Sidebar.js')?>"></script>
    <script src="<?= base_url('assets/js/Section/PageAside.js')?>"></script>
    <script src="<?= base_url('assets/js/Plugin/menu.js')?>"></script>
    
    <!-- Config -->
    <script src="<?= base_url('assets/global/js/config/colors.js')?>"></script>
    <script src="<?= base_url('assets/js/config/tour.js')?>"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="<?= base_url('assets/js/Site.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Plugin/asscrollable.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Plugin/slidepanel.js')?>"></script>
    <script src="<?= base_url('assets/global/js/Plugin/switchery.js')?>"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
