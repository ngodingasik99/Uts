@extends('layout.admin')

@section('title', 'Index')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaction List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Transaction List</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>

      <div class="container item-center">
        
              <table class="table table-hover text-light">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $k=1 ?>
                    @foreach ($transactions as $item)
                  <tr>
                    <th scope="row">{{$k++}}</th>
                    <td>{{$item->trs_code}}</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                    <td>
                        <div class="btn-group">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <a href="{{url('transaction/'. $item->trs_code)}}" class="btn btn-info btn-sm" style="border-radius: 7px;">
                              <i class="fas fa-info"></i></a>
                            </div>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
      </div>
    </div>



@endsection
