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

Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('/testtext', function () {
    return view('testtext');
});
Route::get('/testcsv', function () {
    return view('testcsv');
});

Route::get('/levelon/{id}', 'LevelController@poweron');
Route::get('/leveloff/{id}', 'LevelController@poweroff');

Route::get('/homeon/{id}', 'StatusairController@poweron');
Route::get('/homeoff/{id}', 'StatusairController@poweroff');

Route::get('/performanceairs/{id}', 'StatusairController@performanceairs');

Route::resource('level', 'LevelController');
Route::resource('home', 'StatusairController');
