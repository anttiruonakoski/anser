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

})->name('home');

Route::get('birders', 'BirderController@index')->name('birders');

Route::get('birders/{birder}', 'BirderController@show')->name('birders.show');

Route::post('birders/{birder}', 'BirderController@edit')->name('birders.edit');

Route::post('birders', 'BirderController@store')->name('birders.store');

Route::delete('birders/{birder}', 'BirderController@destroy')->name('birders.destroy');;

/// Routes for ListCategory

Route::get('listcategorys', 'ListCategoryController@index')->name('listcategorys');

Route::get('listcategorys/{listcategory}', 'ListCategoryController@show')->name('listcategorys.show');

Route::post('listcategorys', 'ListCategoryController@store')->name('listcategorys.store');

Route::delete('listcategorys/{listcategory}', 'ListCategoryController@destroy')->name('listcategorys.destroy');


