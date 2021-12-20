<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('products.index')// taruh blade disini
        ->with("data", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NAMA'=> 'required',
            'HARGA_BELI'=> 'required',
            'HARGA_JUAL'=> 'required',
            'STOK'=> 'required'
        ],
        [
            'NAMA.required'=>'Judul Buku Wajib Diisi!',
            'HARGA_BELI.required'=>'Harga Beli Wajib Diisi!',
            'HARGA_JUAL.required'=>'Harga Jual Wajib Diisi!',
            'STOK.required'=>'Stok Wajib Diisi!'
        ]);
        Product::create([
            'NAMA' => $request->NAMA,
            'HARGA_BELI' => $request->HARGA_BELI,
            'HARGA_JUAL' => $request->HARGA_JUAL,
            'STOK' => $request->STOK
        ]);
        return redirect('/catalog')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
            $data = Product::find($id);
            return view('products.edit', ['data' => $data]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NAMA'=> 'required',
            'HARGA_BELI'=> 'required',
            'HARGA_JUAL'=> 'required',
            'STOK'=> 'required'
        ],
        [
            'NAMA.required'=>'Judul Buku Wajib Diisi!',
            'HARGA_BELI.required'=>'Harga Beli Wajib Diisi!',
            'HARGA_JUAL.required'=>'Harga Jual Wajib Diisi!',
            'STOK.required'=>'Stok Wajib Diisi!'
        ]);
        $data = Product::find($id);
        $data->update($request->all());
        return redirect('/catalog')->with('status', 'Data Berhasil Diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('/catalog')->with('status', 'Data Berhasil Dihapus');
    }
}