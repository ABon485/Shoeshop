<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderedModel extends Model
{
    use HasFactory;
    protected $table = 'ordered';
    protected $fillable = ['id' , 'quantity', 'userID', 'productName','total', 'status','created_at','updated_at'] ;
}
