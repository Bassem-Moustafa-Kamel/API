<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Each Product may has more than one review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
