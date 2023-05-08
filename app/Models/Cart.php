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

    protected function ambildata($data)
    {
        $product_id = $data->input('id');
        $qty = $data->input('qty');
        $subtotal = $data->input('subtotal');
        return DB::insert("INSERT INTO carts (product_id, qty, subtotal) VALUES ('$product_id', '$qty', '$subtotal')");
    } 

    protected function tampiltabel()
    {
        return DB::select("select * from carts join products on carts.product_id = products.id");
    }

    protected function total()
    {
        return DB::select("SELECT SUM(subtotal) as total FROM carts");
    }

    protected function hapus($data)
    {
        return DB::delete("DELETE FROM carts WHERE id='$data'");
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
