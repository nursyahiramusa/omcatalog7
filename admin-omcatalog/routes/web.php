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

Route::group(['middleware'=>'auth'], function(){
	Route::get('/keluar', 'Admin_controller@logout');

	Route::get('/', 'Admin_controller@index');

	Route::get('/base64', function(){
		$nama = \DB::table('base64')->value('name');
		$hasil = base64_decode($nama);
		dd($hasil);
	});

	// Master materials ================================================================
	Route::get('/materials', 'materials_controller@index');
	Route::get('/materials/habis', 'materials_controller@habis');

	// create materials
	Route::get('/materials/create', 'materials_controller@create');

	// store materials baru
	Route::post('/materials/store', 'materials_controller@store');

	// edit materials
	Route::get('/materials/edit/{materials_id}', 'materials_controller@edit');

	// update materials
	Route::post('/materials/update/{materials_id}', 'materials_controller@update');

	// Hapus materials
	Route::get('/delete/materials/{materials_id}', 'materials_controller@delete');

	// Show materials
	Route::get('/materials/show/{materials_id}', 'materials_controller@show');
	// materials Habis
	Route::get('/materials/habis', 'materials_controller@habis');
	// ===============================================================================

	// Master categories materials ============================================================
	Route::get('/categories', 'categories_controller@index');
	// Edit categories
	Route::get('/categories/edit/{categories_id}', 'categories_controller@edit');
	// Update categories
	Route::post('/categories/update/{id}', 'categories_controller@update');
	// Hapus categories
	Route::get('/categories/delete/{id}', 'categories_controller@delete');
	// categories Create
	Route::get('/categories/create', 'categories_controller@create');
	// categories Store
	Route::post('/categories/store', 'categories_controller@store');

	// =============== confirmations PEMBAYARAN ===========================================================
	Route::get('/confirmations', 'confirmations_controller@index');
	// Detail confirmations
	Route::get('/confirmations/detail/{id}', 'confirmations_controller@detail');
	// Terima confirmations
	Route::get('/confirmations/terima/{orders_id}', 'confirmations_controller@terima');
	// Tolak confirmations
	Route::get('/confirmations/tolak/{orders_id}', 'confirmations_controller@tolak');

	// ========================= LIST orders =================================
	Route::get('/orders', 'orders_controller@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
