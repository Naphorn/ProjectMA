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

// ---------------------Front-End------------------------------------------------------------------
Route::get('/main', function () {
    return view('main');
});
Route::get('/main', 'HomeController@index_frontend');
Route::get('/building/{id}', 'HomeController@building_index');
Route::get('/building/deital/{building_id}/{level_id}', 'HomeController@building_detail');
// ------------------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/levels', function () {
    return view('levels');
});

Route::get('/notify', function () {
    return view('notify');
});

Route::get('/ajax_get_data_room_detail/{id}', 'StatusairController@room_detail');

Route::resource('user', 'UsersController');
Route::resource('adminuser', 'UsersController');

Route::resource('level', 'LevelController');
Route::resource('adminlevel', 'LevelController');

Route::resource('status', 'StatusairController');
Route::resource('adminstatus', 'StatusairController');

Route::resource('buildings', 'BuildingController');
Route::resource('adminbuilding', 'BuildingController');
