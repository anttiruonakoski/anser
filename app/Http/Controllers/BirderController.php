<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Birder, App\ListCategory, App\Point;
use Carbon\Carbon;


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
        $chunksize = chunksize($birders, 3);
        //$chunksize = ceil(count($birders) / 3);
        $submittingbirders = Point::SubmittingBirders();
        return view('birders', compact(['birders','submittingbirders','chunksize']));
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
    public function edit(Request $request, Birder $birder)
    {

        $messages = [
            'amount' => [
            'required' => 'Pinnamäärä ei voi olla tyhjä',
            'min' => 'Pinnamäärä ei voi olla negatiivinen',
            'integer' => 'Pinnamäärän pitää olla kokonaisluku',
            'max' => 'Pinnamäärä ei voi ylittää :max',
            'date' => 'Päivämäärä väärin.'],
            'species' => [
            'max' => 'Lajinimen pituus ei voi ylittää 40 merkkiä'],
            'date' => [
            'date' => 'Virheellinen päivämäärän muoto:',
            'before_or_equal' => 'Päivämäärä ei voi olla tulevaisuudessa'
            ]
        ];



        switch($request->input('action')) {

            case 'destroy':
                $request->session()->flash('alert-destroy', 'Ilmoittaja '.$birder->name.' poistetaan. Oletko varma?');
                break;

            case 'save':
                $listcategorys = ListCategory::all();

                foreach ($listcategorys as $cat) {
                    $fieldNames = ['cat_'.$cat->id.'_amount', 'cat_'.$cat->id.'_species','cat_'.$cat->id.'_date'] ;

                    $validatedData = $request->validate([$fieldNames[0] => 'required|integer|min:0|max:2000',
                    ], $messages['amount']);

                    $validatedData = $request->validate([$fieldNames[1] => 'nullable|string|max:40',
                    ], $messages['species']);

                    $validatedData = $request->validate([$fieldNames[2] => 'nullable|date|before_or_equal:today',
                    ], $messages['date']);

                    $amount = request($fieldNames[0]);
                    $species = request($fieldNames[1]);
                    $date = request($fieldNames[2]);

                    // $date = ($fieldNames[2] != "") ? Carbon::parse('j.n.Y', $fieldNames[2]) : null;

                Point::updateOrCreate(['birder_id' => $birder->id, 'listcategory_id' => $cat->id],
                    ['amount' => $amount, 'newest_species' => $species, 'newest_date' => $date]);
                }

                $request->session()->flash('alert-success', 'Pinnatiedot tallennettu');
                break;
        }

        return back();
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

    // if ( Point::SubmittingBirders()->contains($birder->id) === false ) {

        switch($request->input('action')) {

            case 'destroy':
                $birder->delete();
                $request->session()->flash('alert-success', 'Ilmoittaja '. $birder->name. ' poistettu');
                break;
            case 'cancel':
                return back();
                break;

        }

        // } else {
            // $request->session()->flash('alert-danger', 'Ilmoittajaa ei poistettu, koska on olemassa hänelle kuuluvia pinnatietoja');
        // }

    return redirect ('birders');

    // return public function (

        // create()

    // );
    }

}
