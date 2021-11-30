<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

$routes->get('/', 'User::index');
$routes->get('/jadwaljaga/(:any)', 'User::dokterjaga/$1');
$routes->get('/jadwaljuaga', 'User::dokterjaga');
$routes->get('/sejarah', 'User::sejarah');
$routes->get('/visi', 'User::visi');
$routes->get('/kontak', 'User::kontak');

$routes->get('/dashboard', 'Page::index', ['filter' => 'usersAuth']);
$routes->get('/delete/(:num)', 'Page::delete/$1', ['filter' => 'usersAuth']);
//pasien umum
$routes->get('/umum', 'PasienUmum::index', ['filter' => 'usersAuth']);
$routes->get('/umum/(:num)', 'PasienUmum::detail/$1', ['filter' => 'usersAuth']);
$routes->get('/umum/hapus/(:num)', 'PasienUmum::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/umum/edit/(:num)', 'PasienUmum::edit/$1', ['filter' => 'usersAuth']);

//pasien BPJS
$routes->get('/bpjs', 'PasienBpjs::index', ['filter' => 'usersAuth']);
$routes->get('/bpjs/hapus/(:num)', 'PasienBpjs::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/bpjs/(:num)', 'PasienBpjs::detail/$1', ['filter' => 'usersAuth']);
$routes->get('/bpjs/edit/(:num)', 'PasienBpjs::edit/$1', ['filter' => 'usersAuth']);


//Dokter Jaga
$routes->get('/dokter', 'DokterJaga::index', ['filter' => 'usersAuth']);
$routes->get('/dokter/delete/(:num)', 'DokterJaga::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/dokter/edit/(:num)', 'DokterJaga::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/dokter/create', 'DokterJaga::create', ['filter' => 'usersAuth']);

//spesialis
$routes->get('/poli', 'Spesialis::index', ['filter' => 'usersAuth']);
$routes->get('/poli/hapus/(:num)', 'Spesialis::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/poli/edit/(:num)', 'Spesialis::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/poli/create', 'Spesialis::create', ['filter' => 'usersAuth']);

//riwayat penyakit
$routes->get('/riwayatumum', 'RiwayatPasien::index', ['filter' => 'usersAuth']);
$routes->get('/riwayatumum/hapus/(:num)', 'RiwayatPasien::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/riwayatumum/edit/(:num)', 'RiwayatPasien::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/riwayatumum/create', 'RiwayatPasien::create', ['filter' => 'usersAuth']);

//riwayat pasien bpjs
$routes->get('/riwayatbpjs', 'RiwayatPasienBpjs::index', ['filter' => 'usersAuth']);
$routes->get('/riwayatbpjs/hapus/(:num)', 'RiwayatPasienBpjs::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/riwayatbpjs/edit/(:num)', 'RiwayatPasienBpjs::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/riwayatbpjs/create', 'RiwayatPasienBpjs::create', ['filter' => 'usersAuth']);

//Jadwal Jaga
$routes->get('/jadwal', 'Jadwal::index', ['filter' => 'usersAuth']);
$routes->get('/jadwal/hapus/(:num)', 'Jadwal::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/jadwal/edit/(:num)', 'Jadwal::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/jadwal/create', 'Jadwal::create', ['filter' => 'usersAuth']);

//register
$routes->get('/register', 'Register::index', ['filter' => 'usersAuth']);
$routes->post('/register/process', 'Register::process', ['filter' => 'usersAuth']);

//login

$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::process');
$routes->get('/logout', 'Login::logout');


//pasien baru
$routes->get('/pasienbaru', 'Form::index');

//pasien Lama
$routes->get('/pasienlama', 'FormLama::create');
$routes->get('/printpasienlama/(:any)', 'FormLama::printpdf/$1');

//pasien Umum
$routes->get('/pasienbaru/pasinumum', 'Form::create');
$routes->get('/pasienbaru/pasienbpjs', 'FormBpjs::create');

//printpdf
$routes->get('/print', 'Form::printpdf');
$routes->get('/printbpjs', 'FormBpjs::printpdf');
$routes->get('/printpdf', 'FormBpjs::printpdf');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
