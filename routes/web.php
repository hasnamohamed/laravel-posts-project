<?php

use App\Http\Controllers\hellocontroller;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts','PostController@Index')->name('posts.index');
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::post('/posts','PostController@store')->name('posts.store');
Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit');
Route::put('/posts/{post}','PostController@update')->name('posts.update');
Route::DELETE('/posts/{post}','PostController@destroy')->name('posts.destroy');
Route::get('/posts/{post}','PostController@show')->name('posts.show');
//Post is Dynamic Not Static I can change it in url as i want it between kerlyBrackets
