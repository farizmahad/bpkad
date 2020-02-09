<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This 
 will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Beranda';


$route['Admin'] = 'Admin/Login';
$route['admin'] = 'Admin/Login';

$route['visi-misi'] ='Front_Profile';
$route['tugas-dan-fungsi'] ='Front_Profile/tugas_fungsi';
$route['struktur-organisasi'] ='Front_Profile/struktur_organisasi';

$route['informasi-keuangan'] ='Front_Profile/informasi_keuangan';
$route['informasi-aset'] ='Front_Profile/informasi_aset';
$route['diagram'] ='Front_Profile/diagram';
$route['sop'] ='Front_Publikasi/sop';

$route['trend-apbd'] ='Front_Agenda/tren';
$route['laporan'] ='Front_Publikasi';


$route['berita'] ='Front_Publikasi/berita';


$route['penyusunan-apbd-murni'] ='Front_Agenda';


$route['perubahan_agenda'] ='Front_Agenda/perubahan_apbd';

$route['timeline'] ='Front_Agenda/timeline';


$route['sop'] ='Front_Publikasi/sop';
$route['agenda-kami'] ='Agenda';
$route['news'] ='Front_Berita';
$route['standar-pelayanan'] ='Front_Pelayanan/standar_pelayanan';
$route['standar-pengaduan-masyarakat'] ='Front_Pelayanan/standar_pengaduan_masyarakat';

$route['daftar-pelayanan'] ='Front_Pelayanan/daftar_pelayanan';

$route['peraturan-pemerintah-pusat'] ='Front_Pelayanan/pemerintah_pusat';



$route['peraturan-pemerintah-daerah'] ='Front_Pelayanan/pemerintah_daerah';



$route['channel-bpkad'] ='Front_Publikasi/video';
$route['laporan-apbd-cimahi'] ='Front_Publikasi/apbd_cimahi';



$route['detail-pelayanan'] ='Front_Pelayanan/standar_detail/';
$route['detail-laporan'] ='Detail_Laporan';
$route['visual'] ='Front_publikasi/visualisasi/';

$route['kontak-kami'] ='Front_kontak';


$route['admin/user'] = 'admin/Auth';
$route['admin/user'] = 'admin/Auth/index';
$route['admin/user/create_user'] = 'admin/Auth/create_user';
$route['admin/user/create_group'] = 'admin/Auth/create_group';
$route['admin/user/edit_group/(:any)'] = 'admin/auth/edit_group/{id}';
$route['admin/user/edit_user/(:any)'] = 'admin/auth/edit_group/{id}';

$route['detail-berita/(:num)'] = 'Front_publikasi/open_berita/$1';

$route['open-pelayanan/(:num)'] = 'Front_pelayanan/standar_detail/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['akunpedia'] ='Hibah';

$route['akunpedia/lampiran1'] ='Hibah/lampiran1';
$route['akunpedia/lampiran21'] ='Hibah/lampiran_2_1';
$route['akunpedia/lampiran22'] ='Hibah/lampiran_2_2';
$route['akunpedia/lampiran23'] ='Hibah/lampiran_2_3';
$route['akunpedia/lampiran24'] ='Hibah/lampiran_2_4';
$route['akunpedia/lampiran25'] ='Hibah/lampiran_2_5';
$route['akunpedia/lampiran26'] ='Hibah/lampiran_2_6';
$route['akunpedia/lampiran27'] ='Hibah/lampiran_2_7';
$route['akunpedia/lampiran28'] ='Hibah/lampiran_2_8';
$route['akunpedia/lampiran29'] ='Hibah/lampiran_2_9';
$route['akunpedia/lampiran210'] ='Hibah/lampiran_2_10';
$route['akunpedia/lampiran211'] ='Hibah/lampiran_2_11';
$route['akunpedia/lampiran212'] ='Hibah/lampiran_2_12';
$route['akunpedia/lampiran213'] ='Hibah/lampiran_2_13';
$route['akunpedia/lampiran214'] ='Hibah/lampiran_2_14';
$route['akunpedia/lampiran215'] ='Hibah/lampiran_2_15';
$route['akunpedia/lampiran216'] ='Hibah/lampiran_2_16';
$route['akunpedia/lampiran217'] ='Hibah/lampiran_2_17';
$route['akunpedia/lampiran218'] ='Hibah/lampiran_2_18';
$route['akunpedia/lampiran219'] ='Hibah/lampiran_2_19';
$route['akunpedia/lampiran220'] ='Hibah/lampiran_2_20';
$route['akunpedia/lampiran221'] ='Hibah/lampiran_2_21';

//backemnd
$route['dashboard'] ='Dashboard';