@extends('layout.admin')

@section('title', 'Detail')

@section('content')

<div class="content-wrapper">
  <div class="container">
    <br>
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 18rem;"><br>
        {{-- <form action="/katalog" method="post" id="toCartForm-{{$product->id}}"> --}}
          {{-- @csrf --}}
          <img src="{{asset('storage/' . $product->foto)}}" class="card-img-top" alt="detailProduk">
          <div class="card-body">
            <h1 class="card-title">{{ $product->name }}</h1><br>
            <p class="text-muted">Harga : Rp.{{ $product->price }}</p>
            <p class="card-text">Kategori: {{$product->category->name}}</p>
            <p class="card-text">{{$product->description}}</p>
              {{-- <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
              <a href="/addcart/{{$product->id}}"><input class="btn btn-primary" type="submit" value="Add to Cart"></a>
              <a href="/product" class="btn btn-success">Back</a>
        {{-- </form> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
