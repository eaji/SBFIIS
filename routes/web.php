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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CR CRTE
Route::get('/renew/cr-crte/{id?}', 'CrCrteController@index')->name('renew.cr-crte');
Route::post('/renew/cr-crte', 'CrCrteController@store')->name('renew.cr-crte.store');
