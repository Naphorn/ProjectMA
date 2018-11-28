<?php

use Illuminate\Database\Console\Migrations\RollbackCommand;

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

Route::get('showstatusair/1','StatusairController@showstatusair1')->name('showstatusair1');
Route::resource('showstatusair','StatusairController');

