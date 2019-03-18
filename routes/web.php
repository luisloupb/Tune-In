<?php
/*
Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
*/
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
    return view('userHome');
})->middleware('guest');


Route::post('userRegister','auth\RegisterController@register');
Route::post('login','auth\loginController@login')->name('login');
Route::post('logout','auth\loginController@logout')->name('logout');
Route::get('home','homeController@index');
Route::get('prueba', function () {
    return view('prueba');
});

