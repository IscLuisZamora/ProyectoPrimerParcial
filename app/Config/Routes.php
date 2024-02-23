<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Home/getFilmsAjax', 'Home::getFilmsAjax');
$routes->get('Home/getFilmsDetails', 'Home::getFilmsDetails');
$routes->post('Home/insertDataFilms', 'Home::insertDataFilms');
// $routes->post('Home/insertSaleFilms', 'Home::insertSaleFilms');
