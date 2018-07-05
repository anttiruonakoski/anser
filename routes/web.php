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

use App\Birder, App\ListCategory, App\Point;

Route::get('/', function () {

	$c = ListCategory::all();
	// $data = App\Point::with('birder')->get()->groupBy('listcategory.category')->sortByDesc('amount');
	$data = Point::with('birder')->where('amount', '>', 0)->get()->sortByDesc('amount')->groupBy('listcategory.category');

    return view('stats', compact('data'));

});

Route::get('birders', 'BirderController@index');

Route::get('birders/{birder}', 'BirderController@show');

Route::post('birders/{id}', 'BirderController@edit');

Route::post('birders', 'BirderController@store');

Route::delete('birders/{birder}', 'BirderController@destroy');

/// Routes for ListCategory

Route::get('listcategorys', 'ListCategoryController@index');

Route::get('listcategorys/{listcategory}', 'ListCategoryController@show');

Route::post('listcategorys', 'ListCategoryController@store');

Route::delete('listcategorys/{listcategory}', 'ListCategoryController@destroy');


