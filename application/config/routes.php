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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['composer'] = 'composer/index'; // Para mostrar la lista de compositores
$route['composer/create'] = 'composer/create'; // Para crear un nuevo compositor
$route['composer/edit/(:num)'] = 'composer/edit/$1'; // Para editar un compositor
$route['composer/delete/(:num)'] = 'composer/delete/$1'; // Para eliminar un compositor
$route['genre'] = 'genre/index'; // Para mostrar la lista de géneros
$route['genre/create'] = 'genre/create'; // Para crear un nuevo género
$route['genre/edit/(:num)'] = 'genre/edit/$1'; // Para editar un género
$route['genre/delete/(:num)'] = 'genre/delete/$1'; // Para eliminar un género
$route['musical_piece'] = 'musical_piece/index';
$route['musical_piece/create'] = 'musical_piece/create';
$route['musical_piece/edit/(:num)'] = 'musical_piece/edit/$1';

