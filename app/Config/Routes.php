<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/visi-misi', 'Profile::visimisi');
$routes->get('/strukturOrganisasi', 'Profile::strukturOrganisasi');
$routes->get('/sejarah', 'Profile::sejarah');