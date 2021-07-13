@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>MI CONTENIDO INDEX</h1>
        <a href="{{ url('pedidos/create') }}">
            <button class="my-4 btn btn-outline-success">Crear Pedido</button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Fecha Pedido </th>
                    <th>Estado De Pedido</th>
                    <th>Cantidad De Productos</th>
                    <th> Cliente </th>
                    <th>Medio De Pago</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tienda_pedido as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->fecha_pedido}}</td>
                        <td>{{ $pedido->estado_de_pedido }}</td>
                        <td>{{ $pedido->cantidad_de_productos }}</td>
                        <td>{{ $pedido->usuario_comprador_id }}</td>
                        <td>{{ $pedido->medios_de_pago_id}}</td>
                        <td>

                        <td>
                            <a href="{{ url('pedidos/'.$pedido->id.'/edit') }}">EDITAR</a>
                        </td>

                        <td>
                            <form action="{{ url('pedidos/'.$pedido->id)  }}" method="POST">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button type ="submit" class="btn btn-outline-danger">ELIMINAR</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        {!! $tienda_pedido->links() !!}
    </div>

@endsection