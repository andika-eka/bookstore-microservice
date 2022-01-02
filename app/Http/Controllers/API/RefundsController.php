<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class RefundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Refund::with('Sale.product')->get(); // WHAT A FUCKING MIRACLE 
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
            'ID_SALES'=> 'required',
            'RESELLABLE'=> 'required'
        ]);

        DB::beginTransaction();
        try {
            $response = Refund::create([
                'ID_SALES' => $request->ID_SALES,
                'RESELLABLE' => $request->RESELLABLE
            ]);
            
            $sale = Sale::find($request->ID_SALES);
            $sale->REFUND = "YES";
            $sale->save();
            if( $request->RESELLABLE == true){
                $product = Product::find($sale->product_id);
                $product -> STOK  = $product -> STOK + 1;
                $product ->save();
            }

            DB::commit();
            return response()->json([
                'data' => $response,
                'success' => true,
                'notif'=>'refund berhasil di daftarkan',
            ],200);
        }
        catch (\Exception $e){
            DB::rollback();
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
        try{
            $data = Refund::find($id);
            $data->sale->product;
            return Response()->json($data);
        }
        catch (\Exception $e){
            return response()->json([
                'message' => $e,
                'success' => false,
                'notif'=>'data not found',               
            ], 422);
        }
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
            'RESELLABLE'=> 'required'
        ]);
        try{
            $data = Refund::find($id);
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
            $data = Refund::find($id);
            $data->delete();
            $sale = Sale::find($data->ID_SALES);
            $sale->REFUND = "NO";
            $sale->save();
            DB::commit();
            return response()->json([
                'success' => true,
                'notif'=>'berhasil delete data',                
            ]);
        }catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'notif'=>$e,               
            ], 422);
        } 
    }
}
