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
Route::get('/service/create', 'ServicesController@create');
Route::post('/service', 'ServicesController@store');
Route::get('/service/{services}', 'ServicesController@show');
Route::get('/service/{services}/edit', 'ServicesController@edit');
Route::patch('/service/{services}', 'ServicesController@update');
Route::delete('/service/{services}', 'ServicesController@destroy');