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

Route::get('/file', function () {
    return view('file');
});

Route::get('/indice', "Web\IndexController")->name("indice");

Route::get('/contacto/aa/bbb/', "Web\ContactoController")->name("contactos");

Route::post('/contacto/form', "Web\FormController@store")->name("form");



Auth::routes();

Route::get('/home', 'HomeController@index');


