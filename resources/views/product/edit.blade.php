@extends('layout.admin')

@section('title', 'Edit')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Edit Produk</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
              <li class="breadcrumb-item active">Produk </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">

        <form action="/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$product->name}}">
                <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
                @error('name')
                <div class="invalid-feedback">
                    Nama produk tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" class="form-control @error ('price') is-invalid @enderror" id="exampleInputPassword1" name="price" value="{{$product->price}}">
                @error('price')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error ('description') is-invalid @enderror" id="exampleInputPassword1" name="description" value="{{$product->description}}">
                @error('description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
                @enderror
            </div>
            <label for="exampleInputEmail1" class="form-label">Kategori</label><br>
            <select class="form-select @error ('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" value="{{$product->name}}">
                <option selected></option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected': ''}}>
                    {{$category->name}}
                </option>
                @endforeach
              </select>
              @error('product_name')
                <div class="invalid-feedback">
                </div>
              @enderror
              <div class="mb-3 mt-3">
                <label for="exampleInputPassword1" class="form-label">Foto</label>
                <input type="file" class="form-control @error ('foto') is-invalid @enderror" id="exampleInputPassword1" name="foto"><br>
                <img src="{{asset('storage/' . $product->foto)}}" width="90px" alt="">
            </div>
              {{-- <div class="mb-3 mt-3">
                <label for="exampleInputPassword1" class="form-label">Foto</label>
                <input type="file" class="form-control @error ('foto') is-invalid @enderror" id="exampleInputPassword1" name="foto">
                <div class="mt-3">
                  <img src="{{asset('storage/' . $product->foto)}}" width="90px" alt="">
                </div>
              </div> --}}
              <button type="submit" class="btn btn-warning mt-3">Simpan</button>
              <a href="/product" class="btn btn-success mt-3">Back</a>
        </form>
    </div>
</div>
</div>
@endsection
