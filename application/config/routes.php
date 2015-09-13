<?php
defined('BASEPATH') OR exit('');

/**
 * Default route configuration
*/

$route['default_controller'] = 'welcome';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

/*!
 * Asset handler route
*/

$route['(js|css|images)/(:any)'] = 'loadassets/$1/$2';

