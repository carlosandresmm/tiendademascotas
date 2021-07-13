@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR PEDIDO</h1>
        <form action="{{ url('/pedidos') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('pedidos.formulario')
    </div>
    </form>
@endsection