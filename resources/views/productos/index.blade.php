
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>MI CONTENIDO INDEX</h1>
        <a href="{{ url('home/create') }}">
            <button class="my-4 btn btn-outline-success">Crear Producto</button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre Producto</th>
                    <th>Imagen producto</th>
                    <th>Marca</th>
                    <th>Tipo de Alimento</th>
                    <th>Dirigido a </th>
                    <th>Precio Producto</th>
                    <th>Fecha Ingreso</th>
                    <th colspan="2">ACCIONES</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tienda_producto as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre_tb_productos}}</td>
                        <td><img src="{{ asset('storage').'/'. $producto->imagen }}" class="lazyload w-25" alt="" data-src="{{ asset('storage').'/'. $producto->imagen }}"></td>
                        <td>{{ $producto->nombre}}</td>
                        <td>{{ $producto->nombre_tipo_alimento }}</td>
                        <td>{{ $producto->nombres }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->fec_ingreso }}</td>
                        <td>
                        <td>
                            <a href="{{ url('home/'.$producto->id.'/edit') }}">EDITAR</a>
                        </td>

                        <td>
                            <form action="{{ url('home/'.$producto->id)  }}" method="POST">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button type ="submit" class="btn btn-outline-danger">ELIMINAR</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

@endsection




