<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\AdminProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product.show', compact('products'));
    }


    public function create()
    {
        $product = new Product();

        return view('admin.product.create', compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'promotion_price' => 'required|numeric',
            'size' => 'required|max:255',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|in:men,women',
        ]);


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->price = $request->price;
        $product->promotion_price = $request->promotion_price;
        $product->size = $request->size;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->save();
        // dd($resuft);

        session()->flash('success', 'Thêm sản phẩm  thành công!');
        return redirect()->route('showProduct');
    }

    public function show(Product $product)
    {
        $product = Product::All();
        return view('admin.product.show', compact('product'));
    }

    public function edit(Request $request, string $id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {

        $validateData = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required|numeric',
                'promotion_price' => 'nullable|numeric',
                'size' => 'required|string',
                'quantity' => 'required|integer',
                'category' => 'required|string'
            ]
        );

        if ($validateData->fails()) {
            dd($validateData);
            return redirect()->back()->withErrors($validateData)->withInput();
        }

        $product = Product::find($id);

        $product->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $name);
            $product->image = $name;
        }
        $product->name = $request->input('name');

        $product->price = $request->input('price');
        $product->promotion_price = $request->input('promotion_price');
        $product->size = $request->input('size');
        $product->quantity = $request->input('quantity');
        $product->category = $request->input('category');
        $product->save();
        session()->flash('success', 'Cập nhật sản phẩm thành công!');
        return redirect()->route('showProduct');
    }


    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('showProduct');
    }



    // public function update(Request $request, string $id)
    // {
    //     $product = Product::find($id);
    //     // dd($product);
    //     $validateData = Validator::make(
    //         $request->all(),
    //         [
    //             'name' => 'required|string',
    //             'description' => 'required|string',
    //             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //             'price' => 'required|numeric',
    //             'promotion_price' => 'nullable|numeric',
    //             'size' => 'required|string',
    //             'quantity' => 'required|integer',
    //             'category' => 'required|string'
    //         ]
    //     );

    //     if ($validateData->fails()) {
    //         return redirect()->back()->withErrors($validateData)->withInput();
    //     }
    //     if ($request->hasFile('image')) {
    //         $image_path = public_path("images/{$product->image}");

    //         if (File::exists($image_path)) {
    //             File::delete($image_path);
    //         }
    //         $image = $request->file('image');
    //         $imageName = time() . '_' . $image->getClientOriginalName();
    //         $image->move(public_path('images'), $imageName);
            
    //     }
    //     $update = AdminProduct::update([
    //         'description '=> $request->description,
    //         'image' => $imageName,
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'promotion_price' => $request->promotion_price,
    //         'size' => $request->size,
    //         'quantity' => $request->quantity,
    //         'category'=> $request->category
    //     ]);
    //     dd($update);
    //     // dd($product);
    //     return redirect()->back()->with('status', 'Cập nhật sản phẩm thành công.');
    // }
}