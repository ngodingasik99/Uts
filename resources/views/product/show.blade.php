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
              {{-- <a href="/cart/{{$product->id}}carts"><input class="btn btn-primary" type="submit" value="Add to Cart"></a> --}}
            <div class="row">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle mr-3" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  Add to Cart
                </button>
                <form class="dropdown-menu p-4" action="/cart/{{$product->id}}carts" method="post">
                  <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity">
                  </div>
                  <div class="mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="number" class="form-control" id="exampleDropdownFormPassword2" name="subtotal" placeholder="subtotal" disabled>
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>

              <a href="/product" class="btn btn-success">Back</a>
            </div>
        {{-- </form> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
