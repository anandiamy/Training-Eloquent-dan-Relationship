<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $table = 'product_photos';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}