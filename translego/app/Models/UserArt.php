<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserArt extends Model
{
    use HasFactory;

    protected $table = "user_arts";

    protected $fillable = [
        'user_id',
        'price',
        'name',
        'price',
        'image',
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }
}
