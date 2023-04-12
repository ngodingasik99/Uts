@extends('layout.admin')

@section('title', 'Index')

@section('content')
    
    <div class="container">
        <div class="content-wrapper">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    {{-- @php
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
    </div> --}}
@endsection