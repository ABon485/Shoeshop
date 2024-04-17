<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manageOrder = "";
        return view('admin.index');
    }
    public function showOrder()
    {
        $products = "";
        return view('admin.order.show');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function show(AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminOrder $adminOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminOrder $adminOrder)
    {
        //
    }
}
