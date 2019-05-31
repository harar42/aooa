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

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::POST('/message', 'HomeController@mail')->name('message');


Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('isadmin');


Route::get('/partners/ville/{ville}', 'HomeController@ville')->name('ville');
Route::get('/geolocation/{latitude}/{longitude}', 'HomeController@geolocation')->name('geolocation');
Route::get('/deals/create/{partner_id}', 'DealController@create')->name('create');

Route::resource('categories', 'CategoryController');

Route::resource('partners', 'PartnerController');

Route::resource('deals', 'DealController');
