<div class="container">
        <div class="form-group col-md-6">
            <label for="nombre">Nombre Marca</label>
            <input type="text" name="nombre" id="nombre" class="form-control"  value="{{isset($dato_marca->nombre) ? $dato_marca->nombre :''}}">
        </div>    
        <div class="form-group col-md-6">
            <label for="origen">Origen Marca</label>
            <input type="text" name="origen_producto" id="origen_producto" class="form-control" value="{{isset($dato_marca->origen_producto) ? $dato_marca->origen_producto :''}}">
        </div>
        <div class="form-group col-md-6">
            <label for="ingreso">Fecha de ingreso</label>
            <input type="text" name="fec_ingreso" id="fec_ingreso" class="form-control" value="{{isset($dato_marca->fec_ingreso) ? $dato_marca->fec_ingreso :''}}">
        </div>
        <div class="form-group col-md-6">
            <label for="imagen">Imagen de Marca</label>
                @if (isset($dato_marca->imagen))
                    <img src="{{asset('storage').'/'.$dato_marca->imagen}}"alt="">
                @endif
                    <input type="file" name="imagen" id="imagen">
        </div>

        <button type="submit" class="btn btn-primary">ENVIAR</button>
</div>

