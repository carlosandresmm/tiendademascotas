<?php

namespace App\Http\Controllers;

use App\Models\tb_marca;
use Illuminate\Http\Request;

class tb_marcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['marca'] = tb_marca::paginate(5);
        return view('marca.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.crear');
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato_marca = request()->except("_token");
        
        tb_marca::insert($dato_marca);
        //return response()->json($dato_marca); 
        return redirect('marca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function show(tb_marca $tb_marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_marca $tb_marca)
    {
        $dato_marca = tb_marca::finOrFail($id);
        return view ('marca.editar',compact('dato_marca'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_marca $tb_marca)
    {
        $data_update = request()->except("_token","_method ");

        if($request->hasFile('imagen')){
            $marca = tb_marca::findOrFail($id);
            storage::delete('public/' . $marca->imagen);

            $data_update['imagen']=$request->file('imagen')->store('uploads','public');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_marca  $tb_marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_marca $tb_marca)
    {
        $data_marca = tb_marca::finOrFail($id);
        if(storage::delete('public/'.$data_marco->imagen)){
            tb_marca::destroy($id);
        }
        return redirect('marca');
    }
}
