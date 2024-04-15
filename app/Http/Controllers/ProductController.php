<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;


class ProductController extends Controller
{
    function index(){
        $products = product::all();
        return view('clients.webpage.home',compact('products'));
    }
    public function getproduct(){
        
        $products = product::all();
        // $this->data['title'] = 'sản phẩm';
        return view('clients.webpage.product',compact('products'));
    }
    public function Detailproduct($id){
        $product = DB::table('shoe')->where('id', $id)->first();
        return view('clients.webpage.detail', compact('product'));
    }
    public function show($id)
    {
        $product = Product::find($id);
        // Các xử lý khác với biến $product
        return view('clients.webpage.detail', compact('product'));
    }
    public function favorite($product_id)
    {
        $user_id = auth('web')->id();
        $data = [
            'product_id' => $product_id,
            'user_id' => auth('web')->id()
        ];
        Favorite::create($data);
        return redirect()->back()->with('ok', 'Bạn đã yêu thích sản phẩm.');
    }

    
}

    