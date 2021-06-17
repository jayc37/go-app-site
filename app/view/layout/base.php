<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->

<title>
</title>
<link rel="canonical" href="https://appseed.us/admin-dashboards/flask-dashboard-volt">

<link rel="apple-touch-icon" sizes="120x120" href="<?php echo _WEB_ROOT?>/app/view/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo _WEB_ROOT?>/app/view/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo _WEB_ROOT?>/app/view/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo _WEB_ROOT?>/app/view/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo _WEB_ROOT?>/app/view/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="<?php echo _WEB_ROOT?>/app/view/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Sweet Alert -->
<link type="text/css" href="<?php echo _WEB_ROOT?>/app/view/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="<?php echo _WEB_ROOT?>/app/view/assets/vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="<?php echo _WEB_ROOT?>/app/view/assets/css/volt.css" rel="stylesheet">

</head>
<body>

  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
      <a class="navbar-brand me-lg-5" href="/">
          <img class="navbar-brand-dark" src="<?php echo _WEB_ROOT?>/app/view/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="<?php echo _WEB_ROOT?>/app/view/assets/img/brand/dark.svg" alt="Volt logo" />
      </a>
      <div class="d-flex align-items-center">
          <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
  </nav>

   
    <?php
      $this->render('layout/includes/sidebar');
    ?>
  <main class="content">
  <?php
      $this->render('layout/includes/navigation');
      $this ->render($content,$subcontent);    
      $this->render('layout/includes/settings-box');
      $this->render('layout/includes/footer');
    ?>
  </main>
        <?php
      $this->render('layout/includes/scripts');
    ?>



</body>
</html>
