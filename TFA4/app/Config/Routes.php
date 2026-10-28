<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::authenticate');
$routes->get('logout', 'Auth::logout');
$routes->get('customers', 'Customers::index', ['filter' => 'auth']);
$routes->get('customers/new', 'Customers::newCustomer', ['filter' => 'auth']);
$routes->post('customers', 'Customers::create', ['filter' => 'auth']);
$routes->get('customers/(:num)', 'Customers::show/$1', ['filter' => 'auth']);
$routes->get('customers/(:num)/edit', 'Customers::editCustomer/$1', ['filter' => 'auth']);
$routes->post('customers/(:num)/delete', 'Customers::delete/$1', ['filter' => 'auth']);
$routes->post('customers/(:num)', 'Customers::update/$1', ['filter' => 'auth']);
$routes->get('users', 'Users::index', ['filter' => 'auth']);
$routes->get('users/new', 'Users::newUser', ['filter' => 'auth']);
$routes->post('users', 'Users::create', ['filter' => 'auth']);
$routes->get('users/(:num)', 'Users::show/$1', ['filter' => 'auth']);
$routes->get('users/(:num)/edit', 'Users::editUser/$1', ['filter' => 'auth']);
$routes->post('users/(:num)', 'Users::update/$1', ['filter' => 'auth']);
$routes->post('users/(:num)/delete', 'Users::delete/$1', ['filter' => 'auth']);