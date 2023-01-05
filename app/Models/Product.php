<?php

namespace App\Models;

use App\Models\Product as ModelsProducts;
use App\Models\Category;
use App\Models\Review;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = "product";

    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "image_title",
        "image_1",
        "image_2",
        "image_3",
        "image_4",
        "image_5",
        "image_6",
        "image_7",
        "image_8",
        "description",
        "category_id",
        
    ];

    public function category() : BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function review(): HasMany{
        return $this->hasMany(Review::class);
    }

    public function cart(): HasMany{
        return $this->hasMany(Cart::class);
    }
}