@extends('layouts.app')
@section('content')

<div class="row justify-content-center col-12 ml-1">

    <div class="card" style="width: 16.5rem;height: 30rem;margin:10px ">
        <img src="{{ asset('imagen/imagen3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h6 class="card-title text-primary">Hill´s</h6>
            <p class="card-text text-primary">
            <h6 class="card-title text-primary">Adultos 1-6</h6>
            </p>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item">Peso: 1000g</li>
            <li class="list-group-item">Precio: $ 25.000</li>
        </ul>
        <div class="card-body">
            
            <a href="{{ url('pagos') }}" class="btn btn-success">PAGAR</a>
        </div>
    </div>
</div>
@endsection