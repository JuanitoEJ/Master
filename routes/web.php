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

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', 'FrontendController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('carrousels','CarrouselController');
Route::resource('abouts','AboutController');
Route::resource('pictures','PictureController');
Route::resource('specialities','SpecialtyController');
Route::resource('calltacs','CalltacController');
Route::resource('clients','ClientController');
Route::resource('testimonies','TestimonyController');
Route::resource('teams','TeamController');
