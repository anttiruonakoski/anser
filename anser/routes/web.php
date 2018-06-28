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

Route::get('birders', function () {


	// $birders = [
	// 	'Anzu',
	// 	'Antti',
	// 	'Bentti'
	// ];

	$birders = Birder::all();

    return view('birders', compact('birders'));
});

Route::get('birders/{id}', function ($id) {

	$birder = Birder::find($id);

	return $birder;

});


Route::post('birders', function () {

	$birder = new Birder;

	$birder->name = request('name');
	$birder->save();



	$birders = Birder::all();

	return view('birders', compact('birders'));

	// return public function (

		// create()

	// );

});

Route::delete('birders/{id}', function ($id) {

	$birder=Birder::find($id);
	$birder->delete();

	echo 'deleting'.$birder->name;

	return redirect ('birders');

	// return public function (

		// create()

	// );

});

/// Routes for ListCategory
///

Route::get('listcategorys', function () {

	$categories = ListCategory::all();

    return $categories;
});
