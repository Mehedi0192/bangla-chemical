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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin login
$route['banche']='admin_login';
$route['admin-login']='admin_login/admin_login_check';
$route['admin-logout']='admin_login/admin_logout_check';
$route['admin-dashboard']='admin';


//Partner & Association
$route['delete-partner-image/(.+)']='admin/delete_partner_image/$1';
$route['delete-associations/(.+)']='admin/delete_associations/$1';


//key personnel
$route['edit-key-personnel/(.+)']='admin/edit_key_personnel/$1';
$route['delete-key-personnel/(.+)']='admin/delete_key_personnel/$1';

$route['delete-affiliated-companies/(.+)']='affiliated_companies/delete_affiliate_companies/$1';

$route['edit-news-events/(.+)']='media/edit_news_events/$1';
$route['delete-news-events/(.+)']='media/delete_news_events/$1';

$route['delete-archive/(.+)']='archive/delete_archive/$1';

$route['delete-books/(.+)']='books_article/delete_books/$1';
$route['delete-column-article/(.+)']='books_article/delete_column_article/$1';
$route['delete-works-affiliation/(.+)']='books_article/delete_works_affiliation/$1';

$route['details-column-article/(.+)']='books_article/column_article_info_by_id/$1';

$route['books-details/(.+)']='books_article/books_details_info_by_id/$1';

$route['delete-highlighted-product/(.+)']='admin/delete_highlighted_product/$1';



