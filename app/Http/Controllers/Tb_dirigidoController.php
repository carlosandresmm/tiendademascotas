<?php

namespace App\Http\Controllers;

use App\Models\tb_dirigido;
use Illuminate\Http\Request;

class Tb_dirigidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato['tienda_dirigido']=tb_dirigido::paginate(5);
        return view('dirigidos.index',$dato);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dirigidos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro_dirigido=request()->except("_token");
        tb_dirigido::insert($registro_dirigido);
        return redirect('dirigidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_dirigido  $tb_dirigido
     * @return \Illuminate\Http\Response
     */
    public function show(tb_dirigido $tb_dirigido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_dirigido  $tb_dirigido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dirigido = tb_dirigido::FindOrFail($id);
        return view('dirigidos.editar' , compact('dirigido'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_dirigido  $tb_dirigido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro_dirigido=request()->except("_token","_method");
        tb_dirigido::where('id','=', $id)->update($registro_dirigido);
        return redirect('dirigido');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_dirigido  $tb_dirigido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dirigido= tb_dirigido::FindOrFail($id);
        tb_dirigido::destroy($id);
        return redirect('dirigido');

    }
}
