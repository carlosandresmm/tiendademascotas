@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="">

                <body style="background-color: rgba(134, 204, 186, 0.918)!important;">


                    <header class="masthead bg-primary text-white text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="4000">
                                    <img src="{{ asset('imagen/imagen1.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <img src="{{ asset('imagen/imagen2.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <img src="{{ asset('imagen/imagen9.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </header>
                    <div class="divider-custom-icon"><i class="fas fa-bone"></i></div>
                    <hr>
                    <section class="page-section portfolio" id="portfolio">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Portfolio Section Heading-->
                                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                                        PRODUCTOS DESTACADOS</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>

                                    <!-- Portfolio  Items-->
                                    <div class="row justify-content-center col-12 ml-1">

                                        <div class="card" style="width: 16.5rem;height: 30rem;margin:10px ">
                                            <img src="{{ asset('imagen/imagen3.jpg') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h6 class="card-title text-primary">Hill´s</h6>
                                                <p class="card-text text-primary">
                                                <h6 class="card-title text-primary">Adultos 1-6</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">Peso: 1000g</li>
                                                <li class="list-group-item">Precio: $ 25.000</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-danger">Detalle</a>
                                                <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                            </div>
                                        </div>

                                        <div class="card " style="width: 16.5rem;height: 30rem; margin:10px ">
                                            <img src="{{ asset('imagen/mirringo.jpg') }}" class="card-img-top" alt="..."
                                                style="width: 300px;height:230px">
                                            <div class="card-body">
                                                <h6 class="card-title text-primary">Mirringo</h6>
                                                <p class="card-text text-primary">
                                                <h6 class="card-title text-primary">Adultos 1-6</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">Peso: 1000g</li>
                                                <li class="list-group-item">Precio: $ 15.000</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-danger">Detalle</a>
                                                <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 16.5rem;height: 30rem; margin:10px ">
                                            <img src="{{ asset('imagen/sobres.jpg') }}" style="width: 300px;height:230px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h6 class="card-title text-primary">Whiskas</h6>
                                                <p class="card-text text-primary">
                                                <h6 class="card-title text-primary">adulto 1+</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Peso: 85g</li>
                                                <li class="list-group-item">Precio: $ 8.000</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-danger">Detalle</a>
                                                <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center col-12 ml-1">

                                    <div class="card" style="width: 16.5rem;height: 30rem; margin:10px ">
                                        <img src="{{ asset('imagen/chunky.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title text-primary">Chunky</h6>
                                            <p class="card-text text-primary">
                                            <h6 class="card-title text-primary">Adultos</h6>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Peso: 20k</li>
                                            <li class="list-group-item">Precio: $ 65.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-danger">Detalle</a>
                                            <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                        </div>
                                    </div>

                                    <div class="card " style="width: 16.5rem;height: 30rem; margin:10px ">
                                        <img src="{{ asset('imagen/ringo.jpg') }}" class="card-img-top" alt="..."
                                            style="width: 300px;height:230px">
                                        <div class="card-body">
                                            <h6 class="card-title text-primary">Ringo</h6>
                                            <p class="card-text text-primary">
                                            <h6 class="card-title text-primary">Edad avanzada</h6>
                                            </p>
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item ">Peso: 20k</li>
                                            <li class="list-group-item">Precio: $ 95.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-danger">Detalle</a>
                                            <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 16.5rem;height: 30rem; margin:10px ">
                                        <img src="{{ asset('imagen/purinas.png') }}" style="width: 300px;height:230px"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title text-primary">Pro Plan</h6>
                                            <p class="card-text">
                                            <h6 class="card-title text-primary">Cachorros</h6>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Peso: 4.5</li>
                                            <li class="list-group-item">Precio: $ 45.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-danger">Detalle</a>
                                            <a href="{{ route('login') }}" class="btn btn-success">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-custom-icon"><i class="fas fa-bone"></i></div>

                            <div class="container">
                                <hr>
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                                    Promociones</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>


                                <!-- Portfolio Item 1-->
                                <div class="container" style="display: flex;flex-wrap: wrap;justify-content:space-around;">
                                    <!-- Portfolio Item 1-->
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal1">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            </div>
                                            <img class="img-fluid" src="{{ asset('imagen/gatos.jpg') }}" alt="..."
                                                style="border-radius: 50%;cursor: pointer;" />
                                            <h6>EXCELENTES JUGETES PARA GATOS</h6>

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal2" style="margin: 50%">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                            </div>
                                            <img class="img-fluid" src="{{ asset('imagen/accesorios.jpg') }}" alt="..."
                                                style="border-radius: 50%;cursor: pointer;" />
                                            <h6>VARIEDAD DE ACCESORIOS PARA TU PERRO</h6>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal3">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                <img class="img-fluid" src="{{ asset('imagen/disfraz.jpg') }}" alt="..."
                                                    style="border-radius: 50%;cursor: pointer;" />
                                                <h6>DISFRACES PARA TU PERRO</h6>

                                            </div>


                                        </div>
                                    </div>

                                    <!-- Portfolio Item 2-->
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal4" style="margin: 10%">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                            </div>
                                            <img class="img-fluid" src="{{ asset('imagen/bioseguro.jpg') }}" alt="..."
                                                style="border-radius: 50%;cursor: pointer;" />
                                            <h6>ELEMENTOS DE BIOSEGURIDAD COMPARTIDOS</h6>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item 2-->
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal5">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                <img class="img-fluid" src="{{ asset('imagen/pomeriano.png') }}"
                                                    alt="..." style="border-radius: 50%;cursor: pointer;" />
                                                <br>


                                            </div>
                                            <h6>10% DTO EN PELUQUEADAS PARES</h6>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item 2-->
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#portfolioModal6">
                                            <div
                                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                            </div>
                                            <img class="img-fluid" src="{{ asset('imagen/gokugato.jpg') }}" alt="..."
                                                style="border-radius: 50%;cursor: pointer;" />
                                            <h6>ELEGANCIA PARA TU GATO</h6>
                                        </div>
                                    </div>



                    </section>
                    <!-- About Section-->
                    <section class="page-section bg-primary text-white mb-0" id="about"
                        style="background-color: rgb(118, 194, 245); border-radius: 10%">
                        <div class="container">
                            <!-- About Section Heading-->
                            <h2 class="page-section-heading text-center text-uppercase text-white">ACERCA DE NOSOTROS</h2>
                            <hr>
                            <!-- Icon Divider-->
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- About Section Content-->
                            <div class="row">

                                <div class="col-lg-4 me-auto">
                                    <p class="lead" style="font-size: 0.7rem">Nuestra filosofía nos permite nunca perder el
                                        foco de brindar momentos y
                                        sentimientos, por esta razón, te entendemos, los protegeremos y los haremos sentir
                                        especiales. Conforme a ella la propuesta de valor va dirigida en torno a las
                                        personas y sus "peludos" que aman y comparten el día a día y a su vez generar un
                                        momento especial y de tranquilidad.</p>
                                </div>

                                <div class="col-lg-4 me-auto">
                                    <p class="lead" style="font-size: 0.7rem">¿Por qué elegirnos?
                                        <br>
                                        Somos una empresa colombiana con más de 2 años en el mercado.Distribuimos alimentos
                                        para mascotas es la más sofisticada a nivel nacional. Tiene la capacidad para
                                        producir alimentos para perros y gatos para todos los segmentos y somos una de las
                                        empresas con el más amplio portafolio de productos para perros y gatos en el mercado
                                        Colombiano de alimento para mascotas.
                                    </p>
                                </div>

                                <div class="col-lg-4 me-auto">
                                    <p class="lead" style="font-size: 0.7rem">MISIÓN
                                        <br>
                                        Ofrecer y distribuir alimentos, accesorios, salud y productos agropecuarios y/o
                                        veterinarios orientados en satisfacer totalmente las necesidades de nuestros
                                        clientes y el bienestar de sus mascotas, bajo un sistema de gestión de calidad
                                        buscando la excelencia y la rentabilidad del negocio, soportados por profesionales y
                                        personal altamente capacitado.
                                    </p>
                                </div>

                                <div class="col-lg-4 me-auto">
                                    <p class="lead" style="font-size: 0.7rem">VISION
                                        <br>
                                        Ser la distribuidora de productos agropecuarios y veterinarios de buena calidad,
                                        consolidándose altamente competitiva y reconocida como líder dentro de su mercado,
                                        buscando preferencia por parte de sus usuarios en la asesoría al cliente,
                                        comercialización y el cubrimiento en la atención de cada una de sus sucursales con
                                        el personal altamente capacitado.
                                    </p>
                                </div>

                                <div class="col-lg-4 ms-auto">
                                    <p class="lead" style="font-size: 0.7rem">Es nuestro compromiso;
                                        <BR>
                                        Porque tu mascota es única, por eso estamos orgullosos de ofrecer productos de las
                                        mejores marcas y al mejor precio del mercado.
                                    </p>
                                </div>
                            </div>


                    </section>


                    </section>
                    <!-- Footer-->


                    <!-- Portfolio Modals-->




            </div>
        </div>
    </div>
    </div>
    <footer class="footer text-center navbar-dark bg-dark " style="background-color:rgb(85, 78, 78); color:white">
        <div class="container" style="height: 50%">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0"><br>
                    <h4 class="text-uppercase mb-4">UBICACION</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.991467992802!2d-74.07973208591!3d4.595550443841583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9907a27ef9a7%3A0xdfeeb4b3241959e6!2sPresidencia%20de%20la%20Rep%C3%BAblica%20de%20Colombia!5e0!3m2!1ses!2sco!4v1626397764439!5m2!1ses!2sco"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <br><br>
                </div> <!-- Footer Social Icons-->
                <div class="col-4">
                    <div style="height: 100%" class="d-flex justify-content-center align-items-center">
                        <ul class="lista-redes-footer">
                            <li>
                                <a href="https://www.facebook.com/" class="facebook"><i
                                        class="icon-red fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="twitter"><i class="icon-red fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" class="youtube"><i
                                        class="icon-red fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="linkedin"><i
                                        class="icon-red fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="instagram"><i
                                        class="icon-red fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <br><br><br>
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">No olvides...</div>
                        <div class="card-body">
                            <h5 class="card-title">Milu Pet Shop</h5>
                            <p class="card-text">Somos tu mejor opción en tienda de mascotas, no solo por tener los mejores
                                precios y ofertas si no por que hemos seleccionado las mejores marcas para nuestro Pet Shop.
                                Disfruta del mejor servicio de entrega a domicilio de productos de tienda para mascotas en
                                Bogotá.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
    </footer>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
              
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">JUGUETES PARA GATOS
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\JUGETE2.jpg') }}" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Los gatos son unos grandes juguetones y es necesario estimular su instinto
                                    depredador innato.
                                    Por ello, los juguetes interactivos y de inteligencia son una buena opción para
                                    entretenerlos.
                                    Encuentra aquí todos los juguetes para gatos que ponen a prueba sus habilidades.
                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
               
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ACCESORIOS PARA PERROS
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\ACCESORIOPERRO.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Encuentra aquí excelente surtido en artículos, accesorios y juguetes para
                                    perro.
                                    guacales, comederos, huesos, dispensadores, camas y muebles para consentir a esa mascota
                                    preferida.
                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
               
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">DISFRACES PARA PERROS
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\disfracesperros3.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Sin duda, los que tenemos un perro en la familia disfrutamos de que comparta
                                    con nosotros el mayor tiempo posible y, en consecuencia, lo incorporamos cada vez más a
                                    nuestras actividades,
                                    lo llevamos en nuestras salidas fuera de casa y nos gusta que participe en nuestras
                                    celebraciones.
                                    Si nos gusta disfrazarnos, ya sea para fiestas familiares o eventos sociales o
                                    concursos, tendremos la tentación de que también nuestro perro participe.
                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">BIOSEGURIDAD</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\bioperros.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">No lo sueltes y evita que tenga contacto con otros perros. Respeta la
                                    distancia mínima de 2 metros con las demás personas.

                                    Usa un kit de aseo exclusivo para tu mascota que incluya agua con jabón y toallas
                                    desechables para limpiar y secar sus patitas antes de entrar a casa.

                                    Asigna a una persona menor de 60 años para esta labor. Debe salir con guantes y
                                    tapabocas.

                                    Pasea a tu perro de 10 a 15 minutos diarios. Sácalo con correa y bozal si se requiere.

                                    No uses detergente ni gel antibacterial para desinfectar a tu mascota, ya que puede
                                    provocarle irritaciones.

                                    Si tu mascota desarrolla una enfermedad inusual y estaba cerca de una persona con
                                    infección documentada por COVID-19,
                                    llama a tu clínica veterinaria antes de ir e infórmales que tu mascota estuvo expuesta a
                                    la infección.
                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
               
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">PELUQUERIA</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\peluqueria.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">
                                    En nuestra peluquería se le realizará un baño en profundidad que ayudará a detectar
                                    posibles parásitos e infecciones.
                                    También nos puede ayudar a evitar posibles problemas auditivos.
                                    El peluquero limpiará los oídos de la mascota, lo que puede evitar infecciones y
                                    problemas más graves de salud.
                                    Y lo mismo ocurre con la dentadura.

                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ELEGANCIA FELINA</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('imagen\elegancia.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">
                                    Aunque parezca mentira la tan consabida elegancia felina no es algo que estos animales
                                    mantengan contra viento y marea,
                                    en cualquier situación en que se encuentren. Es algo intrínseco,
                                    sí, pero si las condiciones en las que crecen y viven no acompañan,
                                    entonces perderán agilidad y “felinidad”.
                                </p>
                                <button class="btn btn-primary" href="https://api.whatsapp.com/send?phone=573174140507" data-bs-dismiss="modal">
                                    <i class="fas fa-paw"></i>
                                    CERRAR</button>
                                    <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=573174140507">SOLICITAR INFORMACION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>
@endsection
