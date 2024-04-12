<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
class CartController extends Controller
{
    public $cart;
    //thêm 1 sản phẩm có id cụ thể vào model cart rồi lưu dữ liệu của model cart vào 1 session có tên cart (session được truy cập bằng thực thể Request)
    public function addToCart(Request $request, $id)
    {
        
        $product = Product::find($id);
        // dd($product);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);
        
        return redirect()->back()->with('message');
    }

     public function getCart(){
        return view('clients/webpage/cart');
    }
    public function deleteCart(Request $request, $id)
    {
        $productId = (int) $id;
        $cart = $request->session()->get('cart');
    
        if ($cart && array_key_exists($productId, $cart->items)) {
            unset($cart->items[$productId]);
            $cart->totalQty -= 1; // Giảm số lượng sản phẩm sau khi xóa
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('message', 'Xóa khỏi giỏ hàng thành công');
        } else {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }
}
