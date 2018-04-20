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

Route::group(['prefix'=>'admin'], function(){
	Route::get('/adminHome','BackendController@index')->name('adminHome');
	Route::get('/myObjects','BackendController@myobjects')->name('myObjects');
	Route::get('/saveObject','BackendController@saveobject')->name('saveObject');
	Route::get('/profile','BackendController@profile')->name('profile');
	Route::get('/saveRoom','BackendController@saveRoom')->name('saveRoom');
	Route::get('/cities','BackendController@cities')->name('cities.index');
});
