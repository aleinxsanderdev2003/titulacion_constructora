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
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
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
                                <li class="current-list-item"><a href="{{route('index')}}">Inicio</a>

                                </li>
                                <li><a href="{{route('nosotros')}}">Sobre Nosotros</a></li>
                                <li><a href="#">Proyectos</a>
                                <li><a href="#">Programas</a>

                                </li>
                                <li><a href="{{route('contacto')}}">Contacto</a>

                                </li>

                                <li><a href="shop.html">Entrar</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Iniciar Sesión</a></li>
                                        <li><a href="checkout.html">Registrarse</a></li>

                                    </ul>
                                </li>
                                <li>

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

            .map-container {
                position: relative;
                overflow: hidden;
            }

            .map-container img {
                border-radius: 20px;
            }


            .radar-pointer {
                z-index: 1;
                /* Cambiado el z-index para que esté por encima de la imagen */
                position: absolute;
                width: 30px;
                height: 30px;
                background-color: red;
                border-radius: 50%;
                border: 2px solid #fff;
                box-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
                animation: radarAnimation 2s infinite linear;
                cursor: pointer;
                top: 40%;
                /* Centra verticalmente el radar en el contenedor */
                left: 30%;
                /* Centra horizontalmente el radar en el contenedor */
                transform: translate(-50%, -50%);
                /* Ajusta la posición del radar */
            }

            @keyframes radarAnimation {
                0% {
                    transform: scale(1);
                    opacity: 0.8;
                }

                50% {
                    transform: scale(1.2);
                    opacity: 0.4;
                }

                100% {
                    transform: scale(1);
                    opacity: 0.8;
                }
            }

            .map-content {
                margin-right: 50px;
                /* Ajusta el margen derecho */
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: flex-start;
                /* Centra los círculos más a la izquierda */
            }

            .circle-container {
                background-color: #ffc107;
                border-radius: 50%;
                width: 130px;
                height: 130px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-left: 10px;
            }

            .circle-container img {
                max-width: 50px;
                max-height: 50px;
            }

            .circle-container p {
                font-size: 14px;
                margin-top: 8px;
                color: #fff;
            }

            @media (max-width: 768px) {
                .map-content {
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }

                .circle-container {
                    margin-right: 0;
                    margin-bottom: 15px;
                }
            }
        </style>

        <section class="action text-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="contenido-texto">
                            <h1 class="font-weight-bold">20 AÑOS DE EXPERIENCIA</h1>
                            <p class="lead" style="font-family: 'Acme', sans-serif;">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Nisi ut explicabo magni sapiente. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Magnam pariatur nihil fuga soluta voluptates alias eligendi
                                possimus sit iure commodi excepturi cupiditate aliquid sint ut, reprehenderit ipsa veritatis
                                quis maiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nihil tempora
                                repudiandae, vitae alias sapiente, quod accusamus
                                iusto pariatur reprehenderit ullam nostrum autem eaque soluta dolorum error voluptas minima
                                consequuntur!</p>
                        </div>
                        <br>
                        <div class="map-content">
                            <div class="circle-container">
                                <img src="{{asset('img/icon/construccion.png')}}" alt="">
                                <p class="mt-2 text-white">Proyectos</p>
                            </div>
                            <div class="circle-container">
                                <img src="{{asset('img/icon/experiencia.png')}}" alt="">
                                <p class="mt-2 text-white">20 años</p>
                            </div>
                            <div class="circle-container">
                                <img src="{{asset('img/icon/socios.png')}}" alt="">
                                <p class="mt-2 text-white">5 socios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 map-container">
                        <img class="img-fluid" src="{{asset('img/mapa.webp')}}" alt="">
                        <div class="radar-pointer"></div>
                    </div>
                </div>
            </div>
        </section>


    </div>



    {{-- cartass --}}

    <div class="contenedor-proyectos">
        <h1 class="search_title text-black" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif; text-align: center;">PROYECTOS</h1>
        <div class="swiper mySwiper slide-container">
            <div class="swiper-wrapper card-wrapper">
                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">
                        </div>
                        <div class="details">
                            <span class="name">OBRA 1</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 2</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 3</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 4</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 5</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 6</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 7</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 8</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="content">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 9</span>
                            <span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
                                quidem necessitatibus ut
                                ex tenetur tempora unde nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <div class="container-noticias">

        <div class="contenedor-completo">

            <div class="titulo-noticias">
                <h1 class="search_title text-black" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif; right:78px;">NOTICIAS</h1>
            </div>

            <div class="separacion-gap">

                <div class="left-block">
                    <div class="left-block-container">
                        <div class="image">
                        </div>
                        <div class="details">
                            <span class="name"></span>
                            <span class="description">
                                </span>
                        </div>
                    </div>
                </div>
                <div class="right-block">
                    <div class="right-block-container">
                        <div class="image">
                        </div>
                        <div class="details">
                            <span class="name">OBRA 9</span>
                            <span class="description"> iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                    <div class="right-block-container">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 9</span>
                            <span class="description">nisi iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                    <div class="right-block-container">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 9</span>
                            <span class="description">officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                    <div class="right-block-container">
                        <div class="image">

                        </div>
                        <div class="details">
                            <span class="name">OBRA 9</span>
                            <span class="description">iusto officiis! Odit corporis quibusdam tempora esse,
                                facilis veniam
                                voluptate nemo totam assumenda!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Register -->
    <div class="register">
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
                    <div class="foto-acordion d-flex flex-column align-items-center justify-content-center">
                        <div class="acordion-foto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Nuevo --}}
    <!-- hero area -->
    <div class="hero-area hero-prueba">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-texto">
                        <div class="hero-tablecell">
                            {{-- formulario --}}
                            <div class="search_content text-center">
                                <div>
                                    <h1 class="search_title text-white" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">Respondemos cualquier duda</h1>
                                </div>
                                <div class="formulario-prueba">
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
        </div>
    </div>



    {{-- fin --}}



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
