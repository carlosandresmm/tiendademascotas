@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>MI CONTENIDO INDEX</h1>
        <a href="{{ url('dirigidos/create') }}">
            <button class="my-4 btn btn-outline-success">Crear </button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>MASCOTA</th>
                    <th>Fecha de creacion</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($tienda_dirigido as $dirigido)
                    <tr>
                        <td>{{ $dirigido->id }}</td>
                        <td>{{ $dirigido->nombres}}</td>
                        <td>{{ $dirigido->fec_creacion }}</td>
                        <td>

                        <td>
                            <a href="{{ url('dirigidos/'.$dirigido->id.'/edit') }}">EDITAR</a>
                        </td>

                        <td>
                            <form action="{{ url('dirigidos/'.$dirigido->id)  }}" method="POST">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button type ="submit" class="btn btn-outline-danger">ELIMINAR</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        {!! $tienda_dirigido->links() !!}
    </div>

@endsection