<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    //Each review belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
