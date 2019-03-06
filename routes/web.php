<?php

use Illuminate\Database\Console\Migrations\RollbackCommand;
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

// สามารถให้ admin เพิิิ่มผู้ใช้ได้เท่านั้น
Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/level1', function () {
    return view('level1');
});

Route::get('/level2', function () {
    return view('level2');
});

Route::get('/ajax_get_data_room_detail/{id}', 'StatusairController@room_detail');

Route::get('/levelon/{id}', 'LevelController@poweron');
Route::get('/leveloff/{id}', 'LevelController@poweroff');

Route::get('/homeon/{id}', 'StatusairController@poweron');
Route::get('/homeoff/{id}', 'StatusairController@poweroff');

Route::get('/performanceairs/{id}', 'StatusairController@performanceairs');

Route::resource('user', 'UsersController');
Route::resource('adminuser', 'UsersController');

Route::resource('level', 'LevelController');
Route::resource('adminlevel', 'LevelController');

Route::resource('status', 'StatusairController');
Route::resource('adminstatus', 'StatusairController');

Route::resource('building', 'BuildingController');
Route::resource('adminbuilding', 'BuildingController');
