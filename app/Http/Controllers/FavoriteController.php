<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Product;


class FavoriteController extends Controller
{
    function Favorite(){
        // $favorite = auth()->user()->favorite;
        $favProd = Favorite::all();
        $product = Product::all();
        return view('clients.favorite.show',["favProds"=>$favProd,"products" => $product]);
    }
}
