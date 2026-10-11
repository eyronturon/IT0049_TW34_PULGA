<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Tasks::index');
$routes->get('tasks', 'Tasks::all');
$routes->get('profile', 'Pages::profile');
$routes->get('about', 'Pages::about');