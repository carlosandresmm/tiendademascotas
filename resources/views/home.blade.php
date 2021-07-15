
   @extends('layouts.app')
   @section('content')
       <div class="container">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header" justify-content-center>
                       <div class="row">
                           @foreach ($tienda_producto as $producto)
                               <div class="col-md-4 text-md-center">
                                   <img src="{{ asset('storage') . '/' . $producto->imagen }}"
                                       style="width: 250px; height: 250px">
                                   <h6>{{ $producto->nombre }}</h6>
                                   <h6>{{ $producto->precio }}</h6>
                                   <a href="{{ url('home') . '/' . $producto->id }}"><button
                                           class="btn btn-success">Agregar al carrito</button></a>
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endsection

