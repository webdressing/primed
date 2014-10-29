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



/*
| -------------------------------------------------------------------------
| CHANGES, CHANGES, CHANGES
| -------------------------------------------------------------------------
| This is the original codeigniter route, I changed it to load the demo controller instead
|
| $route['default_controller'] = "welcome";
| $route[''] = "welcome";
| 
*/

$route['default_controller'] = "demo";
$route[''] = '';
$route['404_override'] = '';



/*
| -------------------------------------------------------------------------
| i18n - Internationalization - http://jeromejaglale.com/doc/php/codeigniter_i18n
| --------------------------------------------------------------------------
| 
| I changed the configuration to enable the routing feature of CI (broke on old approach)
| 
| ROUTING EXAMPLES
| 
| $route['^(en|de)/products'] = "products/search"; 				// search/error page for me
| $route['^(en|de)/products/(:num)'] = "products/id/$2"; 			// products/123
| $route['^(en|de)/products/(:num)/(:any)'] = "products/id/$2"; 	// Fix to have after id/ names (products/123/t-e-a)
| $route['^(en|de)/artikel/(.+)$'] = "artikel/$2";				// regular expression
|
*/


$route['^(en|fr|bg|cs|da|de|el|es|et|fi|ga|it|lt|lv|mt|nl|pl|pt|ro|sk|sl|sv)/(.+)$'] = "$2";
$route['^(en|fr|bg|cs|da|de|el|es|et|fi|ga|it|lt|lv|mt|nl|pl|pt|ro|sk|sl|sv)$'] = $route['default_controller'];







/* End of file routes.php */
/* Location: ./application/config/routes.php */