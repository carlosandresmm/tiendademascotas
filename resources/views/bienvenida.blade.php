@extends('layouts.app')



@section('content')
<link rel="stylesheet" href="../resources/css/footer.css">
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
                                <div class="carousel-item active" data-interval="10000">
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

                                        <div class="card" style="width: 15rem;margin:20px ">
                                            <img src="{{ asset('imagen/imagen3.jpg') }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h6 class="card-title">Card title</h6>
                                                <p class="card-text">
                                                <h6>Some quick example text to build on the card.</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">jfgkfgk</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>

                                        <div class="card " style="width: 15rem;margin:20px ">
                                            <img src="{{ asset('imagen/mirringo.jpg') }}" class="card-img-top" alt="..."
                                                style="width: 300px;height:230px">
                                            <div class="card-body">
                                                <h6 class="card-title">Card title</h6>
                                                <p class="card-text">
                                                <h6>Some quick example text to build on the card.</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 15rem;margin:20px ">
                                            <img src="{{ asset('imagen/sobres.jpg') }}" style="width: 300px;height:230px"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h6 class="card-title">Card title</h6>
                                                <p class="card-text">
                                                <h6>Some quick example text to build on the card.</h6>
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center col-12 ml-1">

                                    <div class="card" style="width: 15rem;margin:20px ">
                                        <img src="{{ asset('imagen/imagen3.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Card title</h6>
                                            <p class="card-text">
                                            <h6>Some quick example text to build on the card.</h6>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">jfgkfgk</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>

                                    <div class="card " style="width: 15rem;margin:20px ">
                                        <img src="{{ asset('imagen/mirringo.jpg') }}" class="card-img-top" alt="..."
                                            style="width: 300px;height:230px">
                                        <div class="card-body">
                                            <h6 class="card-title">Card title</h6>
                                            <p class="card-text">
                                            <h6>Some quick example text to build on the card.</h6>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 15rem;margin:20px ">
                                        <img src="{{ asset('imagen/sobres.jpg') }}" style="width: 300px;height:230px"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Card title</h6>
                                            <p class="card-text">
                                            <h6>Some quick example text to build on the card.</h6>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="container" style="margin-top: 10px">
                                <div class="card-group">
                                    <div class="card" style="width: 15rem;margin-right: 20px; margin-left:20px ">
                                        <img src="{{ asset('img/sheba.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">MARCA PREMIUM</h5>
                                            <p class="card-text">Agua suficiente para proceso, carne de pescado blanco,
                                                hígado de cerdo, carne de pollo, gluten de trigo, carne de pavo, hígado
                                                de cerdo, carne de pollo, gluten de trigo, vísceras de cerdo, carne de
                                                salmón, almidón de maíz modificado, harina de soya, concentrado de
                                                proteína de soya, fosfato tricálcico, cloruro de potasio, taurina,
                                                cloruro de colina, sal, mononitrato de tiamina, sulfato de zinc,
                                                suplemento de vitamina E.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">50% De DESCUENTO</small>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 15rem;margin-right: 10px; margin-left:10px ">
                                        <img src="{{ asset('img/tres.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">CACHORROS</h5>
                                            <p class="card-text">Junior es una sabrosa receta rica en Pollo y con un
                                                alto nivel de proteínas para alimentar el crecimiento saludable de tu
                                                cachorro de 1 a 12 meses. Elaborado con ingredientes de alta calidad,
                                                que le ayudará al desarrollo de las defensas naturales y unos dientes y
                                                huesos fuertes.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">60% De DESCUENTO en comida SECA</small>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 15rem;margin-right: 10px; margin-left:10px ">
                                        <img src="{{ asset('img/dos.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">GATOS & PERROS</h5>
                                            <p class="card-text">En nuestra tienda podrás encontrar todo tipo de comida
                                                para tus mascotas, contamos con una gran variedad de productos tanto
                                                nacionales como importados de las mejores marcas y de la mejor calidad.
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">APROVECHA NUESTROS DESCUENTOS</small>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                            </div>


                            <div class="container" style="display: flex;flex-wrap: wrap;justify-content:space-around;">
                                <!-- Portfolio Item 1-->
                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal1">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
                                    </div>
                                </div>
                                <!-- Portfolio Item 2-->
                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal2">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal1">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
                                    </div>
                                </div>
                                <!-- Portfolio Item 2-->
                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal2">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal1">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
                                    </div>
                                </div>
                                <!-- Portfolio Item 2-->
                                <div class="col-md-6 col-lg-4 mb-5">
                                    <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                                        data-bs-target="#portfolioModal2">
                                        <div
                                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                                        </div>
                                        <img class="img-fluid" src="{{ asset('imagen/imagen1.jpg') }}" alt="..."
                                            style="border-radius: 50%;cursor: pointer;" />
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
                                <div class="col-lg-4 ms-auto">
                                    <p class="lead" style="font-size: 0.7rem">Es nuestro compromiso;
                                        <BR>
                                        Porque tu mascota es única, por eso estamos orgullosos de ofrecer productos de las
                                        mejores marcas y al mejor precio del mercado.
                                    </p>
                                </div>
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
                            </div>


                    </section>

                    <section class="page-section" id="contact">
                        <hr>
                        <div class="container" style="background-color:darkgray">
                            <!-- Contact Section Heading-->
                            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">falta poner algo
                                aqui</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Contact Section Form-->

                        </div>
                    </section>
                    <!-- Footer-->

            </div>
        </div>
    </div>
    </div>
    <footer class="footer text-center navbar-dark bg-dark " style="background-color:rgb(85, 78, 78); color:white">
        <div class="container" style="height: 50%">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">LOCALIZACIÓN</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="redes-container">
                    <ul>
                        <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/" class="youtube"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div> <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">XXXXXXXXXXXXXXXXXXXX</h4>
                    <p class="lead mb-0">
                        FZDZGZGZFDHZFHZFH
                        .
                    </p>
                </div>
            </div>
        </div>

        <!-- Complemento de los modales-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
    </footer>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content"
                style="background-color: rgba(134, 204, 186, 0.918)!important;width:600px;height:500px; ">
                <div class="modal-header border-0"><button class="btn btn-outline-warning" href="#!"
                        data-bs-dismiss="modal">
                        <i class="fas fa-paw"></i>
                        Mas productos
                    </button>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">DOGCHOW</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('imagen/imagen1.jpg') }}"
                                        alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque

                                    </p>
                                    <button class="btn btn-outline-danger" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-paw"></i>
                                        Comprar !
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content"
                    style="background-color: rgba(134, 204, 186, 0.918)!important;width:600px;height:500px; ">
                    <div class="modal-header border-0"><button class="btn btn-outline-warning" href="#!"
                            data-bs-dismiss="modal">
                            <i class="fas fa-paw"></i>
                            Mas productos
                        </button>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">DOGCHOW</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{ asset('imagen/imagen1.jpg') }}"
                                            alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                            neque

                                        </p>
                                        <button class="btn btn-outline-danger" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-paw"></i>
                                            Comprar !
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../js/jquery-3.6.0.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/sweetalert2@10.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

            </body>
        @endsection
