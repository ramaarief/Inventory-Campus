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

Auth::routes();

Route::get('signout', ['as' => 'auth.signout', 'uses' => 'Auth\loginController@signout']);

Route::group(['middleware' => 'auth'], function(){

	Route::group(['middleware' => 'admin.only'], function(){

		//Route tabel fakultas
		Route::get('fakultas', ['as' => 'fakultas.index', 'uses' => 'FakultasController@index']);

		Route::get('fakultas/create', ['as' => 'fakultas.create', 'uses' => 'FakultasController@create']);

		Route::post('fakultas', ['as' => 'fakultas.store', 'uses' => 'FakultasController@store']);

		Route::get('fakultas/edit/{id}', ['as' => 'fakultas.edit', 'uses' => 'FakultasController@edit']);

		Route::patch('fakultas/{id}', ['as' => 'fakultas.update', 'uses' => 'FakultasController@update']);

		Route::get('fakultas/{id}', ['as' => 'fakultas.delete', 'uses' => 'FakultasController@destroy']);
	});

	//Route tabel jurusan
	Route::get('jurusan', ['as' => 'jurusan.index', 'uses' => 'JurusanController@index']);

	Route::get('jurusan/create', ['as' => 'jurusan.create', 'uses' => 'JurusanController@create']);

	Route::post('jurusan', ['as' => 'jurusan.store', 'uses' => 'JurusanController@store']);

	Route::get('jurusan/edit/{id}', ['as' => 'jurusan.edit', 'uses' => 'JurusanController@edit']);

	Route::patch('jurusan/{id}', ['as' => 'jurusan.update', 'uses' => 'JurusanController@update']);

	Route::get('jurusan/{id}', ['as' => 'jurusan.delete', 'uses' => 'JurusanController@destroy']);

	Route::get('/export_excel_jurusan', "JurusanController@export_excel");

	//Route tabel ruangan
	Route::get('ruangan', ['as' => 'ruangan.index', 'uses' => 'RuanganController@index']);

	Route::get('ruangan/create', ['as' => 'ruangan.create', 'uses' => 'RuanganController@create']);

	Route::post('ruangan', ['as' => 'ruangan.store', 'uses' => 'RuanganController@store']);

	Route::get('ruangan/edit/{id}', ['as' => 'ruangan.edit', 'uses' => 'RuanganController@edit']);

	Route::patch('ruangan/{id}', ['as' => 'ruangan.update', 'uses' => 'RuanganController@update']);

	Route::get('ruangan/{id}', ['as' => 'ruangan.delete', 'uses' => 'RuanganController@destroy']);

	//Route tabel barang
	Route::get('barang', ['as' => 'barang.index', 'uses' => 'BarangController@index']);

	Route::get('barang/create', ['as' => 'barang.create', 'uses' => 'BarangController@create']);

	Route::post('barang', ['as' => 'barang.store', 'uses' => 'BarangController@store']);

	Route::get('barang/edit/{id}', ['as' => 'barang.edit', 'uses' => 'BarangController@edit']);

	Route::patch('barang/{id}', ['as' => 'barang.update', 'uses' => 'BarangController@update']);

	Route::get('barang/{id}', ['as' => 'barang.delete', 'uses' => 'BarangController@destroy']);

	Route::get('/export_excel_barang', "BarangController@export_excel");
});

Route::get('dashboard', function () {
	return view('dashboard.index');
})->name('dashboard');

Route::get('/', function () {
    return view('fakultas.index');
});
