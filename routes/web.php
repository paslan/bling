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


Route::get('products/{page}', 'App\Http\Controllers\BlingController@show')->name('bling.show');

Route::get('products/{id}/detail', 'App\Http\Controllers\BlingController@detail')->name('bling.detail');


Route::get('/', function () {
    return view('index');
});
