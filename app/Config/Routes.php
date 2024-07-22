<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product/category/(:segment)', 'Home::category/$1');
$routes->get('/product/(:segment)', 'Home::product/$1');
$routes->setAutoRoute(true);
