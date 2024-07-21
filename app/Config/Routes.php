<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/category/(:segment)', 'Home::products/$1');
$routes->setAutoRoute(true);
