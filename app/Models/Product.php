<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $appends =['Favorited'];
    protected $product = 'shoe';
    public $table = 'shoe';
    public function getIsFavoritedAttribute(){
        $favorited = Favorite::where(['product_id'=> $this->id, 'user_id'=>$this->id])->first();
        return $favorited ? true : false;
    }
}
