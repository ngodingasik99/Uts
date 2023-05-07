@extends('layout.admin')

@section('title', 'Index')

@section('content')
    
    <div class="container">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Transaction Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Transaksi</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <h5>Kode Transaksi : </h5>
                </div>
                <div class="col-md-9 ">
                  <p class="text-muted">{{ $trs_code }}</p>
                </div>
              </div>
            </div>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Subtotal</th>
                  </tr> 
                </thead>
                <tbody>
                  <?php $p=1 ?>
                  @foreach ($detailTrs as $item)
                  <tr>
                    <th scope="row">{{$p++}}</th>
                    <td>{{$item->product->name}}</td>
                    <td>Rp.{{$item->product->price}}</td>
                    <td>{{$item->qty}}</td>
                    <td>Rp.{{$item->qty * $item->product->price}}</td>
                  </tr>
                  @endforeach
                </tbody>
                <tr></tr>
              </table>
              <h2>Total : Rp.{{$totalPrice}}</h2>
              
            <div class="d-flex">
              <a href="/transaction" class="btn btn-primary mt-3" type="button">Back</a>
           </div>
        </div>
    </div>
@endsection