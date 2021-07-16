@extends('layouts.app')

@section('content')

    <body style="background:url({{ asset('imagen/perro.jpg') }})">
        <section class="page-section" id="contact">
            <div class="container"
                style="background-color: rgba(134, 204, 186, 0.918)!important; width:500px;height:420px;border-radius: 10%">
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


                        <form action="{{ url('/contacto/' . $usuario->id) }}" method="post">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name"  name="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                                    required.</div>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="direction"  name="direction" type="text"
                                    placeholder="Ej... Cl 5 # 20-52 torre 5 apto 601" data-sb-validations="required" />
                                <label for="direction">Dirección</label>
                                <div class="invalid-feedback" data-sb-feedback="direction:required">A direction
                                    is required.
                                </div>
                            </div>
                            
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone"  name="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" />
                                <label for="phone">Número de teléfono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number
                                    is required.
                                </div>
                            </div>
                            
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>
