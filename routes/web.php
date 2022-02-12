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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/data-process', 'HomeController@data_process')->name('data-process')->middleware('auth');
Route::get('/add-new-case', 'HomeController@add_new_case')->name('add-new-case')->middleware('auth');

Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::post('/addNewCase', 'HomeController@addNewCase_POST')->name('addNewCase');

Route::post('/aggregateFiles', 'Formatter@aggregateFiles')->name('aggregateFiles');
Route::post('/preparation', 'Preparation@preparation')->name('preparation');
Route::post('/organisation', 'Organization@organisation')->name('organisation');
Route::post('/fusion', 'Fusion@fusion')->name('fusion');
