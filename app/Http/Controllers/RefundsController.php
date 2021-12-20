<?php

namespace App\Http\Controllers;

use App\Models\Refunds;
use Illuminate\Http\Request;

class RefundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Refunds::all();
        //  $data = Refunds::with('products');
         return view('refund.index')// taruh blade disini
         ->with("data", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refund.create');
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
            'ID_SALES'=> 'required',
            'RESELLABLE'=> 'required'
        ],
        [
            'ID_SALES.required'=>'ID_SALES Wajib Diisi!',
            'RESELLABLE.required'=>'RESELLABLE Wajib Diisi!'
        ]);
        Refunds::create([
            'ID_SALES' => $request->ID_SALES,
            'RESELLABLE' => $request->RESELLABLE
        ]);
        return redirect('/refunds')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Refunds::find($id);
        return view('refund.edit', ['data' => $data]);
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
            'ID_SALES'=> 'required',
            'RESELLABLE'=> 'required'
        ],
        [
            'ID_SALES.required'=>'ID_SALES Wajib Diisi!',
            'RESELLABLE.required'=>'RESELLABLE Wajib Diisi!'
        ]);
        $data = Refunds::find($id);
        $data->update($request->all());
        return redirect('/refunds')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Refunds::find($id);
        $data->delete();
        return redirect('/refunds')->with('status', 'Data Berhasil Dihapus');
    }
}