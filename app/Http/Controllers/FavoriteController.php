<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;


class FavoriteController extends Controller
    {
        public function index()
        {
            // Lấy danh sách sản phẩm yêu thích của người dùng
            $favorites = auth()->user()->favorites()->with('product')->get();
    
            // Trả về view hiển thị danh sách yêu thích
            return view('favorites.index', compact('favorites'));
        }
    
        public function remove(Request $request, Product $product)
        {
            // Xóa sản phẩm khỏi danh sách yêu thích của người dùng hiện tại
            auth()->user()->favorites()->where('product_id', $product->id)->delete();
    
            // Redirect về trang danh sách yêu thích
            return redirect()->route('favorites.index')->with('success', 'Sản phẩm đã được xóa khỏi danh sách yêu thích.');
        }
    }
    

