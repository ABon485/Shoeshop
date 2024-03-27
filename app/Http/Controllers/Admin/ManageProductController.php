<?php

namespace App\Http\Controllers;

use App\Models\manageProduct;
use Illuminate\Http\Request;

class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manageProduct = ManageProduct::latest()->paginate(5);
        return view('admin.index', compact('manageProduct'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'deatail'=> 'required',
        ]);
        manageProduct::create($request->all());
        return redirect()-> route('admin.index')-> with('succsess','Create succsessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageProduct  $manageProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ManageProduct $manageProduct)
    {
        return view('admin.show',compact('manageProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageProduct  $manageProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageProduct $manageProduct)
    {
        return view('admin.edit',compact('manageProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageProduct  $manageProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageProduct $manageProduct)
    {
        $request->validate([
            'name'=>'required',
            'deatail'=> 'required',
        ]);
        $manageProduct->update($request->all());
        return redirect('admin.index')->with('succsess', 'Update succsessfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageProduct  $manageProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageProduct $manageProduct)
    {
        $manageProduct->delete();
        return redirect('admin.index')->with('succsess', 'Delete succsessfull');

    }
}

