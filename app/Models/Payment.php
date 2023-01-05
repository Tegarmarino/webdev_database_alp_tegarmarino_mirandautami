<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payment";

    protected $fillable = [
        "payment_method",
        "account_number",
    ];

    public function books(): HasMany{
        return $this->hasMany(Book::class);
    }


}