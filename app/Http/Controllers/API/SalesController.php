<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        //
        $data = Sale::with('product')->get();
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
            'REFUND'=> 'required',
            'product_id'=> 'required',
        ]);
        DB::beginTransaction();
        try{
            $response = Sale::create([
                'REFUND' => $request->REFUND,
                'product_id' => $request->product_id,
            ]);
            $product = Product::find($request->product_id);
            $product -> STOK  = $product -> STOK - 1;
            $product ->save();
            DB::commit();
            return response()->json([
                'data' => $response,
                'success' => true,
                'notif'=>'sale berhasil di daftarkan',     
            ],200);
        }
        catch (\Exception $e){
            DB:rollback();
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
        $data = Sale::find($id);
        $data->product;
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
            'REFUND'=> 'required'
        ]);
        try{
            $data = Sale::find($id);
            $data->update($request->all()); return response()->json([
                'data' => $data,
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
        DB::beginTransaction();
        try{
            $data = Sale::find($id);
            $data->delete();
            $product = Product::find($data->product_id);
            $product -> STOK  = $product -> STOK + 1;
            $product->save();
            DB::commit();
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
