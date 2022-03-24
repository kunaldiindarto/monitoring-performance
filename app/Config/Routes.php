<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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
$routes->get('/', 'Monitor2::index');
$routes->get('/data', 'Data::index', ['filter' => 'role:super-admin,teknik,quality,operator,guest']);
// $routes->get('/data', 'Monitor2::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:super-admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:super-admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:super-admin']);
$routes->get('/admin/(:any)/(:num)', 'Admin::delete/$1/$2', ['filter' => 'role:super-admin']);

$routes->delete('/dashboard/(:num)', 'Dashboard::delete/$1');
$routes->get('/dashboard/edit/(:any)', 'Dashboard::edit/$1');

$routes->get('/param2/edit/(:any)', 'Param2::edit/$1');
$routes->delete('/param2/(:num)', 'Param2::delete/$1');

$routes->get('/param3/edit/(:any)', 'Param3::edit/$1');
$routes->delete('/param3/(:num)', 'Param3::delete/$1');

$routes->get('/param4/edit/(:any)', 'Param4::edit/$1');
$routes->delete('/param4/(:num)', 'Param4::delete/$1');

$routes->post("/lockm1", "Monitor::lockm1");
$routes->post("/postackpressure", "Monitor::postackpressure");

$routes->get('/mesin/m1', 'Mesin::m1',  ['filter' => 'role:super-admin,teknik,quality,operator']);
$routes->get('/mesin/m2', 'Mesin::m2',  ['filter' => 'role:super-admin,teknik,quality,operator']);
$routes->get('/mesin/m3', 'Mesin::m3',  ['filter' => 'role:super-admin,teknik,quality,operator']);
$routes->get('/mesin/m4', 'Mesin::m4',  ['filter' => 'role:super-admin,teknik,quality,operator']);

$routes->delete('/history/(:any)/(:num)', 'History::delete/$1/$2');
$routes->get('/history/edit/(:any)/(:num)', 'History::edit/$1/$2');

$routes->resource('webservice');
$routes->get('/client', 'Client::index');
$routes->get('/client/loop', 'Client::loop');
$routes->post('/client/create', 'Client::create');
$routes->post('/client/postblink', 'Client::postblink');
$routes->post('/client/postotherloss', 'Client::postotherloss');
$routes->post('/client/postminorstop', 'Client::postminorstop');
$routes->post('/client/postfailure', 'Client::postfailure');
$routes->post('/client/postlifetime', 'Client::postlifetime');
$routes->post('/client/postoee', 'Client::postoee');
$routes->post('/client/postmaintenance', 'Client::postmaintenance');
$routes->post('/client/postkondisi', 'Client::postkondisi');

$routes->get('/client1', 'Client1::index');
$routes->get('/client1/loop', 'Client1::loop');
$routes->post('/client1/create', 'Client1::create');
$routes->post('/client1/postblink', 'Client1::postblink');
$routes->post('/client1/postotherloss', 'Client1::postotherloss');
$routes->post('/client1/postminorstop', 'Client1::postminorstop');
$routes->post('/client1/postfailure', 'Client1::postfailure');
$routes->post('/client1/postlifetime', 'Client1::postlifetime');
$routes->post('/client1/postoee', 'Client1::postoee');
$routes->post('/client1/postmaintenance', 'Client1::postmaintenance');
$routes->post('/client1/postkondisi', 'Client1::postkondisi');

$routes->get('/client2', 'Client2::index');
$routes->get('/client2/loop', 'Client2::loop');
$routes->post('/client2/create', 'Client2::create');
$routes->post('/client2/postblink', 'Client2::postblink');
$routes->post('/client2/postotherloss', 'Client2::postotherloss');
$routes->post('/client2/postminorstop', 'Client2::postminorstop');
$routes->post('/client2/postfailure', 'Client2::postfailure');
$routes->post('/client2/postlifetime', 'Client2::postlifetime');
$routes->post('/client2/postoee', 'Client2::postoee');
$routes->post('/client2/postmaintenance', 'Client2::postmaintenance');
$routes->post('/client2/postkondisi', 'Client2::postkondisi');

$routes->get('/client3', 'Client3::index');
$routes->get('/client3/loop', 'Client3::loop');
$routes->post('/client3/create', 'Client3::create');
$routes->post('/client3/postblink', 'Client3::postblink');
$routes->post('/client3/postotherloss', 'Client3::postotherloss');
$routes->post('/client3/postminorstop', 'Client3::postminorstop');
$routes->post('/client3/postfailure', 'Client3::postfailure');
$routes->post('/client3/postlifetime', 'Client3::postlifetime');
$routes->post('/client3/postoee', 'Client3::postoee');
$routes->post('/client3/postmaintenance', 'Client3::postmaintenance');
$routes->post('/client3/postkondisi', 'Client3::postkondisi');

$routes->get('/general', 'General::index');
$routes->post('/general/postpressure', 'General::postpressure');

$routes->post('/general/poststat1', 'General::poststat1');
$routes->post('/general/poststat2', 'General::poststat2');
$routes->post('/general/poststat3', 'General::poststat3');
$routes->post('/general/poststat4', 'General::poststat4');

$routes->post('/general/postprocess', 'General::postprocess');
$routes->post('/general/postprocess2', 'General::postprocess2');
$routes->post('/general/postprocess3', 'General::postprocess3');
$routes->post('/general/postprocess4', 'General::postprocess4');


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
