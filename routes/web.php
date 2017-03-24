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
    return view('Home');
});
Route::get('/admin', function () {
    return view('Admin');
});
Route::get('/administrateur', function () {
    return view('Administrateur');
});
Route::get('/create', function () {
    return view('CreateArticle');
});