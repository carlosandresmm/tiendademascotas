@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EDICION DE UNA MARCA></h1>
            <form action="{{url('/marca/.$dato_marca->id')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                    {{ method_field ('PATCH') }}
                @include ('marca.formulario')
            </form>
    </div>
@endsection
