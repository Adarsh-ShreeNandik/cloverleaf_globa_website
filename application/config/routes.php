<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['about'] = "Web/about";
$route['gallery'] = "Web/gallery";
$route['policy'] = "Web/policy";
$route['cloverleaf-cmms/privacy-policy'] = "Web/privacy_policy";

$route['condition'] = "Web/condition";


$route['join-us'] = "Web/join_us";
$route['sales'] = "Web/sales";


// Services
$route['service'] = "Web/service";


$route['support'] = "Web/support";

$route['blog'] = "Web/blog";
$route['revolutionizing_the_packaging_industry'] = "Web/blog_1";
$route['andhra_packaging_machine'] = "Web/blog_2";
$route['blog'] = "Web/blog";
$route['casestudies'] = "Web/casestudies";
$route['account-delete-request'] = "Web/delete";

