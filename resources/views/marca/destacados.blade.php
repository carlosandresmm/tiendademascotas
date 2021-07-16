@extends('layouts.app')

@section('content')
    

    <div class="container">
        <h1>NUESTRAS MARCAS ALIADAS</h1>
        <br>
        <hr>
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('imagen/descarga1.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/chunky.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/descarga3.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/descarga4.jpeg') }}" class="card-img-top" alt="...">
            </div>
        </div><br>
    </div><br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('imagen/descarga5.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/descarga6.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/descarga7.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/descarga8.jpeg') }}" class="card-img-top" alt="...">
            </div>
        </div><br>
    </div><br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('imagen/descarga9.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/mirringo.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/sobres.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <img src="{{ asset('imagen/purinas.png') }}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
@endsection