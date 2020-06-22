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
$route['default_controller'] = 'landing';

//Welcome Router  
$route['profile']          = 'Welcome/profile';
$route['ico-distribution'] = 'Welcome/ico_distribution';
$route['activity'] = 'Welcome/activity';
$route['referral'] = 'Welcome/referral'; 

//Landing Router 
$route['whitepaper']  = 'Landing/whitepaper';
$route['advertise']   = 'Landing/advertise';
$route['buy/(:any)']  = 'Landing/buy/$1';
$route['sell/(:any)'] = 'Landing/sell/$1';
$route['about-us']    = 'Landing/about_us';
$route['careers']     = 'Landing/careers';
$route['fees']        = 'Landing/fees';
$route['api']        = 'Landing/api';
$route['bounty-program']  = 'Landing/bounty_program';
$route['affiliate']       = 'Landing/affiliate';
 
//Auth Router
$route['referral/(:any)']     = 'Auth/referral/$1';
$route['verify-email/(:any)'] = 'Auth/verifyAccountEmail/$1';

//BuyToken Router
$route['buy-token'] = 'Token/buyToken';

//Transaction
$route['transactions'] = 'Transaction/userTransactions';

$route['404_override'] = ''; 
$route['translate_uri_dashes'] = FALSE;
