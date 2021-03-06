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
$route['default_controller'] 					= 'login_controller';
$route['404_override'] 							= '';
$route['translate_uri_dashes'] 					= FALSE;

$route['(admin|secretaria)'] 					 = 'inicio_controller';
$route['admin/editar/(:num)'] 					 = 'inicio_controller/editar/$1';
$route['admin/eliminar/(:num)'] 				 = 'inicio_controller/eliminar/$1';
$route['(admin|secretaria)/informacion/(:num)']  = 'inicio_controller/informacion/$2';
$route['(admin|secretaria)/aprobados'] 			 = 'aprobados_controller';
$route['(admin|secretaria)/aprobar_sol/(:num)/(true|false)'] = 'inicio_controller/aprobar_sol/$2/$3';
$route['estudiantes/inicio']			 		 = 'solicitud_controller';
$route['solicitud_tratamiento_especial/aniadir'] = 'solicitud_controller/aniadir';
$route['activar/(1|0)']							 = 'solicitud_controller/acivarDesactivar/$1';
$route['estudiantes']							 = 'login_controller/login_est';
// $route['registrar']								 = 'inicio_controller/aniadir';
$route['pdfsingular/(:num)']					 = 'inicio_controller/pdfsingular/$1';