<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
Route::get('/', function () {
    return view('welcome');
});


Route::get('logout', 'LoginController@logout');


Route::group(['middleware' => 'LoginMiddleware'], function(){   
	Route::get('login', 'LoginController@viewLogin');
	Route::post('loginPost', 'LoginController@loginPost');

	Route::get('masyarakat/register', 'LoginController@viewRegisterMasyarakat');
	Route::post('masyarakat/registerPost', 'LoginController@registerMasyarakatPost');
});


Route::group(['middleware' => 'MasyarakatMiddleware'],function(){
	Route::get('masyarakat/home', 'MasyarakatController@indexMasyarakat');

	Route::get('masyarakat/pengaduan/tambah', 'PengaduanController@tambah');
	Route::post('masyarakat/pengaduan', 'PengaduanController@store');

	Route::get('masyarakat/pengaduan/edit/{id_pengaduan}' ,'PengaduanController@edit');
	Route::patch('masyarakat/pengaduan/{id_pengaduan}', 'PengaduanController@update');

	Route::delete('masyarakat/pengaduan/hapus{id_pengaduan}', 'PengaduanController@destroy');
}); 


Route::group(['middleware' => 'AdminMiddleware'],function(){
	Route::get('admin/home', 'AdminController@indexAdmin');

	Route::get('admin/register', 'LoginController@viewRegisterAdmin');
	Route::post('admin/registerPost', 'LoginController@registerAdminPost');

	Route::get('admin/masyarakat', 'AdminController@viewMasyarakat');
	
	Route::get('admin/masyarakat/edit/{id_user}','AdminMasyarakatController@viewEditMasyarakat');
	Route::post('admin/masyarakat/edit{id_user}','AdminMasyarakatController@editMasyarakatPost');
	
	Route::get('admin/masyarakat/forgot/{id_user}','AdminMasyarakatController@viewForgotMasyarakat');
	Route::post('admin/masyarakat/forgot{id_user}','AdminMasyarakatController@forgotMasyarakatPost');
	
	Route::delete('admin/masyarakat/delete{id_user}','AdminMasyarakatController@destroyMasyarakatPost');



	Route::get('admin/pengaduan', 'AdminController@viewPengaduan');	
	Route::get('admin/pengaduan/cetak', 'AdminController@pengaduanCetakPost');
	Route::get('admin/pengaduan/selesai/cetak', 'AdminController@pengaduanSelesaiCetakPost');
	Route::get('admin/petugas/cetak', 'AdminController@petugasCetakPost');
	Route::get('admin/masyarakat/cetak', 'AdminController@masyarakatCetakPost');
	Route::get('admin/tanggapan/cetak', 'AdminController@tanggapanCetakPost');



	Route::get('admin/petugas', 'AdminController@viewPetugas');
	
	Route::get('admin/petugas/edit/{id_user}','AdminPetugasController@viewEditPetugas');
	Route::post('admin/petugas/edit{id_user}','AdminPetugasController@editPetugasPost');
	
	Route::get('admin/petugas/forgot/{id_user}','AdminPetugasController@viewForgotPetugas');
	Route::post('admin/petugas/forgot{id_user}','AdminPetugasController@forgotPetugasPost');
	
	Route::delete('admin/petugas/delete{id_user}','AdminPetugasController@destroyPetugasPost');

	


	Route::get('admin/tanggapan', 'AdminController@viewTanggapan');

	Route::get('admin/tanggapan/tambah/{id_pengaduan}','TanggapanController@viewTambahTanggapanAdmin');
	Route::post('admin/tanggapan/{id_pengaduan}','TanggapanController@store');

	Route::get('admin/tanggapan/edit/{id_pengaduan}','TanggapanController@viewEditTanggapanAdmin');
	Route::post('admin/tanggapan/editPost/{id_pengaduan}','TanggapanController@update');

	Route::delete('admin/tanggapan/hapus{id_tanggapan}', 'TanggapanController@destroy');

	Route::get('admin/tanggapan/proses/{id_pengaduan}','TanggapanController@prosesPost');


});


Route::group(['middleware' => 'PetugasMiddleware'],function(){
	Route::get('petugas/home', 'PetugasController@indexPetugas');

	Route::get('petugas/tanggapan','PetugasController@viewTanggapan');

	Route::get('petugas/tanggapan/tambah/{id_pengaduan}','TanggapanController@viewTambahTanggapanPetugas');
	Route::post('petugas/tanggapan/{id_pengaduan}','TanggapanController@store');

	Route::get('petugas/tanggapan/edit/{id_pengaduan}','TanggapanController@viewEditTanggapanPetugas');
	Route::post('petugas/tanggapan/editPost/{id_pengaduan}','TanggapanController@update');

	Route::delete('petugas/tanggapan/hapus{id_tanggapan}', 'TanggapanController@destroy');

	Route::get('petugas/tanggapan/proses/{id_pengaduan}','TanggapanController@prosesPost');
});	


