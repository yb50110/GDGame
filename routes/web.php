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
Route::get('/quit', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new', 'SessionController@new')->name('session.new');
Route::get('/join', 'SessionController@join_form')->name('session.join_form');
Route::post('/join', 'SessionController@join')->name('session.join');
Route::get('/start', 'SessionController@start')->name('session.start');
