<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Birder;

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

        //echo "ollaan validoinnis";
        //dd($request);

        $birder = new Birder;
        $birder->name = request('name');
        $birder->save();
        $birders = allBirdersSorted();

        return view('birders', compact('birders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $birder = Birder::find($id);
        return view('birderstats', compact('birder'));        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {

    $birder=Birder::find($id);
    $birder->delete();

    return redirect ('birders');

    // return public function (

        // create()

    // );
    }

}
