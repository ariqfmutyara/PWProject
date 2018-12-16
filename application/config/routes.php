<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home/index';
$route['home'] = 'Home/index/';
$route['home/(:any)'] = 'Home/posts/$1';

$route['login_voter'] = 'Login/login_voter';
$route['login_artist'] = 'Login/login_artist';

$route['register_voter'] = 'Register/register_voter';
$route['register_artist'] = 'Register/register_artist';

$route['logout_voter'] = 'Logout/logout_voter';
$route['logout_artist'] = 'Logout/logout_artist';

$route['home_voter'] = 'Home_voter';
$route['home_artist'] = 'Home_artist';

$route['footer_aboutus'] = 'About_Us';
$route['edit_artist'] = 'Login/edit_artist';
$route['create'] = 'Posts/create';
$route['delete/(:any)'] = 'Posts/delete/$1';
$route['update/(:any)'] = 'Posts/update/$1';
$route['edit/(:any)'] = 'Posts/edit/$1';


$route['register'] = 'Register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

