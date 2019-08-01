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

Route::get('admin/login', 'Auth\LoginController@getLoginAdmin')->name('admin.getLogin');
Route::post('admin/login', 'Auth\LoginController@login')->name('admin.postLogin');

Route::get('admin/first-login', 'FirstLoginController@getFirstLoginAdmin')->name('admin.getFirstLogin');
Route::post('admin/first-login', 'FirstLoginController@postFirstLogin')->name('admin.postFirstLogin');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'checkFirstLogin']], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
});
