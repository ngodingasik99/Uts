@extends('layout.admin')

@section('title', 'Index')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Produk</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>

      <div class="container item-center">
        <div class="d-flex">
            <a href="/product/add" class="btn btn-primary mt-3" type="button">+ Tambah Produk</a>
         </div><br>

              <table class="table table-hover text-light">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>
                        <div class="btn-group">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <a href="{{url('product/'. $item->id)}}" class="btn btn-info btn-sm" style="border-radius: 7px;">
                              <i class="fas fa-info"></i></a>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="/product/{{$item->id}}/edit" class="btn btn-warning btn-sm" style="border-radius: 7px;">
                                <i class="fas fa-edit"></i></a>
                              </div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="/product/{{$item->id}}/delete" class="btn btn-danger btn-sm" style="border-radius: 7px;">
                                <i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                        {{-- <a href="{{url('product/'. $item->id)}}" class="btn btn-info"><i class="fas fa-info"></i></a>
                        <a href="/product/{{$item->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="/product/{{$item->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
      </div>
    </div>



@endsection
