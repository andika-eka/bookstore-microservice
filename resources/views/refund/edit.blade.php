@extends('layout/template')

@section('judul', 'Edit Data Refunds')

@section('container')
<section>
    <div class="container">
        <div class="row">
        <div class="col-7">
        <div class="card">
            <div class="card-header">
            <h2 class="card-title"><b>Edit Data Refunds</b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2 ml-3 mr-3"> 
            <form method="post" action="/refunds/{{$data->id}}/update">
                    @method('patch') 
                    @csrf
                    <div class="form-group">
                        <label for="ID_SALES">id sales<span style="color: red; display:block; float:right">*</label>
                        <input type="text" class="form-control @error('ID_SALES') is-invalid @enderror" id="ID_SALES" placeholder="Masukkan ID_SALES Mahasiswa" name="ID_SALES" value="{{$data->ID_SALES}}">
                        @error('ID_SALES')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="RESELLABLE">resellable<span style="color: red; display:block; float:right">*</label>
                        <input type="text" class="form-control @error('RESELLABLE') is-invalid @enderror" id="RESELLABLE" placeholder="Masukkan RESELLABLE Mahasiswa" name="RESELLABLE" value="{{$data->RESELLABLE}}">
                        @error('RESELLABLE')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="sumbit" class="btn btn-outline-primary mr-2">Simpan</button>
                        <a href="/refunds" class="btn btn-outline-danger">Batal</a>
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
