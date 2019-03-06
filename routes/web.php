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

Route::post('/userRegister','auth\RegisterController@register');
Route::post('/login','auth\loginController@login');

//Route::post('/user',"registerController");


/*Route::get('/add',"usersController@vista");
Route::post('/add',"usersController@create");
Route::post('/ingreso',"usersController@validar");*/
