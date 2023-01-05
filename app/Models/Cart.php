<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    protected $fillable = [
        "product_id",
        "user_id",
    ];

    public function product() : BelongsTo{
        return $this->belongsTo(Product::class);
    }

    public function order() : HasMany{
        return $this->hasMany(Order::class);
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }

}