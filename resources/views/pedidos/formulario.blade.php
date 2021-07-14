<div class="form-row">
    <div class="form-group col-md-6">
        <label for="fecha_pedido">Fecha Pedido</label>
        <input type="date" name="fecha_pedido" class="form-control" id="fecha_pedido"  value="{{ isset($pedido->fecha_pedido) ? $pedido->fecha_pedido: '' }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="usuario_comprador_id">Cliente</label>
        <input type="text" name="usuario_comprador_id" class="form-control" id="usuario_comprador_id" value="{{ isset($pedido->usuario_comprador_id) ? $pedido->usuario_comprador_id : '' }}">
            
    </div>
</div>

<div class="form-group col-md-6">
    <label for="cantidad_de_productos">Cantidad Productos</label>
    <input type="number" name="cantidad_de_productos" class="form-control" id="cantidad_de_productos" value="{{ isset($pedido->cantidad_de_productos) ? $pedido->cantidad_de_productos : '' }}">
        
</div>

<div class="form-group col-md-4">
    <label for="estado_de_pedido">Estado</label>
    <select id="estado_de_pedido" name="estado_de_pedido" class="form-control">
        <option selected disabled>Seleccione uno...</option>
        <option value="enviado">ENVIADO</option>
        <option value="entregado">ENTREGADO</option>
        <option value="devolucion">DEVOLUCION</option>
        
    </select>
</div>

<div class="form-group col-md-4">
    <label for="medios_de_pago_id">Medios De Pago</label>
    <select id="medios_de_pago_id" name="medios_de_pago_id" class="form-control">
        <option selected disabled>Seleccione uno...</option>
        @foreach ($medios as $dato)
            <option value="{{ $dato->id }}">{{ $dato->medio_de_pago }}</option>
        @endforeach
    </select>
</div>


<button type="submit" class="btn btn-primary">REGISTRO</button>
