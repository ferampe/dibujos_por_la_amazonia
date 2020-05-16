<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "HomeController@index");
Route::get('page/obra/{numero}', 'HomeController@obra');
Route::get('page/info', 'HomeController@info')->name('info');

Route::post('pagar', 'HomeController@pagar')->name('pagar');

Auth::routes();




Route::middleware(['auth'])->group(function () {
    
	Route::get('admin', 'DashboardController@index')->name('dashboard');
    Route::resource('obra', 'ObraController');
	Route::resource('donante', 'DonanteController');
	Route::post('sortear', 'DonanteController@sortear')->name('sortear');
});





Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/thumbnail', 'ThumbnailController');
Route::resource('user', 'UserController');

Route::get('/imagen', function(){
	return view('imagen');
});
