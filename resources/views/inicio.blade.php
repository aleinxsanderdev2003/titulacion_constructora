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






    {{-- Count Up --}}
    <div id="gtco-counter" class="gtco-section" style="  background: linear-gradient(to right, #000000, #ffbf00);">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font primary-color">Datos de la Constructora</h2>
                    <p class="text-white">Descubre algunos datos interesantes sobre nuestra empresa constructora.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="counter" data-from="0" data-target="7" data-speed="9000" data-refresh-interval="90">0</span>
                        <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                font-family: 'Orbitron', sans-serif;"><i class="fas fa-star"></i> Promedio de Calificación</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="counter" data-from="0" data-target="30" data-speed="5000" data-refresh-interval="50">0</span>
                        <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                font-family: 'Orbitron', sans-serif;"><i class="fas fa-building"></i> Tipos de Proyectos</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="counter" data-from="0" data-target="50" data-speed="9000" data-refresh-interval="50">0</span>
                        <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                font-family: 'Orbitron', sans-serif;"><i class="fas fa-users"></i> Arquitectos y Diseñadores</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="counter" data-from="0" data-target="20" data-speed="5000" data-refresh-interval="50">0</span>
                        <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                font-family: 'Orbitron', sans-serif;"><i class="fas fa-calendar-alt"></i> Años de Experiencia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin --}}




    {{-- cartass --}}
    <div class="cartass" id="cartass">

        <div class="card">
            <div class="img-card"></div>
            <div class="content">
                <div class="title">
                    <h3>techo propio</h3>
                </div>

                <div class="text">
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi veniam itaque explicabo vero accusamus, nemo sapiente harum, voluptate error reprehenderit minima velit aliquam facilis necessitatibus voluptatibus, animi fuga nobis deleniti.</p>
                </div>

            </div>
        </div>

        <div class="card " id="carta2">
            <div class="img-card"></div>
            <div class="content">
                <div class="title">
                    <h3>mi Vivienda</h3>
                </div>

                <div class="text">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum pariatur quibusdam quis qui possimus aut aliquam, obcaecati molestias dignissimos rem accusamus deleniti numquam consectetur dolores repellendus corporis! Quod, molestias officiis?</p>
                </div>

            </div>
        </div>

        <div class="card " id="carta3">
            <div class="img-card"></div>
            <div class="content">
                <div class="title">
                    <h3>Inmobiliaria</h3>
                </div>

                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio soluta voluptates, excepturi sapiente illo nemo numquam esse aliquam quae impedit laboriosam saepe consequatur dolore deleniti cumque blanditiis itaque eius.</p>
                </div>

            </div>
        </div>
    </div>
    {{-- fin --}}



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


        {{--Nuevo  --}}
            <!-- hero area -->
            <div class="hero-area hero-prueba">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 offset-lg-2 text-center">
                            <div class="hero-texto">
                                <div class="hero-tablecell">
                                    {{-- formulario --}}
                                    <div class="search_content text-center">
                                        <div><h1 class="search_title text-white" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">Respondemos cualquier duda</h1></div>
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
    {{-- cartas de noticias --}}
    <div class="titulo_noticias">
        <h1 class="search_title text-black" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif; text-align: center; ">NOTICIAS</h1>
        <div class="card-deck" style="left: 5%; width: 90vw; display: flex; flex-wrap: wrap; justify-content: space-around;">

            <div class="card" id="card1" style="height: 450px; ">
                <div class="img-card1"></div>
                <div class="card-body">
                    <div class="title">
                        <h3>noticia1</h3>
                    </div>

                    <div class="text">
                        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi veniam itaque explicabo vero accusamus, nemo sapiente harum, volup.</p>
                    </div>

                </div>
            </div>

            <div class="card" id="card2" style="height: 450px; ">
                <div class="img-card2"></div>
                <div class="card-body">
                    <div class="title">
                        <h3>noticia2</h3>
                    </div>

                    <div class="text">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum pariatur quibusdam quis qui possimus aut aliquam, obcaecati molestias </p>
                    </div>

                </div>
            </div>

            <div class="card" id="card3" style="height: 450px;">
                <div class="img-card3"></div>
                <div class="card-body">
                    <div class="title">
                        <h3>noticia3</h3>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio soluta voluptates, excepturi sapiente illo nemo numquam es.</p>
                    </div>

                </div>
            </div>

            <div class="card" id="card4" style="height: 450px; ">
                <div class="img-card4"></div>
                <div class="card-body">
                    <div class="title">
                        <h3>noticia4</h3>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio soluta voluptates, excepturi sapiente illo nemo numquam esse al.</p>
                    </div>

                </div>
            </div>
        </div>

        {{-- cartass --}}








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
