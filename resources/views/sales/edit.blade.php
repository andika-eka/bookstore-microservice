@extends('layout/template')

@section('judul', 'Edit Data Sales')

@section('container')
<section>
    <div class="container">
        <div class="row">
        <div class="col-7">
        <div class="card">
            <div class="card-header">
            <h2 class="card-title"><b>Edit Judul Buku</b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-2 ml-3 mr-3"> 
            <form method="post" action="/sales/{{$data->id}}/update">
                    @method('patch') 
                    @csrf
                    
                    <div class="form-group">
                            <select class="form-control select2" style="width: 100;" name="product_id" id="product_id">
                                <option disabled value>Pilih Judul Buku</option>
                                <option value="{{$data->product_id}}">{{$data->product->NAMA}}</option>
                                @foreach ($pro as $item)
                                <option value="{{$item->id}}">{{$item->NAMA}}</option>
                                @endforeach
                            </select>
                     </div>
                    <div class="form-group">
                        <label for="REFUND">REFUND<span style="color: red; display:block; float:right">*</label>
                            <select class="form-control select2" style="width: 100;" name="REFUND" id="REFUND">
                            <option disabled value>refund </option>
                            <option value="no">NO</option>
                            <option value="yes">YES</option>
                            </select>
                        @error('REFUND')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="sumbit" class="btn btn-outline-primary mr-2">Simpan</button>
                        <a href="/sales" class="btn btn-outline-danger">Batal</a>
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
