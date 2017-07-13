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
Route::post('/home/delete/{id}','HomeController@delete');
Route::post('/home/add','HomeController@add');
Route::post('/home/edit/{id}','HomeController@edit');
Route::post('/home/change/{id}','HomeController@change');
Route::get('/dashboards','HomeController@show_subject_group');

Route::get('/dashboards/{id}','HomeController@show_each_group');

<<<<<<< HEAD
Route::get('dashboards/follow/{id}','HomeController@follow');

Route::get('/observed','HomeController@user_observed');

=======
Route::get('dashboards/fallow/{id}','HomeController@fallow');
>>>>>>> 66aa46348018952cea5c9b96faebff55806b29d5

Route::get('/discover','DiscoverController@index');