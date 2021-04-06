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
})->name('welcome');

Route::get('/listing/rent', 'IndexController@rent')->name('rent');
Route::get('/listing', 'IndexController@buy')->name('buy');
Route::get('/listing/{id}', 'IndexController@description')->name('description');
Route::post('/interest', 'IndexController@interest')->name('interest');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/properties', 'PropertyController@index')->name('property');
    Route::get('/properties/add', 'PropertyController@add')->name('property.add');
    Route::post('/properties/add', 'PropertyController@addSubmit')->name('property.add');
});

