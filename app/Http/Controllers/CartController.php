<?php

namespace App\Http\Controllers;
use App\Models\Cart2;
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
        // dd($cart);
        
        return redirect()->back()->with('message', 'Add to cart successfully');
    }

    public function getDataAndRenderView(Request $request)
    {
        $sessionData = $request->session()->get('cart');
        $items = [];
        
            foreach ($sessionData->items as $key => $data) {
                if (isset($data['qty'], $data['price'], $data['item'])) {
                    $items[$key] = [
                        'qty' => $data['qty'],
                        'price' => $data['price'],
                        'item' => (object)$data['item'],
                    ];
                }
            }
            // dd( $items );    
        return view('clients.webpage.checkout', ['items' => $items]);
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
    $cart = session()->get('cart') ?? new Cart2();
    
    $cart->updateQuantity($productId, $quantity);
    $cart->updateTotalPrice();
    session()->put('cart', $cart);
    return response()->json(['status' => 'Cart updated successfully']);
}
}
