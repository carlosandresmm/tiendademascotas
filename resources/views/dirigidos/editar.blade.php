@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EDITAR</h1>
        <form action="{{ url('/dirigidos/'.$dirigido->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            @include('dirigidos.formulario')
        </form> 
    </div>
@endsection