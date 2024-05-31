<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/pages', 'Pages::index');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/about', 'Pages::about');

$routes->get('/pages/profile', 'Pages::profile');
$routes->get('/pages/category', 'Pages::category');
$routes->get('/pages/product', 'BookDetail::index');
$routes->post('/pages/product', 'BookDetail::detail');

$routes->get('/pages/admin', 'DashboardController::index');
$routes->get('/pages/user', 'Pages::user');
$routes->get('/pages/tambah', 'Tambah::index');
$routes->get('/login', 'Auth::index');

// Route for fetching books data via AJAX
$routes->get('/admin/fetchBooks', 'DashboardController::fetchBooks');

$routes->post('/pages/profile', 'Pages::profile');
$routes->post('/pages/tambah', 'Tambah::tambah');
$routes->post('/pages/pinjam', 'Pages::pinjam');

$routes->post('/login', 'Auth::login');
$routes->post('/register', 'Auth::register');
$routes->post('/logout', 'Auth::logout');
$routes->post('/update', 'Auth::update');

// $routes->post('/');