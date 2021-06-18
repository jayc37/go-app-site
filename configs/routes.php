<?php
$routes['default_controller'] = 'home';
/*
 * Đường dẫn ảo => Đường dẫn thật
 *
* */
$routes['list-san-pham'] = 'product/list_product';
$routes['san-pham'] = 'product';
$routes['chi-tiet-san-pham'] = 'product/detail/.+-(\d+)';
$routes['trang-chu'] = 'home';
$routes['sign-in'] = 'user/login';
$routes['sign-up'] = 'user/signup';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
?>