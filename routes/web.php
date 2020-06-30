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

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/aw', function () {
    return view('client.award');
});

Route::get('/pb', function () {
    return view('client.publication');
});

Route::get('/team', function () {
    return view('client.team');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{any}','HomeController@index')->where(' any', '.*');

