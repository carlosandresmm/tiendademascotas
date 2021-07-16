<?php

namespace App\Http\Controllers;

use App\Models\tb_producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\DB;

class tb_productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = "SELECT P.id, P.nombre_tb_productos, P.fec_ingreso, P.imagen, P.precio, D.nombres, M.nombre, TA.nombre_tipo_alimento
            FROM tb_productos P 
            INNER JOIN tb_marcas M ON M.id = P.marca_id
            INNER JOIN tb_tipos_alimentos TA ON TA.id = P.tipo_alimento_id
            INNER JOIN tb_dirigidos D ON D.id = P.dirigido_a_id
        ";
        $tienda_producto = DB::select($sql);
        // $dato['tienda_producto']=tb_producto::paginate(5);
        return view('productos.productov', compact('tienda_producto'));
    }

    public function admin()
    {
        $sql = "SELECT P.id, P.nombre_tb_productos, P.fec_ingreso, P.imagen, P.precio, D.nombres, M.nombre, TA.nombre_tipo_alimento
            FROM tb_productos P 
            INNER JOIN tb_marcas M ON M.id = P.marca_id
            INNER JOIN tb_tipos_alimentos TA ON TA.id = P.tipo_alimento_id
            INNER JOIN tb_dirigidos D ON D.id = P.dirigido_a_id
        ";
        $tienda_producto = DB::select($sql);
        // $dato['tienda_producto']=tb_producto::paginate(5);
        return view('productos.index', compact('tienda_producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sql1 = "SELECT id, nombre FROM tb_marcas";
        $marcas = DB::select($sql1);
        $sql2 = "SELECT id, nombre_tipo_alimento FROM tb_tipos_alimentos";
        $tipo_alimentos = DB::select($sql2);
        $sql3 = "SELECT id, nombres FROM tb_dirigidos";
        $dirigidos = DB::select($sql3);
        return view('productos.crear', compact('marcas', 'tipo_alimentos', 'dirigidos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro_productos = request()->except("_token");

        if ($request->hasFile('imagen')) {
            $registro_productos['imagen'] = $request->file('imagen')->store('uploads_producto', 'public');
        }

        tb_producto::insert($registro_productos);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_producto  $tb_producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = tb_producto::findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_producto  $tb_producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sql1 = "SELECT id, nombre FROM tb_marcas";
        $marcas = DB::select($sql1);
        $sql2 = "SELECT id, nombre_tipo_alimento FROM tb_tipos_alimentos";
        $tipo_alimentos = DB::select($sql2);
        $sql3 = "SELECT id, nombres FROM tb_dirigidos";
        $dirigidos = DB::select($sql3);
        $producto = tb_producto::FindOrFail($id);
        return view('productos.editar', compact('producto', 'marcas', 'tipo_alimentos', 'dirigidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_producto  $tb_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro_productos = request()->except("_token", "_method");

        if ($request->hasFile('imagen')) {
            $producto = tb_producto::FindOrFail($id);
            storage::delete('public/' . $producto->imagen);

            $registro_productos['imagen'] = $request->file('imagen')->store('uploads_producto', 'public');
        }

            tb_producto::where('id', '=', $id)->update($registro_productos);
            return redirect('admin_productos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_producto  $tb_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = tb_producto::FindOrFail($id);
        if (Storage::delete('public/' . $producto->imagen)) {
            tb_producto::destroy($id);
        }
        return redirect('admin_productos');
    }
}
