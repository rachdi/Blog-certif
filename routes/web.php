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



Route::get('/', 'ArticleController@show1');
Route::get('/administration', 'ArticleController@show');
Route::post('/ajout/article','ArticleController@ajouter');
Route::get('/editArticle/{id}','ArticleController@formEdit');
Route::post('/modification/{id}','ArticleController@editer');
Route::get('/deleteArticle/{id}','ArticleController@Supprimer');
Route::post('/home/article/{id}','ArticleController@publier');
Route::get('/login','UserController@admin');
Route::post('login','UserController@verif');
Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);
