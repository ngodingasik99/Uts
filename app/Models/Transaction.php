<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'trs_code',
        'product_id',
        'qty'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
