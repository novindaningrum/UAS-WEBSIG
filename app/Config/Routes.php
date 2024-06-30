<?php
namespace Config;
$routes = Services::routes();
$routes->setDefaultNamespace('App\Controllers');
// controller default yang dipanggil
// pertama kali saat aplikasi dijalankan
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// routing URL Controller Dashboard
$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('getdata', 'Dashboard::getdata');
// routing URL Controller Kecamatan
$routes->get('kecamatan','Kecamatan::index');
$routes->get('tambahkecamatan','Kecamatan::tambah');
$routes->get('editkecamatan/(:num)','Kecamatan::edit/$1');
$routes->get('hapuskecamatan/(:num)','Kecamatan::hapus/$1');
$routes->post('simpankecamatan','Kecamatan::simpan');
$routes->post('updatekecamatan','Kecamatan::update');
// routing URL Controller Pondok
$routes->get('Pondok','Pondok::index');
$routes->get('tambahpondok','Pondok::tambah');
$routes->get('editpondok/(:num)','Pondok::edit/$1');
$routes->get('hapuspondok/(:num)','Pondok::hapus/$1');
$routes->post('simpan','Pondok::simpan');
$routes->post('updatepondok','Pondok::update');
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
 require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
?>