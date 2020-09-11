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

Route::get('/','ApiController@index');
Route::post('registration','ApiController@registration')->name('registration');
Route::post('login','ApiController@login')->name('login');
Route::post('select-role','ApiController@selectRole')->name('select_role');
Route::post('receiving-gifts','ApiController@receivingGifts')->name('receiving_gifts');
Route::post('detail-user','ApiController@detailUser')->name('detail.user');