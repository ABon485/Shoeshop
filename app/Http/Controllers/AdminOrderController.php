<?php

namespace App\Http\Controllers;

use App\Models\AdminOrder;
use App\Models\orderedModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminOrderController extends Controller
{
    private $orders;
    public function __construct()
    {
        $this->orders = new orderedModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.index');
    }
    public function ordered(Request $request)
    {
        $dataSession = session('cart');
        $data = $dataSession->items;
        foreach ($data as $index => $item) {
            $qty = $item['qty'];
            $nameProduct = $item['item']->name;

        }
        $amount = $_GET['amount'];
        $message = $_GET['message'];

        if ($message == "Successful.") {
            orderedModel::create([
                'quantity' => $qty,
                'userID' => 1,
                'productName' => $nameProduct,
                'total' => $amount,
                'status' => $message,
            ]);
            Session::forget('cart');
            return view('clients.webpage.successfulOrder');
        } else {
            return view('clients.webpage.successfulOrder');
        }
    }
   public function showOrder()
    {
        $allData = orderedModel::all();
        $items = [];

        foreach ($allData as $data) {
            $itemData = [
                'id' => $data->id,
                'productName' => $data->productName,
                'quantity' => $data->quantity,
                'userID' => $data-> userID,
                'total' => $data->total,
                'status'=> $data->status,
            ];
            $items[] = $itemData;
        }
        // dd($items);
        // return view('admin.order.show');
        return view('admin.order.show', ['items' => $items]);
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
    public function show(orderedModel $adminOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(orderedModel $adminOrder)
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
    public function update(Request $request, orderedModel $adminOrder)
    {
        $id = $request->id;
        $value = $request->order_status;
        $updateStatus = $this->orders->updateStatus($id, $value);
        return redirect()->route('admin.order.show');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminOrder  $adminOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderedModel $adminOrder)
    {
        //
    }
}
