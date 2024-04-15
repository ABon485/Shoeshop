<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart2 extends Model
{
	public function updateQty($id, $qty)
    {
        if ($this->items && array_key_exists($id, $this->items)) {
            $giohang = $this->items[$id];
            $giohang['qty'] = $qty;
            $giohang['price'] = $giohang['item']->unit_price * $qty;
            $this->items[$id] = $giohang;
            $this->calculateTotal();
        }
    }

    private function calculateTotal()
    {
        $this->totalQty = 0;
        $this->totalPrice = 0;

        foreach ($this->items as $giohang) {
            $this->totalQty += $giohang['qty'];
            $this->totalPrice += $giohang['price'];
        }
    }
}