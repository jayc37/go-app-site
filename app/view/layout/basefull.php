
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

    <?php $this->render($content,$subcontent)?>
    
    <?php $this->render('layout/includes/scripts');?>
</body>
</html>
