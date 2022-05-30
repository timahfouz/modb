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

Route::group(['namespace' => 'Timahfouz\LaravelModb\Http\Controllers', 'prefix' => 'modb', 'as' => 'modb.'], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'ModbController@index']);
    Route::post('/', ['as' => 'store', 'uses' => 'ModbController@store']);

});