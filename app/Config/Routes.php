<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// akses front
$routes->get('/', 'Home::index');
$routes->get('/home2', 'Home::home2');

// donasi & transaksi
$routes->get('/donasi', 'Donasi::index');
$routes->get('/donasi/detail/(:segment)', 'Donasi::detail/$1');
$routes->get('/transaksi/register/(:segment)', 'Transaksi::register/$1');
$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/midtrans/token', 'Midtrans::token');
$routes->get('/transaksi/payment/(:segment)', 'Transaksi::payment/$1');
// $routes->get('/transaksi/complete/(:segment)', 'Transaksi::complete/$1');

$routes->post('/transaksi/getSnapToken', 'Transaksi::getSnapToken');
$routes->post('/transaksi/complete', 'Transaksi::complete');
$routes->get('/transaksi/success', 'Transaksi::success');

$routes->post('/midtrans/token', 'Midtrans::token');
$routes->post('/transaksi/create', 'Transaksi::create');

// artikel
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/detail/(:segment)', 'Artikel::detail/$1');

// profil
$routes->get('/profil', 'Profil::index');

// search
$routes->get('/search', 'Search::index');

// lapor front
$routes->get('/laporan', 'Laporan::index');
$routes->get('/laporan/laportransaksi/(:any)', 'Laporan::LaporTransaksi/$1');
$routes->get('/laporan/laporpengeluaran/(:any)', 'Laporan::LaporPengeluaran/$1');
$routes->get('/laporan/lapordonasi/(:any)', 'Laporan::LaporDonasi/$1');
$routes->get('/laporan/laporfull/(:any)', 'Laporan::LaporFull/$1');

// admin dahboard
$routes->get('/admadmin', 'AdmAdmin::index');

// admin spanduk
$routes->get('/admspanduk', 'AdmSpanduk::index');
$routes->get('/admspanduk/addspanduk', 'AdmSpanduk::addSpanduk');
$routes->get('/admspanduk/editspanduk/(:num)', 'AdmSpanduk::editSpanduk/$1');
$routes->get('/admspanduk/deletespanduk/(:num)', 'AdmSpanduk::deleteSpanduk/$1');

$routes->post('/admspanduk/savespanduk', 'AdmSpanduk::saveSpanduk');
$routes->post('/admspanduk/updatespanduk/(:num)', 'AdmSpanduk::updateSpanduk/$1');

// admin donasi
$routes->get('/admdonasi', 'AdmDonasi::index');
$routes->get('/admdonasi/adddonasi', 'AdmDonasi::addDonasi');
$routes->get('/admdonasi/editdonasi/(:num)', 'AdmDonasi::editDonasi/$1');
$routes->get('/admdonasi/deletedonasi/(:num)', 'AdmDonasi::deleteDonasi/$1');

$routes->post('/admdonasi/savedonasi', 'AdmDonasi::saveDonasi');
$routes->post('/admdonasi/updatedonasi/(:num)', 'AdmDonasi::updateDonasi/$1');

// admin artikel
$routes->get('/admartikel', 'AdmArtikel::index');
$routes->get('/admartikel/addartikel', 'AdmArtikel::addArtikel');
$routes->get('/admartikel/editartikel/(:num)', 'AdmArtikel::editArtikel/$1');
$routes->get('/admartikel/deleteartikel/(:num)', 'AdmArtikel::deleteArtikel/$1');

$routes->post('/admartikel/saveartikel', 'AdmArtikel::saveArtikel');
$routes->post('/admartikel/updateartikel/(:num)', 'AdmArtikel::updateArtikel/$1');

//admin pengeluaran
$routes->get('/admpengeluaran', 'AdmPengeluaran::index');
$routes->get('/admpengeluaran/addpengeluaran', 'AdmPengeluaran::addPengeluaran');
$routes->get('/admpengeluaran/editpengeluaran/(:num)', 'AdmPengeluaran::editPengeluaran/$1');
$routes->get('/admpengeluaran/deletepengeluaran/(:num)', 'AdmPengeluaran::deletePengeluaran/$1');

$routes->post('/admpengeluaran/savepengeluaran', 'AdmPengeluaran::savePengeluaran');
$routes->post('/admpengeluaran/updatepengeluaran/(:num)', 'AdmPengeluaran::updatePengeluaran/$1');

//admin transaksi
$routes->get('/admtransaksi', 'AdmTransaksi::index');
$routes->get('/admtransaksi/addtransaksi', 'AdmTransaksi::addTransaksi');
$routes->get('/admtransaksi/edittransaksi/(:num)', 'AdmTransaksi::editTransaksi/$1');
$routes->get('/admtransaksi/deletetransaksi/(:num)', 'AdmTransaksi::deleteTransaksi/$1');

$routes->post('/admtransaksi/savetransaksi', 'AdmTransaksi::saveTransaksi');
$routes->post('/admtransaksi/updatetransaksi/(:num)', 'AdmTransaksi::updateTransaksi/$1');

//admin laporan
$routes->get('/admlaporan', 'AdmLaporan::index');
$routes->get('/admlaporan/laporanfull/(:any)', 'AdmLaporan::laporanFull/$1');
$routes->get('/admlaporan/laporantransaksi/(:any)', 'AdmLaporan::laporanTransaksi/$1');
$routes->get('/admlaporan/laporandonasi/(:any)', 'AdmLaporan::laporanDonasi/$1');
$routes->get('/admlaporan/laporanpengeluaran/(:any)', 'AdmLaporan::laporanPengeluaran/$1');
$routes->get('/admlaporan/laporandonatur/(:any)', 'AdmLaporan::laporanDonatur/$1');
