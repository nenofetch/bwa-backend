<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'products_id',
        'url',
    ];

    public function urlImage(): Attribute
    {
//        return config('app.url'). Storage::url($url);
        return Attribute::make(
            get: fn (string $url) => config('app.url'). Storage::url($url),
        );
    }

}
