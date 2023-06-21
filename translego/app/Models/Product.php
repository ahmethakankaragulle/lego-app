<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'category_id',
        'name',
        'is_active',
        'count',
        'price',
        'image_path',
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}