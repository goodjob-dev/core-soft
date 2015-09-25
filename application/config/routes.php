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

$route['manage/login']['get']  = '_AuthController/form';
$route['manage/login']['post'] = '_AuthController/action';

/**
 * Admin dashboard routes
*/

$route['manage']           = '_DashboardController/index';
$route['manage/dashboard'] = '_DashboardController/index';


/**
 * logout admin user
*/
$route['manage/logout']    = '_DashboardController/logout';


/**
 * product routes
*/

$route['manage/products']     = '_ProductController/index';
$route['manage/products/add'] = '_ProductController/add';

/**
 * User routes
*/
$route['manage/users']     = '_UsersController/index';




/**
 * Public routes
*/
$route['cart']              = 'cartcontroller/index';
$route['cart/add/([0-9]+)'] = 'cartcontroller/add/$1';

$route['contact']           = 'contactcontroller/index';

$route['category/([a-z]+)'] = 'categorycontroller/index/$1';

$route['product/([0-9]+)']  = 'indexcontroller/product/$1';

$route['search']            = 'searchcontroller/search';