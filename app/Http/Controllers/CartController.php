<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
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
    
}
