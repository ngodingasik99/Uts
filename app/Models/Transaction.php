<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'qty',
        'sub_total',
        'total'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
