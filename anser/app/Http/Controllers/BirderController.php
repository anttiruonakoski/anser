<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Birder, App\ListCategory, App\Point;


function allBirdersSorted() {
     return Birder::get()->sortBy('name', SORT_NATURAL|SORT_FLAG_CASE);
}

class BirderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birders = allBirdersSorted();
        return view('birders', compact('birders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
    //     $v = validate(request(), [
    //     'name' => 'required'
    // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|unique:birders|max:100'
        ]);

        $birder = new Birder;
        $birder->name = request('name');
        $birder->save();

        //populate points

        $birders = allBirdersSorted();
        return view('birders', compact('birders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Birder $birder)
    {
        $listcategorys = ListCategory::all();
        return view('birderstats', compact('birder', 'listcategorys'));        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Birder $birder)
    {

        $listcategorys = ListCategory::all();

        return;

        $listcategorys = ListCategory::all();

        return view('birderstats', compact('birder', 'listcategorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Birder $birder)
    {

    $birder->delete();

    return redirect ('birders');

    // return public function (

        // create()

    // );
    }

}
