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
Route::get('/profile', 'HomeController@profile');
Route::get('/download', 'HomeController@download');
Route::get('/recommend', 'HomeController@recommend');

Route::get('/', function () {
    return view('login');
})->middleware('guest');

Route::post('userRegister','auth\RegisterController@register');
Route::post('login','auth\loginController@login')->name('login');
Route::get('logout','auth\loginController@logout')->name('logout');
// Route::post('postMetadata','LocalResearchController@postMetadata')->name('postMetadata');
Route::post('registerGoogle','auth\RegisterController@registerGoogle')->name('registerGoogle');
Route::post('loginGoogle','auth\loginController@loginGoogle')->name('loginGoogle');
Route::get('home','homeController@index')->name('home');
Route::get('getSongs','ratingController@getSongs')->name('getSongs');
// Route::get('getGenres','LocalResearchController@getGenres')->name('getGenres');
Route::get('loginView',function(){
	return redirect('/');
});
Route::get('localResearch', "LocalResearchController@localResearch")->name('localResearch');
Route::get('rating', function () {
    return view('rating');
});
Route::get('getGenres','LocalResearchController@getGenres')->name('getGenres');
Route::post('postMetadata','LocalResearchController@postMetadata')->name('postMetadata');


Route::get('getListRecommended','PredictionController@getListRecommended')->name('getListRecommended');
Route::get('fitSlope','PredictionController@FitSlopeone')->name('fit');


Route::get('verUsuarios','testController@verUsuarios')->name('verUsuarios');

