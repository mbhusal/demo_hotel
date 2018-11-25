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

Route::get('/', 'UserController@home')->name('home');

Route::post('bookedrooms','UserController@bookedrooms')->name('bookedrooms');

Route::get('bookroom/{id}','UserController@bookroom')->name('bookroom');

Route::get('roomtype/{data}', 'UserController@selectedtype')->name('roomtype');



Route::group(['middleware' => ['web']], function () {

	Route::get('owners', 'OwnersController@dashboard')->name('dashboard');

	Route::get('rooms', 'OwnersController@rooms')->name('rooms');

	Route::get('bookedrooms', 'OwnersController@bookedrooms')->name('bookedrooms');

	Route::get('addrooms', 'OwnersController@addrooms')->name('addrooms');

	Route::post('addrooms', 'OwnersController@storerooms')->name('storerooms');

	Route::get('viewrooms/{id}', 'OwnersController@viewrooms')->name('viewrooms');

	Route::get('editrooms/{id}', 'OwnersController@editrooms')->name('editrooms');

	Route::get('deleterooms/{id}', 'OwnersController@deleterooms')->name('deleterooms');

	Route::post('updaterooms','OwnersController@updaterooms')->name('updaterooms');

	Route::get('freerooms/{id}', 'OwnersController@freerooms')->name('freerooms');

	Route::get('ourcostumer', 'OwnersController@ourcostumer')->name('ourcostumer');


});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
