<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Sale::with('product')->get();
        $pro = Product::all();
        // $data = Sale::all();
        // $data = Sales::with('products');
        return view('sales.index')// taruh blade disini
        ->with("data", $data)
        ->with("pro", $pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'REFUND'=> 'required',
            'product_id'=> 'required',
        ],
        [
            'REFUND.required'=>'REFUND Wajib Diisi!',
        ]);
        DB::beginTransaction();
        Sale::create([
            'REFUND' => $request->REFUND,
            'product_id' => $request->product_id,
        ]);
        $product = Product::find($request->product_id);
        $product -> STOK  = $product -> STOK - 1;
        $product ->save();
        DB::commit();
        return redirect('/sales')->with('status', 'Data Berhasil Ditambahkan');
       
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
        
        // $data = Sale::find($id);
        // return view('sales.edit', ['data'=> $data]);

        $data = Sale::find($id);
        $pro = Product::all();
        return view('sales.edit')// taruh blade disini
        ->with("data", $data)
        ->with("pro", $pro);
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
            'REFUND'=> 'required'
        ],
        [
            'REFUND.required'=>'REFUND Wajib Diisi!'
        ]);
        $data = Sale::find($id);
        $data->update($request->all());
        return redirect('/sales')->with('status', 'Data Berhasil Diubah');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::beginTransaction();
        $data = Sale::find($id);
        $data->delete();
        $product = Product::find($data->product_id);
        $product -> STOK  = $product -> STOK + 1;
        DB::commit();

        return redirect('/sales')->with('status', 'Data Berhasil Dihapus');
    }
}