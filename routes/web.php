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

/*
|--------------------------------------------------------------------------
| Account Officer Routes
|--------------------------------------------------------------------------
|
| Here are the registered account officer routes
|
*/

/* AO Auth Routes
Route::get('/ao/login', 'AO\Auth\LoginController@showLoginForm')->name('ao.login');
Route::get('/ao/register', 'AO\Auth\LoginController@showRegisterForm')->name('ao.register');

Route::get('/ao', function() {
  return redirect()->route('ao.dashboard');
});
Route::get('/ao/dashboard', 'AO\DashboardController@index')->name('ao.dashboard');
*/

Route::group(['prefix' => 'ao'], function () {
  Route::get('/', function () {
    return redirect('/ao/dashboard');
  });

  Route::get('/dashboard', function () {
    return view('ao.dashboard');
  });

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('ao.login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('ao.logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
