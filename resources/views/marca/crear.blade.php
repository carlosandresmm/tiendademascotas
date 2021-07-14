@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR UNA MARCA</h1>
            <form action="{{url('/marca')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include ('marca.formulario')    
            </form>
@endsection           