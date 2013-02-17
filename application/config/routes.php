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
 * this is the original codeigniter route
 * i changed it to load the demo controller instead
 *
 
$route['default_controller'] = "welcome";
$route[''] = "welcome";

 */

$route['default_controller'] = "demo";
$route[''] = "demo";


$route['404_override'] = '';

/*
 * internationalization 
 * prepared for europe, to be extended if you need
 * info: http://maestric.com/doc/php/codeigniter_i18n
 *
 */

$route['^en/(.+)$'] = "$1";
$route['^fr/(.+)$'] = "$1";
$route['^bg/(.+)$'] = "$1";
$route['^cs/(.+)$'] = "$1";
$route['^da/(.+)$'] = "$1";
$route['^de/(.+)$'] = "$1";
$route['^el/(.+)$'] = "$1";
$route['^es/(.+)$'] = "$1";
$route['^et/(.+)$'] = "$1";
$route['^fi/(.+)$'] = "$1";
$route['^ga/(.+)$'] = "$1";
$route['^hu/(.+)$'] = "$1";
$route['^it/(.+)$'] = "$1";
$route['^lt/(.+)$'] = "$1";
$route['^lv/(.+)$'] = "$1";
$route['^mt/(.+)$'] = "$1";
$route['^nl/(.+)$'] = "$1";
$route['^pl/(.+)$'] = "$1";
$route['^pt/(.+)$'] = "$1";
$route['^ro/(.+)$'] = "$1";
$route['^sk/(.+)$'] = "$1";
$route['^sl/(.+)$'] = "$1";
$route['^sv/(.+)$'] = "$1";

 
// '/en' and '/fr' -> use default controller

$route['^en$'] = $route['default_controller'];
$route['^fr$'] = $route['default_controller'];
$route['^bg$'] = $route['default_controller'];
$route['^cs$'] = $route['default_controller'];
$route['^da$'] = $route['default_controller'];
$route['^de$'] = $route['default_controller'];
$route['^el$'] = $route['default_controller'];
$route['^es$'] = $route['default_controller'];
$route['^et$'] = $route['default_controller'];
$route['^fi$'] = $route['default_controller'];
$route['^ga$'] = $route['default_controller'];
$route['^hu$'] = $route['default_controller'];
$route['^it$'] = $route['default_controller'];
$route['^lt$'] = $route['default_controller'];
$route['^lv$'] = $route['default_controller'];
$route['^mt$'] = $route['default_controller'];
$route['^nl$'] = $route['default_controller'];
$route['^pl$'] = $route['default_controller'];
$route['^pt$'] = $route['default_controller'];
$route['^ro$'] = $route['default_controller'];
$route['^sk$'] = $route['default_controller'];
$route['^sl$'] = $route['default_controller'];
$route['^sv$'] = $route['default_controller'];

/* End of file routes.php */
/* Location: ./application/config/routes.php */