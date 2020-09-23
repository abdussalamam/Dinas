<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login</title>

  <link rel="apple-touch-icon" href="<?= base_url('assets/logo.png') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/logo.png') ?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap-extend.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/center/assets/css/site.min.css') ?>">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/animsition/animsition.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/asscrollable/asScrollable.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/switchery/switchery.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/intro-js/introjs.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/slidepanel/slidePanel.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/flag-icon-css/flag-icon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/pages/login-v2.css') ?>">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <script src="<?= base_url('assets/global/vendor/breakpoints/breakpoints.js') ?>"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition page-login-v2 layout-full page-dark">
  <style>
    body {
      background: transparent;
    }
  </style>
  <!-- Page -->
  <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="<?= base_url('assets/center/assets/images/logo-blue@2x.png" alt="...') ?>">
          <h1 class="brand-text" style="font-size: 20pt">Sistem Informasi Arsip Pegawai</h1>
        </div>
        <!--     <p class="font-size-20"></p> -->
      </div>

      <div class="page-login-main animation-slide-right animation-duration-1">
        <div class="brand hidden-md-up">
          <img class="brand-img" src="<?= base_url('assets/gambar/backgroundLogin.jpeg')?>" alt="...">

        </div>
        <h3 class="font-size-24">Sign In</h3>

        <p>Masukkan Username dan Password Anda</p>

        <?php if ($error = $this->session->flashdata('alert')) : ?>
          <div class="alert alert-success">
            <strong><?php echo $error ?></strong>
          </div>
        <?php endif ?>

        <?php if ($error = $this->session->flashdata('login')) : ?>
          <div class="alert alert-danger alert-dismissible">
            <strong><?php echo $error ?></strong>
          </div>
        <?php endif ?>

        <?= $this->session->flashdata('pesan'); ?>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?php echo base_url('login/proseslogin') ?>">
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="username" placeholder="Email" autofocus required>
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required><?php echo form_error('password') ?>
          </div>
          <p class="text-center"><?= 'Berapakah Jumlah ' . $a . ' + ' . $b . ' ?' ?></p>
          <div class="form-group">
            <input type="number" class="form-control" id="" name="captcha" placeholder="Jawab pertanyaan diatas" autofocus required>
            <input type="hidden" name="hasil" value="<?= $c ?>">
          </div>
          <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me</label>
              </div>
              <a class="float-right" href="<?= base_url('login/forgotPassword') ?>">Forgot password?</a>
            </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

      <!--   <p>Belum Punya Akun? <a href="<?= base_url('register') ?>">Daftar disini</a></p>
 -->
        <footer class="page-copyright">
          <p></p>
          <p>©2019</p>
          <div class="social">
            <a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
          </div>
        </footer>
      </div>

    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="<?= base_url('assets/global/vendor/babel-external-helpers/babel-external-helpers.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/popper-js/umd/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/bootstrap/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/animsition/animsition.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/mousewheel/jquery.mousewheel.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/asscrollbar/jquery-asScrollbar.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/asscrollable/jquery-asScrollable.js') ?>"></script>

  <!-- Plugins -->
  <script src="<?= base_url('assets/global/vendor/switchery/switchery.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/intro-js/intro.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/screenfull/screenfull.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/slidepanel/jquery-slidePanel.js') ?>"></script>
  <script src="<?= base_url('assets/global/vendor/jquery-placeholder/jquery.placeholder.js') ?>"></script>

  <!-- Scripts -->
  <script src="<?= base_url('assets/global/js/Component.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Plugin.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Base.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Config.js') ?>"></script>

  <script src="<?= base_url('assets/center/assets/js/Section/Menubar.js') ?>"></script>
  <script src="<?= base_url('assets/center/assets/js/Section/Sidebar.js') ?>"></script>
  <script src="<?= base_url('assets/center/assets/js/Section/PageAside.js') ?>"></script>
  <script src="<?= base_url('assets/center/assets/js/Plugin/menu.js') ?>"></script>

  <!-- Config -->
  <script src="<?= base_url('assets/global/js/config/colors.js') ?>"></script>
  <script src="<?= base_url('assets/center/assets/js/config/tour.js') ?>"></script>
  <script>
    Config.set('assets', '<?= base_url('assets/center/assets') ?>;
  </script>

  <!-- Page -->
  <script src="<?= base_url('assets/center/assets/js/Site.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Plugin/asscrollable.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Plugin/slidepanel.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Plugin/switchery.js') ?>"></script>
  <script src="<?= base_url('assets/global/js/Plugin/jquery-placeholder.js') ?>"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
</body>

</html>