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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('workshop');
});

Route::post('/register', 'RegisterController@register');
Route::post('/verify', 'RegisterController@verify');

Route::get('/admin', function () {
    return view('AdminPanel.login');
});
Route::post('admin/login', 'Auth\LoginController@authenticate');
Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/admin/reset', function () {
	    return view('AdminPanel.reset');
	});
	Route::post('admin/reset', 'AdminController@reset');
	Route::get('/admin/home', 'AdminController@home');
	Route::get('/admin/print', 'AdminController@print');
});

Route::get('{any?}', function() {
    return Redirect::to('http://hackncs.com');
});
