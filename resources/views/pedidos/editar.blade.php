@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EDITAR PEDIDO</h1>
        <form action="{{ url('/pedidos/'.$pedido->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('pedidos.formulario')
        </form> 
    </div>
@endsection