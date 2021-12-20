@extends('layout/template')

@section('judul', 'Refund')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div id="flash" data-flash="{{ session('status') }}"></div>
                @endif 
                <div class="card">
                 <h5 class="card-title text-center mt-4 fs-4">Refund</h5>
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
                                        <th scope="col">Id Sales</th>
                                        <th scope="col">Resellable</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $refund) 
                                        <tr>
                                            <td scope="row">{{ $loop->iteration}}</td>
                                            <td>{{ $refund->ID_SALES}}</td>
                                            <td>{{ $refund->RESELLABLE}}</td>
                                            <td>
                                                <a href="/refunds/{{$refund->id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                                <a href="/refunds/{{$refund->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
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
            <form method="post" action="/refunds" class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="ID_SALES">id sales<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('ID_SALES') is-invalid @enderror" id="ID_SALES" placeholder="Masukkan Harga Beli" name="ID_SALES" value="{{old('ID_SALES')}}">
                            @error('ID_SALES')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="RESELLABLE">resellabel<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('RESELLABLE') is-invalid @enderror" id="RESELLABLE" placeholder="Masukkan Harga Beli" name="RESELLABLE" value="{{old('RESELLABLE')}}">
                            @error('RESELLABLE')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
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