<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index') ->name('home');
    Route::get('logout', 'Auth\LoginController@logout') ->name('logout');
    Route::get('/home/profile','PruebaController@profile') ->name('profile');
    Route::get('/home/tickets','PruebaController@tickets') ->name('tickets');
    Route::get('/home/clients','PruebaController@clients') ->name('clients');
    Route::get('/home/users','PruebaController@users') ->name('users');
});