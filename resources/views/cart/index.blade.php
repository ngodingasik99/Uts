@extends('layout.admin')

@section('title', 'Index')

@section('content')
    @php
      $no=1;  
    @endphp
    <div class="content-wrapper">
        <div class="container item-center">
            <div class="content-header mt-5">
                    <div class="mt-3">
                        <center>
                            <h3>Cart</h3>
                        </center>
                </div>
                
            </div>
            
            <div>
                <table class="table mt-2">
                    <thead>
                        <tr class="table-primary">
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td><img src="{{asset('storage/' . $cart->product->foto)}}" width="50" alt="cart"></td>
                                
                                <td>{{ $cart->product->name }}</td>
                                <td>{{ $cart->product->price }}</td>
                                <td>
                                    <div class="col">
                                        <a href="/cart/{{ $cart->product_id }}/min" class="btn btn-secondary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                        {{ $cart->qty }}
                                        <a href="/cart/{{ $cart->product_id }}/plus" class="btn btn-secondary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    </div>
                                    {{-- <a href="/product/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/product/{{ $product->id }}/delete" class="btn btn-danger">Delete</a> --}}
                                </td>
                            </tr>      
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                <h2>TOTAL : Rp.{{ $totalPrice }}</h2>
            </div>
        
        </div>
    </div>
@endsection