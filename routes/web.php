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

// Show Table for Level
Route::get('/level1', function () {
    return view('level1');
});
Route::get('/level2', function () {
    return view('level2');
});
Route::get('/level3', function () {
    return view('level3');
});
Route::get('/level4', function () {
    return view('level4');
});
Route::get('/level5', function () {
    return view('level5');
});

// สามารถให้ admin เพิิิ่มผู้ใช้ได้เท่านั้น
Route::get('/adduser', function () {
    return view('adduser');
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'StatusairController');