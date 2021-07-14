@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR </h1>
        <form action="{{ url('/dirigidos') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('dirigidos.formulario')
    </div>
    </form>
@endsection