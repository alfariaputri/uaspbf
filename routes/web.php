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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin')->name('login.post');
Route::post('/logout','AuthController@logout')->name('logout');
Route::get('/ajax/get_telat/{id}/{tanggal_kembali}','Ajax@get_telat');

Route::group (['middleware'=>['auth', 'ceklevel:Admin']],function(){
	//Route::get('/Dashboard','DashboardController@index');
	//Route::get('/Datauser','DatauserController@index');
	Route::post('/Datauser/create','DatauserController@create')->name('user.create');
	Route::get('/Datauser/{id}/edit','DatauserController@edit')->name('user.edit');
	Route::post('/Datauser/{id}/update','DatauserController@update')->name('user.update');
	Route::get('/Datauser/{id}/delete','DatauserController@delete')->name('user.delete');


	//Route::get('/datamobil','datamobilController@index');
	Route::post('/datamobil/create','datamobilController@create')->name('mobil.create');
	Route::get('/datamobil/{id}/edit','datamobilController@edit')->name('mobil.edit');
	Route::post('/datamobil/{id}/update','datamobilController@update')->name('mobil.update');
	Route::get('/datamobil/{id}/delete','datamobilController@delete')->name('mobil.delete');

	Route::post('/datasewa/create','datasewacontroller@create')->name('sewa.create');
	Route::get('/datasewa/{id}/edit','datasewacontroller@edit')->name('sewa.edit');
	Route::post('/datasewa/{id}/update','datasewacontroller@update')->name('sewa.update');
	Route::get('/datasewa/{id}/delete','datasewacontroller@delete')->name('sewa.delete');

	Route::post('/datakembali/create','datakembalicontroller@create')->name('kembali.create');
	Route::get('/datakembali/{id}/edit','datakembalicontroller@edit')->name('kembali.edit');
	Route::post('/datakembali/{id}/update','datakembalicontroller@update')->name('kembali.update');
	Route::get('/datakembali/{id}/delete','datakembalicontroller@delete')->name('kembali.delete');

});

Route ::group(['middleware' =>['auth', 'ceklevel:Admin,User']],function() {
	Route::get('/Dashboard','DashboardController@index')->name('dashboard.index');
	Route::get('/Datauser','DatauserController@index')->name('user.index');
	Route::get('/datamobil','datamobilController@index')->name('mobil.index');
	Route::get('/datasewa','datasewacontroller@index')->name('sewa.index');
	Route::get('/datakembali','datakembalicontroller@index')->name('kembali.index');

});
