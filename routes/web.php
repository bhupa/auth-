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

Route::get('/', 'HomeController@index');

Route::get('/register','LoginController@showRegister')->name('register');
Route::post('/register','LoginController@register')->name('login');
Route::get('/login','LoginController@showLogin')->name('login');
Route::post('/login','LoginController@login');

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile','HomeController@profile')->name('profile');
    Route::get('logout', 'LoginController@logout')->name('logout');
});
