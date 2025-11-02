<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'price',
        'brand',
        'description',
        'image',
        'condition',
    ];

//    public function likedByUsers()
//{
//    return $this->belongsToMany(User::class, 'likes', 'product_id', 'user_id');
//}

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function categories()
    {
        return $this->hasMany(Sell::class);
    }
}
