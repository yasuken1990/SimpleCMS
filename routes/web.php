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


Route::get('/admin/', 'Admin\PageController@index');
Route::get('/admin/page/{name}', 'Admin\PageController@show');
Route::put('/admin/page/{name}', 'Admin\PageController@update');



Route::Resource('/{name}', 'PageController');




