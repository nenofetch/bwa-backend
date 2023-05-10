<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'name',
        'description',
        'price',
        'product_categories_id',
        'tags'
    ];

    public  function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public  function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id', 'id');
    }
}
