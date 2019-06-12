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

Auth::routes();



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Cabañas_y_Hotel', function () {
    return "Pero No llore, chupelo";

});

Route::get('foo', function () {
    return 'Hello World';
});


Route::get('test', function () {
    return view('test.index');
});