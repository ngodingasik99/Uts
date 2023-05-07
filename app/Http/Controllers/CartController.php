<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    public function index()
    {
        $data['total'] = Cart::total();
        // var_dump($data['cart']['total']); die();
        $data['tampiltabel'] = Cart::tampiltabel();
        return view('cart.index', $data);   
    }

    public function cart_action(Request $request)
    {
        Cart::ambildata($request);
        return redirect('/cart');
    }

    public function ngapus($id)
    {
        Cart::hapus($id);
        return redirect('/cart');

    }

    public function checkout()
    {
        $generate_trs_code = 'CLTS12-'. Str::random(10);
        $carts = Cart::all();

        foreach ($carts as $item) {
            $store = ([
                'trs_code' => $generate_trs_code,
                'product_id' => $item->product_id,
                'qty' => $item->qty
            ]);
            Transaction::create($store);
        }

        DB::table('carts')->truncate();

        return redirect('/transaction');
    }
    
}
