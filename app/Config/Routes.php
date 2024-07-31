<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //rute login
 $routes->group('', ['filter' => 'authenticated'], function($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->get('/auth/login', 'LoginController::index');
    $routes->post('/auth/login/authenticate', 'LoginController::authenticate');
    $routes->get('/auth/register', 'LoginController::register');
    $routes->post('/register/store', 'LoginController::store');
});

 $routes->get('/logout', 'LoginController::logout');

 $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
 
 


 //rute DIVISI
$routes->get('/divisi', 'DivisiController::index', ['filter' => 'auth']);
$routes->get('/divisi/create_divisi', 'DivisiController::create', ['filter' => 'auth']);
$routes->get('/divisi/edit/(:num)', 'DivisiController::edit/$1', ['filter' => 'auth']);
$routes->post('/divisi/store', 'DivisiController::store', ['filter' => 'auth']);
$routes->post('/divisi/update/(:num)', 'DivisiController::update/$1', ['filter' => 'auth']);
$routes->delete('divisi/delete/(:num)', 'DivisiController::delete/$1', ['filter' => 'auth']);

//rute Jenis Perangkat
$routes->get('/perangkat', 'JenisPerangkatController::index', ['filter' => 'auth']);
$routes->get('/perangkat/create', 'JenisPerangkatController::create', ['filter' => 'auth']);
$routes->get('/perangkat/edit/(:num)', 'JenisPerangkatController::edit/$1', ['filter' => 'auth']);
$routes->post('/perangkat/store', 'JenisPerangkatController::store', ['filter' => 'auth']);
$routes->post('/perangkat/update/(:num)', 'JenisPerangkatController::update/$1', ['filter' => 'auth']);
$routes->delete('perangkat/delete/(:num)', 'JenisPerangkatController::delete/$1', ['filter' => 'auth']);


$routes->get('/userinfo', 'UserinfoController::index', ['filter' => 'auth']);
$routes->get('/userinfo/search', 'UserinfoController::search', ['filter' => 'auth']);
$routes->get('/userinfo/create', 'UserinfoController::create', ['filter' => 'auth']);
$routes->post('/userinfo/store', 'UserinfoController::store', ['filter' => 'auth']);
$routes->post('/userinfo/update/(:num)', 'UserinfoController::update/$1', ['filter' => 'auth']);
$routes->get('/userinfo/edit/(:num)', 'UserinfoController::edit/$1', ['filter' => 'auth']);
$routes->delete('/userinfo/delete/(:num)', 'UserinfoController::delete/$1', ['filter' => 'auth']);
$routes->post('/userinfo/deleteSelected', 'UserinfoController::deleteSelected', ['filter' => 'auth']);



