@extends('layouts.app')

@section('content')
    <form action="{{ url('/pagos') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <body style="background:url({{ asset('imagen/dog-19812_1920.jpg') }})">

            <section class="page-section" id="contact">

                <div class="container"
                    style="background-color: rgba(134, 204, 186, 0.918)!important; width:700px;height:580px;border-radius: 5%">
                    
                    <h5 class="page-section-heading text-center text-uppercase text-secondary mb-0">Por favor seleccione la informacion para su pago y al final adjunte su soporte</h5>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>

                    <select class="custom-select" name="Moneda">
                        <option selected>¿Tipo de Moneda?</option>
                        <option value="dolar">Dolar</option>
                        <option value="euro">Euro</option>
                        <option value="yen">Yen</option>
                        <option value="cop">Peso Colombiano</option>
                    </select>
                    <br>
                    <select class="custom-select" name="Pago Fisico">
                        <option selected>¿Pago Fisico?</option>
                        <option value="si1">Si</option>
                        <option value="no1">No</option>
                    </select>
                    <br>
                    <select class="custom-select" name="Tarjeta">
                        <option selected>¿Pago Tarjeta?, Tipo de tarjeta</option>
                        <option value="at">Debito</option>
                        <option value="bt">Credito</option>
                        <option value="bt">No tarjeta</option>
                    </select>
                    <br>
                    <select class="custom-select" name="Banco">
                        <option selected>¿Pago a travez de Banco?, ¿cúal?</option>
                        <option value="a1">Bancolombia</option>
                        <option value="a2">Davivienda</option>
                        <option value="a3">Banco de Bogotá</option>
                        <option value="a4">Banco Popular</option>
                        <option value="a5">Banco de Occidente</option>
                        <option value="a6">Av villas</option>
                        <option value="a7">Scotiabank Colpatria</option>
                        <option value="a8">Bbva</option>
                        <option value="a9">Otro</option>
                        <option value="a10">No pago en Banco</option>
                    </select>
                    <br>
                    <select class="custom-select" name="Pago_Internet">
                        <option selected>¿Pago por Internet?, ¿Que medio?</option>
                        <option value="b1">Pse</option>
                        <option value="b2">Google Wallet</option>
                        <option value="b3">PayPal</option>
                        <option value="b4">ePayco</option>
                        <option value="b5">PayU</option>
                        <option value="b6">Wompii</option>
                        <option value="b7">No pago en Internet</option>
                    </select>
                    <br>
                    <select class="custom-select" name="Pago_App_Movil">
                        <option selected>¿Pago por App Móvil?, ¿Cúal?</option>
                        <option value="c1">Nequi</option>
                        <option value="c2">Daviplata</option>
                        <option value="c3">Redeban</option>
                        <option value="c4">Movii</option>
                        <option value="c5">PayPal</option>
                        <option value="c6">No pago en App Móvil</option>
                    </select>
                    <br><br>
                    <label for="Valor">Valor</label>
                    <input type="text" name="Valor" id="valor">
                    <br><br>
                    <label for="imagen">Adjunte su soporte de pago</label><br>
                    <input type="file" name="imagen" id="imagen">
                    <br><br>
                    <button type="submit" style="border-radius: 45%">Enviar</button>
    </form>
</div>
</div>
</section>

@endsection
</body>
