<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = product::all();
        return view('webpage.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $mfList = Mf::all();
        // return view('product-create',compact('mfList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255|unique:products,Name',
            'description' => 'required|max:255',
            'Price' => 'required|decimal',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        //
        $product = new product();

        $product->Name = $request->Name;
        $product->description = $request->description;
        $product->Price = $request->Price;

        $file = $request->file('image');
            $name =time().'_'.$file->getClientOriginalName();
            $destinationPath= public_path('images'); // lưu hình ảnh vào thư mục public
            $file->move($destinationPath,$name);
            $product->image=$name;
            $product->save();
            session()->flash('success', 'Thêm xe thành công!');
        return redirect()->route('product.store');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        // Các xử lý khác với biến $product
        return view('webpage.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request  $request, string $id){
        if(isset($request->image)){
            return $this->update($request, $id);
        }

        $product = product::find($id);
        return view('product-update', compact('product'));
    }

   /**
 * Update the specified resource in storage.
 */
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $product = product::find($id);
    
    $product->Name = $request->input('Name');
    $product->description = $request->input('description');
    $product->Price = $request->input('Price');


    if ($request->hasFile('image')) {
        $file = $request->file('image');

        if ($file->isValid()) {
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $name);
            $product->image = $name;
        } else {
            return redirect()->back()->with('error', 'Invalid file upload.');
        }
    }

    $product->save();

    return redirect()->route('product.store')
        ->with('success', 'Cập nhật thông tin san pham thành công.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = product::find($id);
        $product->delete();
        return redirect()->route('product.store');
    }
}
