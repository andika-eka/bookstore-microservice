@extends('layout/template')

@section('judul', 'Edit Katalog')

@section('container')
<section>
    <div class="container">
        <div class="row">
        <div class="col-7">
        <div class="card">
            <div class="card-header">
            <h2 class="card-title"><b>Edit Katalog</b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2 ml-3 mr-3"> 
            <form method="post" action="/catalog/{{$data->id}}/update">
                    @method('patch') 
                    @csrf
                        <div class="form-group">
                            <label for="NAMA">Nama<span style="color: red; display:block; float:right">*</label>
                            <input type="text" class="form-control @error('NAMA') is-invalid @enderror" id="NAMA" placeholder="Masukkan Judul Buku" name="NAMA" value="{{$data->NAMA}}">
                            @error('NAMA')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="HARGA_BELI">Harga Beli<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('HARGA_BELI') is-invalid @enderror" id="HARGA_BELI" placeholder="Masukkan Harga Beli" name="HARGA_BELI" value="{{$data->HARGA_BELI}}">
                            @error('HARGA_BELI')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="HARGA_JUAL">Harga Jual<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('HARGA_JUAL') is-invalid @enderror" id="HARGA_JUAL" placeholder="Masukkan Harga Jual" name="HARGA_JUAL" value="{{$data->HARGA_JUAL}}">
                            @error('HARGA_JUAL')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="STOK">Stok<span style="color: red; display:block; float:right">*</label>
                            <input type="number" class="form-control @error('STOK') is-invalid @enderror" id="STOK" placeholder="Masukkan Stok Buku" name="STOK" value="{{$data->STOK}}">
                            @error('STOK')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="sumbit" class="btn btn-outline-primary mr-2">Simpan</button>
                        <a href="/catalog" class="btn btn-outline-danger">Batal</a>
                    </div>
            </form>
        </div>
                    <!-- /.card-body -->
        </div>
                <!-- /.card -->
        </div>

        </div>      
        </div>
    </div>
</section>    
@endsection