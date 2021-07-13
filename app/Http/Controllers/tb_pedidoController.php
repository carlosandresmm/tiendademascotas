<?php

namespace App\Http\Controllers;

use App\Models\tb_pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tb_pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato['tienda_pedido']=tb_pedido::paginate(5);
        return view('pedidos.index',$dato);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sql = "SELECT id, medio_de_pago FROM tb_medio_pagos";
        $medios = DB::select($sql);
        // $datos['medio_pago'] = tb_medio_pago::all();
        return view('pedidos.crear', compact('medios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro_pedidos=request()->except("_token");
        tb_pedido::insert($registro_pedidos);
        return redirect('pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_pedido  $tb_pedido
     * @return \Illuminate\Http\Response
     */
    public function show(tb_pedido $tb_pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_pedido  $tb_pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sql = "SELECT id, medio_de_pago FROM tb_medio_pagos";
        $medios = DB::select($sql);
        $pedido = tb_pedido::FindOrFail($id);
        return view('pedidos.editar' , compact('pedido', 'medios'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_pedido  $tb_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro_pedidos=request()->except("_token","_method");
        tb_pedido::where('id','=', $id)->update($registro_pedidos);
        return redirect('pedidos');
    
} 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_pedido  $tb_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = tb_pedido::FindOrFail($id);
        tb_pedido::destroy($id);
        return redirect('pedidos');
    }
}
