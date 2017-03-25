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


Route::get('/show', 'ArticleController@show');
Route::post('/ajout/article','ArticleController@ajouter');
Route::get('/editArticle/{id}','ArticleController@formEdit');
Route::post('/modification/{id}','ArticleController@editer');
Route::get('/deleteArticle/{id}','ArticleController@Supprimer');