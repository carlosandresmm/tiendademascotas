@extends('layouts.app')

@section('content')

    <body style="background:url({{ asset('imagen/perro.jpg') }})">
        <section class="page-section" id="contact">
            <div class="container" style="background-color: rgba(134, 204, 186, 0.918)!important; width:500px;height:420px;border-radius: 10%">
                <!-- Contact Section Heading-->
                <h5 class="page-section-heading text-center text-uppercase text-secondary mb-0">Para tomar tu pedido
                    necesitamos esta informacion</h5>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ url('/contacto') }}" method="POST">
                            @csrf
                            @include('contacto.form')
                           
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
