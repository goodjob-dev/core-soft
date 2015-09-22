<?php
defined('BASEPATH') OR exit('');

/**
 * Default route configuration
*/

$route['default_controller'] = 'indexcontroller';

$route['404_override'] = 'indexcontroller';

$route['translate_uri_dashes'] = FALSE;

/**
 * Admin Login route
*/

$route['manage/login']['get']  = '__authcontroller/form';
$route['manage/login']['post'] = '__authcontroller/action';

/**
 * Admin routes
*/

$route['manage']           = '__dashboardcontroller/index';
$route['manage/dashboard'] = '__dashboardcontroller/index';

$route['manage/logout']    = '__dashboardcontroller/logout';

$route['manage/products']  = '__productcontroller/index';

/**
 * Public routes
*/
$route['cart']              = 'cartcontroller/index';
$route['cart/add/([0-9]+)'] = 'cartcontroller/add/$1';
$route['contact']           = 'contactcontroller/index';
$route['category/([a-z]+)'] = 'categorycontroller/index/$1';
$route['product/([0-9]+)']  = 'indexcontroller/product/$1';
$route['search']           = 'searchcontroller/index';