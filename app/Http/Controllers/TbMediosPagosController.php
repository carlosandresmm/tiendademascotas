<?php

namespace App\Http\Controllers;

use App\Models\tb_medios_pagos;
use Illuminate\Http\Request;

class TbMediosPagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medios_pago.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medios_pago.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->except('_token');
        tb_medios_pagos::insert($data);
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_medios_pagos  $tb_medios_pagos
     * @return \Illuminate\Http\Response
     */
    public function show(tb_medios_pagos $tb_medios_pagos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_medios_pagos  $tb_medios_pagos
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_medios_pagos $tb_medios_pagos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_medios_pagos  $tb_medios_pagos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_medios_pagos $tb_medios_pagos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_medios_pagos  $tb_medios_pagos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_medios_pagos $tb_medios_pagos)
    {
        //
    }
}
