<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
class ProductController extends Controller
{
    // function search(Request $request){
    //     // $data = compact('products', 'search'); 
    //     // return view('webpage.resultSearch', $data);
    //         $search = $request->input('search', '');
    //         if($search != ""){
    //             $products = Product::where('name', 'LIKE', "%$search%")
    //                                ->orWhere('description', 'LIKE', "%$search%")
    //                                ->get();  
    //         } else {
    //             $products = Product::all();
    //         }
    //         return view('webpage.product', compact('products', 'search')); 
            
    // }
    // public function search(Request $request)
    // {
    //     // Lấy giá trị từ trường 'search' trong request
    //     $searchTerm = $request->input('search');

    //     // Thực hiện tìm kiếm theo $searchTerm
    //     // Ví dụ: sử dụng Eloquent ORM
    //     $results = YourModel::where('column', 'like', '%'.$searchTerm.'%')->get();

    //     // Trả về view hiển thị kết quả tìm kiếm
    //     return view('search', ['results' => $results]);
    // }
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
}

    