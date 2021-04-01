<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->get('/', 'Home::index');
$routes->get('admin/(:segment)', 'Admin::view/$1');
$routes->get('ticket/(:segment)', 'Home::view/$1');
$routes->get('admin/create/(:segment)', 'Admin::createAdmin/$1');

$routes->match(
  ['get', 'post'], 
  'create_ticket',
  'Admin::createTicket'
);

$routes->match(
  ['get', 'post'], 
  'subscribe',
  'Admin::subscribe'
);

$routes->match(
  ['get', 'post'], 
  'updatesub',
  'Admin::updateSubscription'
);

$routes->match(
  ['get', 'post'], 
  'deletesub',
  'Admin::delSubscription'
);
### AUTH ROUTES

# Register
$routes->match(
  ['get', 'post'], 
  'attemptRegister',
  'Authenticator::attemptRegister'
);
$routes->get('register', 'Authenticator::register');

#login
$routes->match(
  ['get', 'post'], 
  'attemptLogin',
  'Authenticator::attemptLogin'
); 

$routes->match(
  ['get', 'post'], 
  'logout',
  'Authenticator::logout'
);
$routes->get('login', 'Authenticator::login');


#forgot
$routes->match(
  ['get', 'post'], 
  'attemptForgot',
  'Authenticator::attemptForgot'
);
$routes->get('forgot', 'Authenticator::forgotPassword');
$routes->get('reset-password', 'Authenticator::resetPassword');

# Activate account 
$routes->get('activate-account', 'Authenticator::activateAccount');
$routes->match(
  ['get', 'post'], 
  'resend-activate-account',
  'Authenticator::resendActivateAccount'
);


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
