@extends('layout.admin')

@section('title', 'Index')

@section('content')
    
    <div class="container">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Cart</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <a href="/product/add" class="btn btn-primary mt-3" type="button">Checkout</a>
                <div class="col mt-3">
                </div>
             </div><br> 
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Action</th>
                  </tr> 
                </thead>
                <tbody>
                  <?php $p=1 ?>
                  @foreach ($tampiltabel as $item)
                  <tr>
                    <th scope="row">{{$p++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{$item->subtotal}}</td>
                    <td>
                      <a href="/cart/{{$item->id_cart}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tr>
                  <td>
                    @foreach ($total as $tot)
                      {{$tot->total}}
                    @endforeach
                  </td>
                </tr>
              </table>
        </div>
    </div>
@endsection