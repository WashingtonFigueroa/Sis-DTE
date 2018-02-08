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
    return view('index');
});
Route::resource('nosotros', 'nosotrosController');
Route::resource('servicios', 'serviciosController');
Route::resource('portafolio', 'portafolioController');
Route::resource('construccion', 'ErrorController');
Route::resource('blog', 'blogController');
Route::resource('contactos', 'contactosController');
Route::resource('login', 'loginController');
