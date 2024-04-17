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
    public function destroy($id)
{
    // Tìm yêu thích cần xóa
    $favorite = Favorite::find($id);

    // Kiểm tra xem yêu thích có tồn tại không
    if (!$favorite) {
        return redirect()->back()->with('error', 'Favorite not found');
    }

    // Xóa yêu thích
    $favorite->delete();

    return redirect()->back()->with('success', 'Favorite deleted successfully');
}

}
