<?php

namespace App\Http\Controllers;

// use App\Models\Cart2;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    public $cart;
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->back()->with('message', 'Product not found');
        }
    
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : new Cart();
        $oldCart->add($product, $id);
        $request->session()->put('cart', $oldCart);
    
        return redirect()->back()->with('message', 'Added to cart successfully');
    }

    public function getCart()
    {
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
    public function updateCartItem(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Xử lý cập nhật số lượng sản phẩm trong giỏ hàng ở đây
        // Ví dụ: 
        $product = Product::find($productId);
        $product->quantity = $quantity;
        $product->price = $quantity * $product->unit_price;
        $product->save();

        return response()->json(['success' => true]);
    }
    public function updateToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('qty');
        $cart = session()->get('cart') ?? new Cart();

        $cart->updateQuantity($productId, $quantity);
        $cart->updateTotalPrice();
        session()->put('cart', $cart);
        return response()->json(['status' => 'Cart updated successfully']);
    }
}
