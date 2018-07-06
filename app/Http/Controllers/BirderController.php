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
        $submittingbirders = Point::SubmittingBirders();
        return view('birders', compact(['birders','submittingbirders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $messages = [
            'name.required' => 'Nimi ei voi olla tyhjä',
            'name.unique' => 'Ilmoittaja on jo olemassa',
            'name.max' => 'Liian pitkä nimi'
        ];

        $validatedData = $request->validate([
        'name' => 'required|unique:birders|max:50'
        ], $messages);

        $birder = new Birder;
        $birder->name = request('name');

        $birder->save();
        $request->session()->flash('alert-success', 'Ilmoittaja tallennettu');

        $birders = allBirdersSorted();
        return back();
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
    public function edit(Request $request, $id)
    {

        $messages = [
            'required' => 'Pinnamäärä ei voi olla tyhjä',
            'min' => 'Pinnamäärä ei voi olla negatiivinen',
            'integer' => 'Pinnamäärän pitää olla kokonaisluku',
            'max' => 'Pinnamäärä ei voi ylittää 2000'
        ];


        $birder = Birder::find($id);
        $listcategorys = ListCategory::all();

        foreach ($listcategorys as $cat) {
            $fieldName = 'cat_'.$cat->id.'_amount';

            $validatedData = $request->validate([
            $fieldName => 'required|integer|min:0|max:2000',
            ], $messages);

            $amount = request($fieldName);

        Point::updateOrCreate(['birder_id' => $birder->id, 'listcategory_id' => $cat->id], ['amount' => $amount]);
        }

        //$request->session()->flash('alert-success', 'Pinnatiedot tallennettu');
        return view('birderstats_d', compact('birder', 'listcategorys'))->with('alert-success', 'Pinnatiedot tallennettu');
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
    public function destroy(Request $request, Birder $birder)
    {

    if ( Point::SubmittingBirders()->contains($birder->id) === false ) {
            $birder->delete();
            $request->session()->flash('alert-success', 'Ilmoittaja poistettu');
        } else {
            $request->session()->flash('alert-danger', 'Ilmoittajaa ei poistettu, koska on olemassa hänelle kuuluvia pinnatietoja');
        }

    return redirect ('birders');

    // return public function (

        // create()

    // );
    }

}
