<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function favorite($product_id)
    {
        $user_id = auth('web')->id();
        $data = [
            'product_id' => $product_id,
            'user_id' => auth('web')->id()
        ];
        Favorite::create($data);
        return redirect()->back()->with('ok', 'Bạn đã yêu thích sản phẩm.');
    }
}
