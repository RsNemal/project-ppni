<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('profile', function($routes) {
    $routes->get('visi-misi', 'Profile::visimisi');
    $routes->get('struktur-organisasi', 'Profile::strukturOrganisasi');
    $routes->get('sejarah', 'Profile::sejarah');
});



$routes->group('pelayanan', function($routes) {
    $routes->get('pengurusan-kta', 'Pelayanan::pengurusan_ka');
    $routes->get('pengurusan-sipp', 'Pelayanan::pengurusan_sipp');
    $routes->get('pengurusan-skp', 'Pelayanan::pengurusan_skp');
});

$routes->group('dokumentasi', function($routes) {
    $routes->get('dokumentasi', 'Dokumentasi::dokumentasi');

});




