<?php

namespace App\Http\Controllers;

use App\Models\AdminProduct;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manageProduct = "";
        return view('admin.product.show');
    }
    
    public function showProduct()
    {
        $manageProduct = "";
        return view('admin.product.show');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminProduct $adminProduct)
    {
        return view('admin.product.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminProduct $id)
    {
        $product = AdminProduct::findOrFail($id);

        $product->delete();
        echo"success delete user";
    }
}
