<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Cart;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    protected $fillable = [
        "user_id",
        "payment_id",
        "status",
        "bukti_transfer",
        "wa_number",
        "total_price",
        "cart_id",
        
    ]; 

    public function cart() : BelongsTo{
        return $this->belongsTo(Cart::class);
    }

}