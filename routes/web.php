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

use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    
	Route::get('admin', 'DashboardController@index')->name('dashboard');
    Route::resource('obra', 'ObraController');
	Route::resource('donante', 'DonanteController');
	Route::post('sortear', 'DonanteController@sortear')->name('sortear');
});


Route::get('/', "HomeController@index");
Route::get('/en', "HomeController@indexen");

Route::get('page/info', 'HomeController@info')->name('info');
Route::get('{lang}/page/info', 'HomeController@info')->name('info-en');

Route::get('page/donar', 'HomeController@donar')->name('donar');
Route::get('{en}/page/donar', 'HomeController@donar')->name('donar-en');

Route::get('page/obra', 'HomeController@obra')->name('page-obra');
Route::get('{lang}/page/obra', 'HomeController@obra')->name('obra-en');


Route::get('page/gracias', function(){
	$lang = null;
	return view('frontend.gracias', compact('lang'));
});

Route::get('{en}/page/gracias', function(){
	$lang = 'en';
	return view('frontend.gracias-en', compact('lang'));
});


Route::post('registrar-donante', 'DonanteController@registrar');
Route::post('webhook', 'DashboardController@webhook');

Auth::routes();










Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('/thumbnail', 'ThumbnailController');
// Route::resource('user', 'UserController');

// Route::get('/imagen', function(){
// 	return view('imagen');
// });
