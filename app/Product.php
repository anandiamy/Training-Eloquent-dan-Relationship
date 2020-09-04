<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    public function productDetail()
    {
        return $this->hasOne(ProductDetail::class, 'product_id');
    }

    public function productPhotos()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function getJumlahAttribute()
    {
        return "Jumlah yang melihat " . $this->view;
    }

//    public function setNameAttribute($name)
//    {
//        $this->attributes['name'] = $name;
//    }
//
//    public function setName($name)
//    {
//        $this->attributes['name'] = $name;
//    }
//
//    public function popular()
//    {
//        dd('relasi');
//        return $this->belongsToMany(Category::class, 'product_categories');
//    }
//
//    public function scopePopular($query)
//    {
//        dd('scope');
//        return $query->where('view', '>', 100);
//    }
//
//    public function view()
//    {
//        return $this->belongsToMany(Category::class, 'product_categories');
//    }
//
//    public function getViewAttribute()
//    {
//        return 'ini view dari accessor';
//    }
}
