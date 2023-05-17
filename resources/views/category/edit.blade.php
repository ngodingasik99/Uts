@extends('layout.admin')

@section('title', 'Edit')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Edit Kategori</strong> </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kategori</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <form action="/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$category->name}}">
            <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
            @error('name')
            <div class="invalid-feedback">
                Nama produk tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error ('description') is-invalid @enderror" id="exampleInputPassword1" name="description" value="{{$category->description}}">
            @error('description') 
            <div class="invalid-feedback">
                Deskripsi tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            <input type="file" class="form-control @error ('foto') is-invalid @enderror" id="exampleInputPassword1" name="foto" value="{{$category->foto}}"><br>
            <img src="{{asset('storage/' . $category->foto)}}" width="90px" alt="">
        </div>
        <button type="submit" class="btn btn-warning mt-3">Edit</button>
        <a href="/category" class="btn btn-success mt-3">Back</a>
    </form>
</div>
</div>
@endsection
