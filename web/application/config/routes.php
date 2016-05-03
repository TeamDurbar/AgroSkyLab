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

$route['default_controller'] = "homePanel/index";
$route['404_override'] = 'homePanel/index';
$route['dboard/(:any)'] = "dashboard/dboardPanel/$1";
$route['notice/(:any)'] = "dashboard/noticePanel/$1";
$route['person/(:any)'] = "dashboard/personRegPanel/$1";
$route['gallery/(:any)'] = "dashboard/gallery/$1";
$route['institution/(:any)'] = "dashboard/institutionPanel/$1";
$route['academic/(:any)'] = "dashboard/academicPanel/$1";
$route['facilities/(:any)'] = "dashboard/facilitiesPanel/$1";
$route['contactsBoard/(:any)'] = "dashboard/contactsPanel/$1";
$route['dboardResult/(:any)'] = "dashboard/dboardResultPanel/$1";
$route['admissionResult/(:any)'] = "dashboard/admissionPanel/$1";
$route['admin/(:any)'] = "dashboard/admin_login/$1";
$route['(:any)'] = "homePanel/$1";


/* End of file routes.php */
/* Location: ./application/config/routes.php */