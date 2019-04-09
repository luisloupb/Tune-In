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

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');

Route::get('/', function () {
    return view('login');
})->middleware('guest');

Route::post('userRegister','auth\RegisterController@register');
Route::post('login','auth\loginController@login')->name('login');
Route::get('logout','auth\loginController@logout')->name('logout');
Route::post('postMetadata','testController@postMetadata')->name('postMetadata');
Route::post('registerGoogle','auth\RegisterController@registerGoogle')->name('registerGoogle');
Route::post('loginGoogle','auth\loginController@loginGoogle')->name('loginGoogle');
Route::get('home','homeController@index')->name('home');
Route::get('getGenres','testController@getGenres')->name('getGenres');
Route::get('loginView',function(){
	return redirect('/');
});
Route::get('prueba', function () {
    return view('prueba');
});

