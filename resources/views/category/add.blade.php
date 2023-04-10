@extends('layout.admin')

@section('title', 'Add')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Tambah Kategori</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
    <form action="/category/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror " id="exampleInputEmail1" name="name">
            <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
            @error('name')
            <div class="invalid-feedback">
                Nama produk tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error ('description') is-invalid @enderror" id="exampleInputPassword1" name="description">
            @error('description')
            <div class="invalid-feedback">
                Deskripsi tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            <input type="file" class="form-control @error ('foto') is-invalid @enderror" id="exampleInputPassword1" name="foto">
            @error('foto')
            <div class="invalid-feedback">
                Foto tidak boleh kosong
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="/category" class="btn btn-success mt-3">Back</a>
    </form>
</div>
@endsection
