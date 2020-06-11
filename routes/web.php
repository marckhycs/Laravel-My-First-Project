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
//hitting pages controller
Route::get('/home', 'PagesController@home');

//hitting service controller
Route::get('/service', 'ServicesController@index');
Route::post('/service', 'ServicesController@store');