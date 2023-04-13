<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'qty'
    ];

    // protected function ambildata($data)
    // {
    //     $product_id = $data->input('product_id');
    //     $qty = $data->input('qty');
    //     $subtotal = $data->input('subtotal');
    //     return DB::insert("insert into cart (product_id, qty, subtotal) values ('$product_id, $qty, $subtotal')");
    // } 

    // protected function tampiltabel()
    // {
    //     return DB::select("select * from cart join product on cart.product_id = product.id");
    // }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
