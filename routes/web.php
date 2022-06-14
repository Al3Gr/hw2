<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', "App\\Http\\Controllers\\LoginController@login")->name("login");
Route::post('/login', "App\\Http\\Controllers\\LoginController@checkLogin");
Route::get('/logout', "App\\Http\\Controllers\\LoginController@logout")->name("logout");

Route::get('/signup', "App\\Http\\Controllers\\SignUpController@index")->name("signup");
Route::post('/signup', "App\\Http\\Controllers\\SignUpController@create");
Route::get('/signup/username/{username}', "App\\Http\\Controllers\\SignUpController@checkUsername");
Route::get('/signup/email/{email}', "App\\Http\\Controllers\\SignUpController@checkEmail");

Route::get('/home', "App\\Http\\Controllers\\HomepageController@index")->name("home");
Route::post('/home/createPost', "App\\Http\\Controllers\\PostController@createPost")->name("createPost");
Route::post('/home/modifyPost', "App\\Http\\Controllers\\PostController@modifyPost")->name("modifyPost");
Route::get('/home/deletePost/{id}', "App\\Http\\Controllers\\PostController@deletePost");

Route::get('/explorer',  "App\\Http\\Controllers\\ExplorerController@index")->name("explorer");

Route::get('/post/get/{explorer?}', "App\\Http\\Controllers\\PostController@getPosts");
Route::get('/post/addlike/{user}/{id}', "App\\Http\\Controllers\\PostController@addLike");
Route::get('/post/removelike/{user}/{post_id}', "App\\Http\\Controllers\\PostController@removeLike");
Route::post('/post/addcomment', "App\\Http\\Controllers\\PostController@addComment");
Route::get('/post/getcomment/{post_id}', "App\\Http\\Controllers\\PostController@getComment");

Route::get('/meteo', "App\\Http\\Controllers\\HomepageController@getMeteo");

