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
Route::get('/start/{id}', 'SessionController@start')->name('session.start');
Route::get('/start/{id}/update', 'SessionController@start_update')->name('session.start_update');
Route::get('/session/{session_id}/name', 'SessionController@name')->name('session.name');
Route::post('/session/{session_id}/name', 'SessionController@name_update')->name('session.name_update');
ROUTE::post('/session/{session_id}/role', 'SessionController@role_update')->name('session.role_update');

// ajax routes
Route::get('/count/{id}', 'SessionController@count');
Route::get('/start/check/{id}', 'SessionController@start_check');
Route::get('/session/{session_id}/role/check', 'SessionController@role_check')->name('session.role_check');
Route::get('/session/{session_id}/{decision_id}/check', 'SceneController@decision_check');

// routes for actual scenes-jack
Route::get('/session/{session_id}/wait', 'SceneController@show')->name('scene.wait');
Route::get('/session/{session_id}/scene/{scene_id}', 'SceneController@show')->name('scene.show');
Route::get('/session/{session_id}/scene/{scene_id}/{decision_id}/{option}', 'SceneController@decision')->name('scene.decision');
