<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/create', 'App\Http\Controllers\RegisterController@create')->name('create.register');
Route::post('/register/store', 'App\Http\Controllers\RegisterController@store')->name('store.register');

Route::get('/first/login', 'App\Http\Controllers\LoginController@index')->name('login');

Route::post('/index', 'App\Http\Controllers\StudentController@index')->name('store.login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('UserMiddleware');
