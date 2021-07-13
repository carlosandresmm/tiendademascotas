@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-group">
            <div class="card">
                <img src="{{ asset('img/sheba.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MARCA PREMIUM</h5>
                    <p class="card-text">Agua suficiente para proceso, carne de pescado blanco, hígado de cerdo, carne de
                        pollo, gluten de trigo, carne de pavo, hígado de cerdo, carne de pollo, gluten de trigo, vísceras de
                        cerdo, carne de salmón, almidón de maíz modificado, harina de soya, concentrado de proteína de soya,
                        fosfato tricálcico, cloruro de potasio, taurina, cloruro de colina, sal, mononitrato de tiamina,
                        sulfato de zinc, suplemento de vitamina E.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">50% De DESCUENTO</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/tres.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CACHORROS</h5>
                    <p class="card-text">Junior es una sabrosa receta rica en Pollo y con un alto nivel de proteínas para
                        alimentar el crecimiento saludable de tu cachorro de 1 a 12 meses. Elaborado con ingredientes de
                        alta calidad, que le ayudará al desarrollo de las defensas naturales y unos dientes y huesos
                        fuertes.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">60% De DESCUENTO en comida SECA</small>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('img/dos.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GATOS & PERROS</h5>
                    <p class="card-text">En nuestra tienda podrás encontrar todo tipo de comida para tus mascotas, contamos
                        con una gran variedad de productos tanto nacionales como importados de las mejores marcas y de la
                        mejor calidad.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">APROVECHA NUESTROS DESCUENTOS</small>
                </div>
            </div>
        </div>
    </div>
@endsection
