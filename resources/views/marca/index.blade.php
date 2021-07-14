pagina principal de marcas

<a href="{{ url ('marca/create')}}">Crear Marca</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Origen Producto</th>
            <th>Fecha Ingreso</th>
            <th colspam="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marca as $marco)
        <tr>
            <td>{{ $marco->id }}</td>
            <td>{{ $marco->nombre}}</td>
            <td>
                <img width="100" src="{{asset('storage').'/'.$marco->imagen}}"alt="">
            </td>
            <td>{{ $marco->origen_producto }}</td>
            <td>{{ $marco->fech_ingreso }}</td>
            
            <td>
                <a href="{{ url('marca/'. $marco->id .'/edit') }}">EDITAR</a>
            </td>
            <td>
                <form action="{{ url('marca/'. $marco->id)}}" method="POST">
                    @csrf
                    {{ method_field ('DELETE') }}
                    <button type="submit" class="btn btn-outline-danger">Eliminar Marca</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>