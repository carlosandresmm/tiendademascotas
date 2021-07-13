@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EDITAR PRODUCTO</h1>
        <form action="{{ url('/home/'.$producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('productos.formulario')
        </form> 
    </div>
@endsection
