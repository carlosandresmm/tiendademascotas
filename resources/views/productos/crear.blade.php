
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR PRODUCTO</h1>
        <form action="{{ url('/home') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('productos.formulario')
    </div>
    </form>
@endsection






