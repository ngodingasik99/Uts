<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    public function min($id)
    {
        // $cart = Cart::where('product_id', $id);

        $carts = DB::table('carts')
                ->where('product_id', '=', $id)
                ->first();
                // ->get();
                
        // dd($carts->qty);
        if($carts->qty == 1){
            // dd($carts);
            Cart::destroy($carts->id);
        } else {
            Cart::where('product_id', $id)->update([
                'qty' => $carts->qty - 1
            ]);
        }

        return redirect('/cart');
    }

    public function plus($id)
    {
        $carts = DB::table('carts')
        ->where('product_id', '=', $id)
        ->first();

        // dd($carts);

        Cart::where('product_id', $id)->update([
            'qty' => $carts->qty + 1
        ]);

        return redirect('/cart');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Cart';
        $data['carts'] = Cart::all();
        $data['totalPrice'] = 0;

        foreach ($data['carts'] as $cart) {   
            $data['totalPrice'] +=  $cart->product->price * $cart->qty;
        }
        // dd($data['totalPrice']);
        return view('cart.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $carts = DB::table('carts')
                ->where('product_id', '=', $id)
                ->first();
        // $cart = Cart::find($id);
        // dd($carts);
        if ( is_null($carts)) {
            Cart::create([
                'product_id' => $id,
                'qty' => 1
            ]);
        } else {
            Cart::where('product_id', $id)->update([
                'qty' => $carts->qty + 1
            ]);
        }

        return redirect('/cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        Cart::create([
            'product_id' => $request->product_id

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
