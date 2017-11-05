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

Route::get('/', "inicio@index");

Route::get('/consejos', function () {
    return view('consejos');
});

Route::get('/alertar', "refugios@alertar");

Route::get('/restaurar', "refugios@restaurar");

Route::get('/listo', function () {
    return view('listo');
});

Route::get("/install", function() {
	Artisan::call("config:clear");
	Artisan::call("cache:clear");
	Artisan::call("migrate");
});

Route::get('/admin/login', function () {
    return view('login');
});

Route::get('/admin', "refugios@index");


Auth::routes();