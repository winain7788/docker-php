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
$route['default_controller'] = 'front/pre_index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//:[ssl validate url]
//$route['8BFF8F047EC2D3873190CDA55A512808.txt'] = 'front/pre_index';




//:[fix url][section]
$route['restaurant']='front/index';
$route['blog']='front/blog';
$route['promotion']='front/promotion';

$route['product']='front/section/6';


//:[fix url][page]
$route['policy']='front/policy';
$route['privacy']='front/privacy';
$route['under_construction/(.*)']='front/under_construction/$1';
//$route['search/?q=d']='front/search/$1';

$route['order/submit']='front/order';
$route['order/complete/(.*)']='front/complete/$1';
$route['order/status/(.*)']='front/order_status/$1';

$route['restaurant/in/phuket']='front/all_restaurant_in_phuket';






//:[sub section url][load file]
include_once(APPPATH."cache/custom_routes.php");

//:[store route]
include_once(APPPATH."cache/custom_store_routes.php");


//:[blog route]
include_once(APPPATH."cache/custom_blog.php");


//:[area route]
include_once(APPPATH."cache/custom_area_routes.php");

//$route['store/(:any)/(:num)']='front/store/$2';



#$route['route']='front/route';
#$route['your_route']='front/your_route';
#$route['detail/(.*)/(.*)']='front/detail/$1/$2';



//:[test lang]
$route['demo/lang/(.*)/(.*)'] = 'demo/test_lang/$1/$2';
$route['demo/lang_get/(.*)/?keyword=(.*)'] = 'demo/test_lang_get/$1';

$route['demo/lang_form_submit/(.*)'] = 'demo/test_lang_post_form_submit/$1';




//:[url with lang]
$route['(\w{2})'] = 'front/pre_index/$1';

$route['(\w{2})/restaurant']='front/index/$1';
$route['(\w{2})/blog']='front/blog/$1';
$route['(\w{2})/promotion']='front/promotion/$1';

$route['(\w{2})/product']='front/section/6/$1';

$route['(\w{2})/policy']='front/policy/$1';
$route['(\w{2})/privacy']='front/privacy/$1';

$route['(\w{2})/order/submit']='front/order/$1';
$route['(\w{2})/order/complete/(.*)']='front/complete/$2/$1';
$route['(\w{2})/order/status/(.*)']='front/order_status/$2/$1';

$route['(\w{2})/restaurant/in/phuket']='front/all_restaurant_in_phuket/$1';


$route['(\w{2})/search/(.*)']='front/search/$2/$1';


$route['show_area']='front/index_area';
$route['(\w{2})/show_area']='front/index_area/$1';


$route['(\w{2})/careers']='front/career/$1';
$route['(\w{2})/careers/rider-driver']='front/career_rider/$1';

$route['(\w{2})/wesmartexpress']='front/wesm/$1';
