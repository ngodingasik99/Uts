@extends('layout.admin')

@section('title', 'Detail')

@section('content')

<div class="content-wrapper">
  <div class="container">
    <br>
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 18rem;"><br>
          <?php $p=1 ?>
          <?php $p++ ?>
          <img src="{{asset('storage/' . $product->foto)}}" class="card-img-top" alt="detailProduk">
          <div class="card-body">
            <h1 class="card-title">{{ $product->name }}</h1><br>
            <p class="text-muted">Harga: {{$product->price}}</p>
            <p class="card-text">Kategori: {{$product->category->name}}</p>
            <p class="card-text">{{$product->description}}</p>
            
            <div class="row">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle mr-3" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  Add to Cart
                </button>
                <form class="dropdown-menu p-4" action="/cart_act" method="post" enctype="multipart/form-data"> 
                  @csrf
                  <div class="mb-3">
                    <label for="qty" class="form-label">Harga</label>
                    <input type="text" name="harga" id="harga" value="{{ $product->price }}" readonly> 
                    <input type="text" name="id" id="id" hidden value="{{ $product->id }}" readonly> 
                  </div>
                  <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity" onkeyup="InputSub();">
                  </div>
                  <div class="mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="number" class="form-control" id="subtotal" name="subtotal" placeholder="subtotal" readonly>
                  </div>
                  {{-- <a href="/cart/{{$product->id}}/carts">Add</a> --}}
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>
              <a href="/product" class="btn btn-success">Back</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function InputSub() {
        var harga =  parseInt(document.getElementById('harga').value);
        var jumlahbarang =  parseInt(document.getElementById('qty').value);
        var hasil = parseInt(harga) * parseInt(jumlahbarang);
        if (!isNaN(hasil)) {
          document.getElementById('subtotal').value = hasil;
          console.log(hasil)
        };
        // var arr = document.getElementsByName('totalsemua');
        // for(var i=0;i<arr.length;i++){
        //     if(parseInt(arr[i].value))
        //         hasil += parseInt(arr[i].value); 
        //     }
        // document.getElementById('total').value = hasil;
      }
</script>
@endsection
