<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $product = 'shoe';
    public $table = 'shoe';
    protected $fillable = [
        'description',
        'image',
        'name',
        'price',
        'promotion_price',
        'size',
        'quantity',
        'category',
    ];
}
