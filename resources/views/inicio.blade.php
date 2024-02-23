<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CN constructora</title>
    <link rel="icon" href="{{asset('img/EMPRESA.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!-- header -->
    @extends('layout.app')
    @section('content')
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="{{asset('img/EMPRESA.png')}}" alt="">
                            </a>
                        </div>

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="#">Inicio</a>

                                </li>
                                <li><a href="about.html">Sobre Nosotros</a></li>
                                <li><a href="#">Proyectos</a>
                                    {{-- <ul class="sub-menu">
                                    <li><a href="cart.html"></a></li>
                                    <li><a href="checkout.html"></a></li>
                                    <li><a href="contact.html"></a></li>
                                    <li><a href="news.html"></a></li>
                                    <li><a href="shop.html"></a></li>
                                </ul> --}}
                                </li>
                                <li><a href="news.html">Contacto</a>

                                </li>

                                <li><a href="shop.html">Entrar</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Iniciar Sesión</a></li>
                                        <li><a href="checkout.html">Registrarse</a></li>

                                    </ul>
                                </li>
                                <li>
                                    {{-- <div class="header-icons">
                                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div> --}}
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->


    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">CONSTRUCTORA</p>
                            <h1>BIENVENIDOS</h1>
                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">INMOBILIARIA</a>
                                <a href="contact.html" class="bordered-btn">CONTACTO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->
    <div class="super_container">

        {{-- muestra --}}
        <style>
            /* Estilo para la sección "action" */
            .action {
                background: linear-gradient(to right, #ffffff, #ffffff);
                padding: 80px 0;
            }

            /* Estilo para el texto a la izquierda */
            .left-text h4 {
                font-family: font-family: 'Acme', sans-serif;
                font-family: 'Phudu', cursive;
                color: #000000;
                /* Cambia el color del título */
            }

            .left-text p {
                color: #000000fff;
                /* Cambia el color del texto */
            }

            /* Estilo para la imagen a la derecha */
            .right-image {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                min-height: 400px;
                /* Ajusta la altura de la imagen */
            }

            /* Estilo para el borde alrededor de la imagen */
            #fotos {
                border: 5px solid #fff;
            }
        </style>
        <style>
            .hero_slide {
                position: relative;
                overflow: hidden;
            }

            .hero_slide_background {
                background-size: cover;
                background-position: center;
                animation: zoomAnimation 10s infinite alternate;
                /* Animación de zoom infinita */
            }

            @keyframes zoomAnimation {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.1);
                    /* Aplicar zoom */
                }
            }
        </style>

        <section class="action text-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="left-text">
                            <h1 class="font-weight-bold">Amet porro numquam ratione</h1>
                            <p class="lead" style="font-family: 'Acme', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image" style="background-image: url(../img/EMPRESA2.jpg);">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="contenedor_obras">
            <h1 class="search_title text-black" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif; text-align: center; font-size: 56px; top: 90px;">OBRAS</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card" id="carta1">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 1</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta2">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 2</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta3">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 3</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card" id="carta4">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 4</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta5">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 5</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta6">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 6</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card" id="carta7">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 7</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta8">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 8</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" id="carta9">
                                                <div class="img-card">
                                                    <div class="card-body">
                                                        <h2>Obra 9</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliqu</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contenedor_noticias">
            <h1 class="search_title text-black" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif; text-align: center; font-size: 56px; top: 90px;">NOTICIAS</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" id="noticia1">
                        <div class="img-card">
                            <div class="card-body">
                                <h2>noticia1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, m debitis eveniet nostrum aliqu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                            <div class="card" id="noticia2">
                                <div class="img-card">
                                    <div class="card-body">
                                        <h2>noticia2</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                            <div class="card" id="noticia3">
                                <div class="img-card">
                                    <div class="card-body">
                                        <h2>noticia3</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                            <div class="card" id="noticia4">
                                <div class="img-card">
                                    <div class="card-body">
                                        <h2>noticia4</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                            <div class="card" id="noticia5">
                                <div class="img-card">
                                    <div class="card-body">
                                        <h2>noticia5</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Register -->
        <div class="register" style="margin-top: 10%;">
            <div class="container-fluid">
                <div class="row row-eq-height">
                    <div class="col-md-6" id="accordion-entero">
                        <!-- Contenido de preguntas frecuentes -->
                        <div class="accordion-body">
                            <div class="accordion">
                                <h1 class="my-title">Preguntas Frecuentes</h1>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Cómo podemos ayudar?</div>
                                    <div class="content4">Adquiriendo los productos de nuestros artesanos peruanos, la mejor manera de avanzar es ser solidarios con quienes no pueden ayudarse a sí mismos. Solo comunícate a nuestros números, o envíanos un mensaje al WhatsApp.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Tiene un costo adicional?</div>
                                    <div class="content4">Ninguno, nosotros pasamos a su casa.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Comprar para su negocio o empresa?</div>
                                    <div class="content4">Nosotros contamos con los documentos necesarios para validar su compra como empresario y negociante. Estamos aptos para la recepción de sus compras bajo requisitos legales a nivel nacional.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Puedo comprar con efectivo o tarjeta?</div>
                                    <div class="content4">Recibimos cualquier tipo de pago, depósitos, etc. Gracias por su compra, ayudará a un artesano peruano.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Puedo comprar con efectivo o tarjeta?</div>
                                    <div class="content4">Recibimos cualquier tipo de pago, depósitos, etc. Gracias por su compra, ayudará a un artesano peruano.</div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    {{-- desde aca acaba --}}

                    <div class="col-md-6 nopadding">
                        <!-- Formulario de pedido de información -->
                        <div class="search_section d-flex flex-column align-items-center justify-content-center">
                            <div class="search_background"></div>
                            <div class="search_content text-center">
                                <h1 class="search_title text-white" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">Respondemos cualquier duda</h1>
                                <form id="search_form" class="search_form" action="post">
                                    <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Nombre Completo" required="required" data-error="Course name is required.">
                                    <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Correo">
                                    <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mensaje">
                                    <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Start -->
        <section class="call-to-action bg-cover section-space-padding text-center" style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">¿Quieres saber más sobre nosotros?</h2>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <a class="buttone" href="#contact">Contacto</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <style>
            .buttone {
                cursor: pointer;
                position: relative;
                padding: 10px 24px;
                font-size: 18px;
                color: rgb(240, 240, 240);
                border: 2px solid rgb(255, 174, 0);
                border-radius: 34px;
                background: linear-gradient(to right, #fe8c00, #f83600);
                font-weight: 600;
                transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
                overflow: hidden;
            }

            .buttone::before {
                content: '';
                position: absolute;
                inset: 0;
                margin: auto;
                width: 50px;
                height: 50px;
                border-radius: inherit;
                scale: 0;
                z-index: -1;
                background: linear-gradient(to right, #fe8c00, #f83600);
                transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            }

            .buttone:hover::before {
                scale: 3;
            }

            .buttone:hover {
                color: #212121;
                scale: 1.1;
                box-shadow: 0 0px 20px rgb(255, 174, 0);
            }

            .buttone:active {
                scale: 1;
            }
        </style>


        <!-- Scripts de Bootstrap (asegúrate de incluir Bootstrap JS) -->

        <script src="{{ asset('js/javaIndex.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>