<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'quantity',
        'purchase_price',
        'sell_price',
    ];

    public function category(){

      return  $this->belongsTo(Category::class);
    }
}
