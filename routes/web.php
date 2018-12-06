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

// สามารถให้ admin เพิิิ่มผู้ใช้ได้เท่านั้น
Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/home/{$id}', 'StatusairController@show');

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'StatusairController');