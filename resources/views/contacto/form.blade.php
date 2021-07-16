<?php
print_r('<pre>');
print_r($data_user_sesion);exit;

?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-light">
                <thead class="thead-light">
        
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>    
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->direction }}</td>
                            <td>{{ $usuario->phone }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/contacto/'.$usuario->id.'/edit') }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


</div>
</div>

@endsection