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
$routes->setDefaultController('Home');
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
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/login', 'Login::index');
$routes->get('/visitor-information', 'VisitorInformation::index');
$routes->get('/employee-information', 'EmployeeInformation::index');
$routes->post('/add-employee', 'EmployeeInformation::addEmployee');
$routes->get('/patient-information', 'PatientInformation::index');
$routes->get('/compose-message', 'ComposeMessage::index');
$routes->get('/manage-locations', 'Locations::index');
$routes->get('/manage-locations/delete/(:num)', 'Locations::deleteLocation/$1');
$routes->get('/manage-locations/view/(:num)', 'Locations::viewLocation/$1');
$routes->post('/add-location', 'Locations::addLocation');
$routes->get('/activity-tracker', 'ActivityTracker::index');
$routes->post('/check-location', 'Locations::checkLocation');

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
