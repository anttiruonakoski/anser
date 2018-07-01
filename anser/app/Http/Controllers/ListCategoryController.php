<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListCategory, App\Point;

class ListCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcategorys = ListCategory::all();
        return view('listcategorys', compact('listcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category.required' => 'Kategorian nimi ei voi olla tyhjä',
            'category.unique' => 'Kategoria on jo olemassa',
            'category.max' => 'Liian pitkä nimi'
        ];

        $validatedData = $request->validate([
        'category' => 'required|unique:list_categories|max:100'
        ], $messages
        );

        $listcategory = new ListCategory;
        $listcategory->category = request('category');
        $listcategory->save();

        $request->session()->flash('alert-success', 'Kategoria tallennettu');
        $listcategorys = ListCategory::all();
        return view('listcategorys', compact('listcategorys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListCategory $listcategory)
    {
        return $listcategory;
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
    public function destroy(Request $request, ListCategory $listcategory)
    {
        $used = Point::UsedListCategories();

        if ( $used -> contains( $listcategory->id ) === false) {
            $listcategory->delete();
            $request->session()->flash('alert-success', 'Kategoria poistettu');
        } else {
            $request->session()->flash('alert-danger', 'Kategoriaa ei poistettu, koska on olemassa siihen kuuluvia pinnatietoja');
        }
        return redirect ('listcategorys');

         // return public function (

             // create()

         // );
    }
}
