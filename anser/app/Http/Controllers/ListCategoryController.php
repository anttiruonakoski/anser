<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListCategory;

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
        $validatedData = $request->validate([
        'category' => 'required|unique:list_categories|max:100'
        ]);

        $listcategory = new ListCategory;
        $listcategory->category = request('category');
        $listcategory->save();

        $listcategorys = ListCategory::all();
        return view('listcategorys', compact('listcategorys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listcategory = ListCategory::find($id);
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
    public function destroy($id)
    {
        $listcategory=Listcategory::find($id);
        $listcategory->delete();

        return redirect ('listcategorys');

         // return public function (

             // create()

         // );
    }
}
