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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posoy-dos', 'PosoyDosController@index')->name('posoy-dos');
Route::get('/kings-cup', 'KingsCupController@index')->name('kings-cup');
Route::get('/about', 'AboutController@index')->name('about');
