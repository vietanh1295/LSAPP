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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/user/{id}', function ($id) {
//     return 'this is '.$id;
// });
Route::get('/','Pagescontroller@index');
Route::get('/about','Pagescontroller@about');
Route::get('/services','Pagescontroller@services');
Route::post('/create','PostsController@store');
Route::resource('posts','PostsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
