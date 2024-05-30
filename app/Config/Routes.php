<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/product', 'Pages::product');
$routes->get('/pages/profile', 'Pages::profile');
$routes->get('/pages/category', 'Pages::category');
$routes->get('/detail', 'Pages::detail');

$routes->get('/pages/admin', 'DashboardController::index');
$routes->get('/pages/user', 'Pages::user');
$routes->get('/pages/tambah', 'Tambah::index');
$routes->get('/login' , 'auth::index');

$routes->post('/pages/profile', 'Pages::profile');
$routes->post('/pages/tambah', 'Tambah::tambah');
$routes->post('/pages/pinjam', 'Pages::pinjam');


$routes->post('/login' , 'auth::login');
$routes->Post('/register' , 'auth::register');
$routes->post('/logout', 'auth::logout');
$routes->post('/update', 'auth::update');
$routes->post('/update', 'auth::update');