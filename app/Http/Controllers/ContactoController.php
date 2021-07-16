<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_user_sesion = Auth::user()->id;
        $sql = "SELECT * FROM contactos WHERE id_usuario = $data_user_sesion";
        $contacto_user = DB::select($sql);
          $usuarios = Contacto::all();
          return view('contacto.form',compact('usuarios', 'data_user_sesion', 'contacto_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Contacto();
        $usuarios->id = request('id');
        $usuarios->direction = request('direction');
        $usuarios->phone = request('phone');
        $usuarios->save();
        return view('home');

       // $data = request()->except('_token');
        //contacto::insert($data);
        //return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Contacto::findOrFail($id);
        //$datosEmpleado = request()->except('_token',);
        return view('contacto.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $usuario = request()->except(['_token','_method']);
        Contacto::where('id','=','$id')->update($data);
        $usuario=Contacto::findOrFail($id);
        return view('contacto.edit',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
