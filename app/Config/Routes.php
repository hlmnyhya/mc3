<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Examples');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Landing
$routes->get('/', 'Landing::index');
$routes->get('/about', 'Landing::about');
$routes->get('/services', 'Landing::services');
$routes->get('/contact', 'Landing::contact');

// Login
$routes->get('/login', 'Login::index');

// Dashboard
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
});

$routes->group('admin/master/produk', ['namespace' => 'App\Controllers\Admin\Master'], function ($routes) {
    $routes->get('produk', 'ProdukController::index');
    $routes->get('add', 'ProdukController::add_product');
    $routes->post('create', 'ProdukController::create');
    $routes->get('edit/(:num)', 'ProdukController::edit_product/$1');
    $routes->post('update/(:num)', 'ProdukController::update/$1');
    $routes->get('detail/(:num)', 'ProdukController::detail_product/$1');
});

$routes->group('admin/transaksi/penjualan', ['namespace' => 'App\Controllers\Admin\Transaksi'], function ($routes) {
    $routes->get('penjualan', 'PenjualanController::index');
});

$routes->group('admin/transaksi/pelanggan', ['namespace' => 'App\Controllers\Admin\Transaksi'], function ($routes) {
    $routes->get('pelanggan', 'PelangganController::index');
    $routes->post('store', 'PelangganController::store');
    $routes->post('update_diproses/(:num)', 'PelangganController::update_diproses/$1');
    $routes->post('update_dikembalikan/(:num)', 'PelangganController::update_dikembalikan/$1');
    $routes->post('update_belum_selesai/(:num)', 'PelangganController::update_belum_selesai/$1');
    $routes->post('update_selesai/(:num)', 'PelangganController::update_selesai/$1');
});





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
