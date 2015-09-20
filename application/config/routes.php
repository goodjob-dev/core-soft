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

$route['manage/login']['get']  = 'authcontroller/form';
$route['manage/login']['post'] = 'authcontroller/action';

/**
 * Admin routes
*/

$route['manage']           = 'dashboardcontroller/index';
$route['manage/dashboard'] = 'dashboardcontroller/index';



/**
 * Public routes
*/
$route['contact'] = 'contactcontroller/index';
