@extends('layout/template')

@section('judul', 'Sales')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div id="flash" data-flash="{{ session('status') }}"></div>
                @endif 
                <div class="card">
                 <h5 class="card-title text-center mt-4 fs-4">Sales</h5>
                    <div class="card-header">
                        <div class="d-grid gap-2 d-md-flex">
                            <a class="btn btn-outline-success" data-toggle="modal" data-target="#modal-create">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="mahasiswatb" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Refunded</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $sales) 
                                        <tr>
                                            <td scope="row">{{ $loop->iteration}}</td>
                                            <td>{{ $sales->product->NAMA}}</td>
                                            <td>{{ $sales->REFUND}}</td>
                                            <td>{{ $sales->created_at}}</td>
                                            <td>
                                                <a href="/sales/{{$sales->id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                                <a href="/sales/{{$sales->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</section>
    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <form method="post" action="/sales" class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> 
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                           <select class="form-control select2" style="width: 100;" name="product_id" id="product_id" value="{{old('NAMA')}}">
                           <option disabled value>Pilih Judul Buku</option>
                           @foreach ($pro as $item)
                           <option value="{{$item->id}}">{{$item->NAMA}}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="REFUND">REFUND<span style="color: red; display:block; float:right">*</label>
                            <select class="form-control select2" style="width: 100;" name="REFUND" id="REFUND" value="{{old('REFUND')}}">
                            <option disabled value>refund </option>
                            <option value="no">NO</option>
                            <option value="yes">YES</option>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-end">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>  
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection