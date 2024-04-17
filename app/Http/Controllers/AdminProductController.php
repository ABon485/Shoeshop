<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.show', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product(); 
    
        return view('admin.product.create', compact('product'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'model' => 'required|max:255|unique:products,model',
            'description' => 'required|max:255',
            'produced_on' => 'required|date',
            'mf_id' => 'required|max:25',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'model.required' => 'Vui lòng nhập model.',
            'model.max' => 'Model không được vượt quá 255 ký tự.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'produced_on.required' => 'Vui lòng nhập ngày sản xuất.',
            'produced_on.date' => 'Ngày sản xuất không hợp lệ.',
            'image.required' => 'Vui lòng chọn hình ảnh.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
        ]);
        
        $product = new Product();

        $product->model = $request->model;
        $product->description = $request->description;
        $product->produced_on = $request->produced_on;
        // $product->mf_id = $request->mf_id;

        $file = $request->file('image');
        $name = time().'_'.$file->getClientOriginalName();
        $destinationPath = public_path('images');
        $file->move($destinationPath, $name);
        $product->image = $name;
        $product->save();
        
        session()->flash('success', 'Thêm xe thành công!');
        return redirect()->route('product.index');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find();
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'model' => 'required|max:255|unique:products,model,'.$product->id,
            'description' => 'required|max:255',
            'produced_on' => 'required|date',
            'mf_id' => 'required|max:25',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'model.required' => 'Vui lòng nhập model.',
            'model.max' => 'Model không được vượt quá 255 ký tự.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'produced_on.required' => 'Vui lòng nhập ngày sản xuất.',
            'produced_on.date' => 'Ngày sản xuất không hợp lệ.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
        ]);
        
        $product->model = $request->model;
        $product->description = $request->description;
        $product->produced_on = $request->produced_on;
       $product->mf_id = $request->mf_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $name);
            $product->image = $name;
        }

        $product->save();
        
        session()->flash('success', 'Cập nhật xe thành công!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'Xóa xe thành công!');
        return redirect()->route('showProduct');
    }
}