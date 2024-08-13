<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MatrixController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\TextController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/diagram', 'App\Http\Controllers\DiagramController@index')->name('diagram');

    Route::get('/matrix', 'App\Http\Controllers\MatrixController@index')->name('matrix');


    Route::get('/catalog/{portofolio_id}/{artefact_id}', 'App\Http\Controllers\CatalogController@index')->name('catalog');


    Route::get('/text', 'App\Http\Controllers\TextController@index')->name('text');
    
});
