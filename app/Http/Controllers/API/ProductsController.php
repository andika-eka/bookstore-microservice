<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Product::all();
        return Response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'NAMA'=> 'required',
            'HARGA_BELI'=> 'required|numeric',
            'HARGA_JUAL'=> 'required|numeric',
            'STOK'=> 'required|numeric'
        ]);

        try{
            $response = Product::create([
                'NAMA' => $request->NAMA,
                'HARGA_BELI' => $request->HARGA_BELI,
                'HARGA_JUAL' => $request->HARGA_JUAL,
                'STOK' => $request->STOK
            ]);
            return response()->json([
                'data' => $response,
                'success' => true,
                'notif'=>'product berhasil di daftarkan',     
            ],200);
        }
        catch (\Exception $e){
            return response()->json([
                'message' => $e,
                'success' => false,
                'notif'=>'Error',               
            ], 422);
        }
            
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
        $data =  Product::find($id);
        $data->sale; //a bit weird but it works
        return Response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'NAMA'=> 'required',
            'HARGA_BELI'=> 'required|numeric',
            'HARGA_JUAL'=> 'required|numeric',
            'STOK'=> 'required|numeric'
        ]);

        try{
            $product = Product::find($id);
            $product->NAMA = $request->NAMA;
            $product->HARGA_BELI = $request->HARGA_BELI;
            $product->HARGA_JUAL = $request->HARGA_JUAL;
            $product->STOK = $request->STOK;
            $product->save();
            return response()->json([
                'data' => $product,
                'success' => true,
                'notif'=>'product berhasil diupdate',     
            ],200);
        }
        catch (\Exception $e){
            return response()->json([
                'message' => $e,
                'success' => false,
                'notif'=>'Error',               
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $data = Product::find($id);       //cari id yang dipencet
            $data-> delete();                  //delete id tersebut
            return response()->json([
                'success' => true,
                'notif'=>'berhasil delete data',                
            ]);
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'notif'=>$e,               
            ], 422);
        } 
    }
}
