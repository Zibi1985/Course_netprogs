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


Route::get('/','FrontendController@index')->name('home');
Route::get( trans('routes.object'),'FrontendController@object')->name('object');
Route::get( trans('routes.roomsearch'),'FrontendController@roomSearch')->name('roomSearch');
Route::get( trans('routes.room'),'FrontendController@room')->name('room');
Route::get( trans('routes.article'),'FrontendController@article')->name('article');
Route::get( trans('routes.person'), 'FrontendController@person')->name('person');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	Route::get('/','BackendController@index')->name('adminHome');
	Route::get( trans('routes.myobjects'),'BackendController@myobjects')->name('myObjects');
	Route::get( trans('routes.saveobject'),'BackendController@saveobject')->name('saveObject');
	Route::get( trans('routes.profile'),'BackendController@profile')->name('profile');
	Route::get( trans('routes.saveRoom'),'BackendController@saveRoom')->name('saveRoom');
	Route::get( trans('routes.cities'),'BackendController@cities')->name('cities.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
