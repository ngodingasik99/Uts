@extends('layout.admin')

@section('title', 'Detail')

@section('content')
<div class="d-flex row gap-6 justify-content-center">
    <div class="card text-bg-light mb-3 mt-3" style="max-width: 50rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="color:indigo"><h3>{{ $product->name }}</h3> </li><br>
        <li class="list-group-item">Kategori: {{$product->category->name}}</li>
        <li class="list-group-item">Deskripsi: {{$product->description}}</li>
        <li class="list-group-item" style="color: aliceblue" >Harga : RP {{ $product->price }}</li>
      </ul>
      <div class="card-body">
        <form action="/katalog" method="post" id="toCartForm-{{$product->id}}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input class="btn btn-primary" type="submit" value="Tambahkan ke keranjang">
        </form>
      </div>
  </div>
</div>
@endsection
