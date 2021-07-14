<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nombre_tb_productos">Nombre del producto</label>
        <input type="text" name="nombre_tb_productos" class="form-control" id="nombre_tb_productos"
            value="{{ isset($producto->nombre_tb_productos) ? $producto->nombre_tb_productos : '' }}">
    </div>
</div>

<div class="form-group col-md-6">
    <label for="imagen">Imagen</label>
    @if (isset($producto->imagen))
        <img src="value={{ asset('storage') . '/' . $producto->imagen }}" alt="">
    @endif
    <input type="file" name="imagen" class="form-control" id="imagen">
</div>



<div class="form-group col-md-4">
    <label for="marca_id">Marca</label>
    <select id="marca_id" name="marca_id" class="form-control">
        <option {{ !isset($producto) ? 'selected' : '' }} disabled>Seleccione uno...</option>´
        @foreach ($marcas as $marca)
            <option {{ isset($producto) && $producto->marca_id == $marca->id ? 'selected' : '' }}
                value="{{ $marca->id }}">{{ $marca->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-4">
    <label for="dirigido_a_id">Dirigido a</label>
    <select id="dirigido_a_id" name="dirigido_a_id" class="form-control">
        <option {{ !isset($producto) ? 'selected' : '' }} selected disabled>Seleccione uno...</option>´
        @foreach ($dirigidos as $dirigido)
            <option {{isset($producto) && $producto->dirigido_a_id == $dirigido->id ? 'selected' : '' }}
            value="{{ $dirigido->id }}">{{ $dirigido->nombres }}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-4">
    <label for="tipo_alimento_id">Tipo de Alimento</label>
    <select id="tipo_alimento_id" name="tipo_alimento_id" class="form-control">
        <option {{ !isset($producto) ? 'selected' : '' }} selected disabled>Seleccione uno...</option>
        @foreach ($tipo_alimentos as $tipo)
            <option {{isset($producto) && $producto->tipo_alimento_id == $tipo->id ? 'selected' : '' }} 
            value="{{ $tipo->id }}">{{ $tipo->nombre_tipo_alimento }}</option>
        @endforeach
    </select>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="fec_ingreso">Fecha ingreso</label>
        <input type="date" name="fec_ingreso" class="form-control" id="fec_ingreso"
            value="{{isset($producto->fec_ingreso) ? $producto->fec_ingreso : '' }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="precio">Precio</label>
        <input type="number" name="precio" class="form-control" id="precio"
            value="{{ isset($producto->precio) ? $producto->precio : '' }}">
    </div>
</div>

<button type="submit" class="btn btn-primary">REGISTRO</button><br>










