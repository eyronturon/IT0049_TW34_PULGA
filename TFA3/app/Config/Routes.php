<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('customers/new', 'Customers::newCustomer');
$routes->post('customers', 'Customers::create');
$routes->get('customers/(:num)', 'Customers::show/$1');
$routes->get('customers/(:num)/edit', 'Customers::editCustomer/$1');
$routes->post('customers/(:num)/delete', 'Customers::delete/$1');
$routes->get('users', 'Users::index');
$routes->post('customers/(:num)', 'Customers::update/$1');
$routes->get('users/new', 'Users::newUser');
$routes->post('users', 'Users::create');
$routes->get('users/(:num)', 'Users::show/$1');
$routes->get('users/(:num)/edit', 'Users::editUser/$1');
$routes->post('users/(:num)', 'Users::update/$1');
$routes->post('users/(:num)/delete', 'Users::delete/$1');