
<div class="form-group col-md-4">
    <label for="nombres">MASCOTA</label>
    <select id="nombres" name="nombres" class="form-control">
        <option selected disabled>Seleccione uno...</option>
        <option value="1">GATO</option>
        <option value="2">PERRO</option>

    </select>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="fec_creacion">Fecha</label>
        <input type="date" name="fec_creacion" class="form-control" id="fec_creacion"  value="{{ isset($dirigido->fec_creacion) ? $dirigido->fec_creacion: '' }}">
    </div>
</div>



<button type="submit" class="btn btn-primary">REGISTRO</button>
