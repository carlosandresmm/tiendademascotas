@extends('layouts.app')



@section('content')
<form action="{{ url('/pagos') }}"method="POST" enctype="multipart/form-data">
@csrf
<label for="moneda">Moneda</label>
<input type="text" name="moneda" id="moneda">
<br>
<label for="pago_fisico">Pago Fisico</label>
<input type="text" name="pago_fisico" id="pago_fisico">
<br>
<label for="tarjeta">Tarjeta</label>
<input type="text" name="tarjeta" id="tarjeta">
<br>
<label for="banco">Banco</label>
<input type="text" name="banco" id="banco">
<br>
<label for="pago_internet">Pago Internet</label>
<input type="text" name="pago_internet" id="pago_internet">
<br>
<label for="pago_app_movil">Pago App Movil</label>
<input type="text" name="pago_App_Movil" id="pago_app_movil">
<br>
<label for="valor">Valor</label>
<input type="text" name="valor" id="valor">
<br>
<label for="imagen">Imagen</label>
<input type="file" name="imagen" id="imagen">
<br>
<button type="submit">Pagar</button>
</form>
@endsection