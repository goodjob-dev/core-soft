<?php
defined('BASEPATH') OR exit('');

/**
 * Default route configuration
*/

$route['default_controller'] = 'indexcontroller';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

/**
 * Asset handler route
*/

$route['(js|css|images|fonts)/(:any)'] = 'assetscontroller/$1/$2';

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

