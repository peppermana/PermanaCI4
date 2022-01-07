<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('News');
$routes->setDefaultMethod('data_news');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'News::data_news', ['filter' => 'auth']);
$routes->get('news', 'News::data_news', ['filter'=>'auth']);
$routes->get('form-insert-news', 'News::insert_news');
$routes->post('proses-insert-news', 'News::proses_insert');
// $routes->get('login', 'News::login_news');
// $routes->post('process-login', 'News::login_process');

//Delete routes
$routes->get('delete/(:any)', 'News::delete_news/$1');

//Edit news
$routes->get('edit-news/(:any)', 'News::data_edit/$1');

//proses edit(update)
$routes->post('edit/(:any)', 'News::proses_edit/$1');


//Controlller Penulis
$routes->get('data-penulis', 'Penulis::penulis', ['filter' => 'auth']);
$routes->get('form-edit-penulis/(:any)', 'Penulis::form_edit/$1');
$routes->get('form-insert-penulis', 'Penulis::form_insert');


//proses controller penulis
$routes->post('process-insert-penulis', 'Penulis::process_insert');
$routes->get('delete-penulis/(:any)', 'Penulis::delete_penulis/$1');
$routes->post('process-edit-penulis/(:any)', 'Penulis::process_edit/$1');

//login tb_admin
$routes->get('login', 'Logincontroller::login');
$routes->post('process-login', 'Logincontroller::process_login');
$routes->get('logout', 'Logincontroller::logout');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
