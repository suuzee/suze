<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['admin'] = 'admin/welcome/index';
$route['admin/login'] = 'admin/welcome/login';
$route['admin/logout'] = 'admin/welcome/logout';
$route['admin/dashboard'] = 'admin/welcome/dashboard';
$route['admin/add_article'] = 'admin/welcome/add_article';
$route['admin/save_article'] = 'admin/welcome/save_article';
$route['admin/articles'] = 'admin/welcome/articles';
$route['admin/del/(:num)'] = 'admin/welcome/del/$1';
$route['admin/edit/(:num)'] = 'admin/welcome/edit/$1';
$route['admin/do_edit/(:num)'] = 'admin/welcome/do_edit/$1';
$route['admin/tags'] = 'admin/welcome/tags';
$route['admin/add_tags'] = 'admin/welcome/add_tags';
$route['admin/save_tags'] = 'admin/welcome/save_tags';
$route['admin/do_edit_tags/(:num)'] = 'admin/welcome/do_edit_tags/$1';
$route['admin/del_tag/(:num)'] = 'admin/welcome/del_tag/$1';
$route['admin/edit_tag/(:num)'] = 'admin/welcome/edit_tag/$1';


$route['articles/(:num)'] = 'welcome/articles/$1';
$route['tags/(:num)'] = 'welcome/tags/$1';
$route['search'] = 'welcome/search';
$route[''] = 'welcome/index';
$route['index'] = 'welcome/index';

// $route['admin/user/(:num)'] = 'admin/welcome/user/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */