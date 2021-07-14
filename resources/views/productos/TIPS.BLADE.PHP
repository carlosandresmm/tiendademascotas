@extends('layouts.app')
@section('content')
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">BAÑO</h5>
                <p class="card-text">*SUPER TIP: Si tu Super Cachorro es de los que preferirían no bañarse nunca, asegúrate de tener sus premios favoritos a la mano para que cada vez que se porte bien durante el baño (es decir si permanece quieto y tranquilo) puedas premiarlo por su buena conducta. Así aprenderá que bañarse es una buena experiencia. No lo obligues, no lo regañes y mucho menos le grites o le pegues. Él necesita aprender que bañarse no es algo malo y que no tiene nada que temer. Para ello deberás motivarlo, permiarlo y hacer que el baño sea una experiencia relajada y agradable.</p>
            </div>
            <img src="{{ asset('imagen/pero.jpg') }}" class="card-img-bottom" alt="...">
        </div><br>
    </div>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="{{ asset('imagen/descarga2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MARCAS PREMIUM</h5>
                    <p class="card-text">Las marcas PREMIUM con las que contamos estan compuestas con con agua suficiente
                        para su proceso, carne de pescado blanco, hígado de cerdo, carne de
                        pollo, gluten de trigo, carne de pavo, hígado de cerdo, carne de pollo, gluten de trigo, vísceras de
                        cerdo, carne de salmón, almidón de maíz modificado, harina de soya, concentrado de proteína de soya,
                        fosfato tricálcico, cloruro de potasio, taurina, cloruro de colina, sal, mononitrato de tiamina,
                        sulfato de zinc, suplemento de vitamina E.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('imagen/australiano.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CACHORROS</h5>
                    <p class="card-text">Junior es una sabrosa receta rica en Pollo y con un alto nivel de proteínas para
                        alimentar el crecimiento saludable de tu cachorro de 1 a 12 meses. Elaborado con ingredientes de
                        alta calidad, que le ayudará al desarrollo de las defensas naturales y unos dientes y huesos
                        fuertes.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('imagen/lindos.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GATOS & PERROS</h5>
                    <p class="card-text">
                        En nuestra tienda podrás encontrar todo tipo de comida para tus mascotas, contamos
                        con una gran variedad de productos tanto nacionales como importados de las mejores marcas y de la
                        mejor calidad..</p>
                </div>
            </div><br>
        </div>
    </div>
@endsection
