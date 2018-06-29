<?php

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

use App\Birder;
use App\ListCategory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('birders', 'BirderController@index');

Route::get('birders/{id}', 'BirderController@show');

Route::post('birders/{id}', 'BirderController@edit');

Route::post('birders', 'BirderController@store');

Route::delete('birders/{id}', 'BirderController@destroy');

/// Routes for ListCategory

Route::get('listcategorys', 'ListCategoryController@index');

Route::get('listcategorys/{id}', 'ListCategoryController@show');

Route::post('listcategorys', 'ListCategoryController@store');

Route::delete('listcategorys/{id}', 'ListCategoryController@destroy');


