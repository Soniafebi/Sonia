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

Route::get('/', function () {
    return "welcome kategori";
});

route:: resource('kategori','CategoryController');

Route::get('master', function(){
    return view('layout.master');
});
Route::get('sidebar', function(){
    return view('layout.sidebar');
});
Route::get('index', function(){
    return view('dashboard.index');
});
