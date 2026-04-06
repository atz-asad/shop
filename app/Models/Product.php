<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'subtitle',
        'slug',
        'feature_image',
        'regular_price',
        'sale_price',
        'rating',
        'short_desc',
        'long_desc',
        'brand_id',
    ];


    public function gallery(){
        return $this->hasMany(Gallery::class, 'product_id', 'id');
    }

    public function Brand(){
        return $this->belongsTo(Brand::class);
    }


    public function categoryes(){
        return $this->belongsToMany(Category::class, 'category_product');
        
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
        
    }

}

