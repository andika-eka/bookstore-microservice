@extends('layout/template')

@section('judul', 'Catalog')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div id="flash" data-flash="{{ session('status') }}"></div>
                @endif 
                <div class="card">
                 <h5 class="card-title text-center mt-4 fs-4">Catalog</h5>
                    <div class="card-header">
                        <div class="d-grid gap-2 d-md-flex">
                            <a class="btn btn-outline-success" data-toggle="modal" data-target="#modal-create">Tambah Data <i class="fas fa-plus ml-2"></i></a>
                            <!-- <a href="/exportmahasiswa" class="btn btn-outline-warning  d-inline" id="btn-export">Eksport<i class="fas fa-file-export ml-2"></i></a>
                            <a class="btn btn-outline-info" data-toggle="modal" data-target="#modal-import">Import<i class="fas fa-file-import ml-2"></i></a>   -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="mahasiswatb" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $products) 
                                        <tr>
                                            <td scope="row">{{ $loop->iteration}}</td>
                                            <td>{{ $products->NAMA }}</td>
                                            <td>{{ $products->HARGA_BELI}}</td>
                                            <td>{{ $products->HARGA_JUAL}}</td>
                                            <td>{{ $products->STOK }}</td>
                                            <td>
                                                <a href="/catalog/{{$products->id}}/edit" class="btn btn-outline-success btn-sm mr-2">Edit</a>
                                                <a href="{{$products->id}}/delete" class="btn btn-outline-danger btn-sm" id="btn-hapus">Hapus</a>
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
            <form method="post" action="/" class="modal-content">
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
                            <label for="NAMA">Nama<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('NAMA') is-invalid @enderror" id="NAMA" placeholder="Masukkan Judul Buku" name="NAMA" value="{{old('NAMA')}}">
                            @error('NAMA')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="HARGA_BELI">Harga Beli<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('HARGA_BELI') is-invalid @enderror" id="HARGA_BELI" placeholder="Masukkan Harga Beli" name="HARGA_BELI" value="{{old('HARGA_BELI')}}">
                            @error('HARGA_BELI')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="HARGA_JUAL">Harga Jual<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('HARGA_JUAL') is-invalid @enderror" id="HARGA_JUAL" placeholder="Masukkan Harga Jual" name="HARGA_JUAL" value="{{old('HARGA_JUAL')}}">
                            @error('HARGA_JUAL')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="STOK">Stok<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('STOK') is-invalid @enderror" id="STOK" placeholder="Masukkan Stok Buku" name="STOK" value="{{old('STOK')}}">
                            @error('STOK')
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