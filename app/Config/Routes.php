<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/product', 'Pages::product');
$routes->get('/pages/profile', 'Pages::profile');
$routes->get('/pages/category', 'Pages::category');

$routes->post('/pages/profile', 'Pages::profile');
$routes->post('/pages/admin', 'Pages::admin');
$routes->post('/pages/tambah', 'Pages::tambah');
$routes->post('/pages/user', 'Pages::user');
$routes->post('/pages/pinjam', 'Pages::pinjam');


$routes->get('/login' , 'auth::index');
$routes->post('/login' , 'auth::login');
$routes->Post('/register' , 'auth::register');
$routes->post('/logout', 'auth::logout');
$routes->post('/update', 'auth::update');
$routes->post('/update', 'auth::update');