@extends('layout.app')
@section('content')
<link rel="stylesheet" href="{{asset("css/nosotros.css")}}">
<style>
    /* Estilo para el fondo de imagen */
.bg-image {
    background-image:linear-gradient(rgb(0,0,0,0.6), rgb(0,0,0,0.3)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80'); /* Reemplaza 'tu-imagen.jpg' con la URL de tu imagen */
    background-size: cover;

    background-attachment: fixed; /* Fondo fijo */
    color: white;
    padding: 100px 0;
}

/* Estilos para el texto en el encabezado */
.bg-image h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.bg-image p {
    background: rgb(0,0,0,0.3);
    color: rgb(255, 255, 255);
    font-size: 18px;
}
/* Estilos para el texto con degradado lineal */
.texto-degradado {

    background-image: linear-gradient(to right, #fe8c00, #fbac01);
    -webkit-background-clip: text;
    background-clip: text;
    color: #fbac01;
}

</style>

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
                                {{-- <ul class="sub-menu">
                                    <li><a href="cart.html"></a></li>
                                    <li><a href="checkout.html"></a></li>
                                    <li><a href="contact.html"></a></li>
                                    <li><a href="news.html"></a></li>
                                    <li><a href="shop.html"></a></li>
                                </ul> --}}
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
<header class="bg-image">
    <div class="container text-center">
        <h1 class="text-white" style="margin-top: 40px;" style=" font-family: 'Kanit', sans-serif;
        font-family: 'Orbitron', sans-serif; ">Sobre nosotros</h1>
        <p>Descubre más sobre nuestra empresa.</p>
    </div>
</header>

<!-- Contenido de "Sobre nosotros" -->
<section class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Logo de la empresa -->
            <img src="img/EMPRESA.png" alt="Logo de la empresa" class="img-fluid mb-3" />

            <h2  style="  font-family: 'Kanit', sans-serif;
            font-family: 'Orbitron', sans-serif;">Nuestra Historia</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod libero eu augue ultrices, in consequat dolor faucibus. Nullam scelerisque turpis vel magna semper, eget eleifend orci interdum.</p>
        </div>
        <div class="col-md-6">
            <div class="mission-vision">
                <div class="mb-4">
                    <i class="fas fa-bullseye fa-3x"></i> <!-- Icono de Font Awesome para Misión -->
                    <h2 class="texto-degradado" style="  font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif; color: linear-gradient(to right, #fe8c00, #fbac01)">Nuestra Misión</h2>
                    <p>Ser la constructora líder en calidad y satisfacción del cliente, entregando proyectos innovadores y sostenibles.</p>
                </div>

                <div>
                    <i class="fas fa-eye fa-3x"></i> <!-- Icono de Font Awesome para Visión -->
                    <h2 class="texto-degradado" style="  font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;color: linear-gradient(to right, #fe8c00, #fbac01)">Nuestra Visión</h2>
                    <p>Convertirnos en una empresa de referencia en el sector de la construcción, siendo reconocidos por nuestra excelencia en cada proyecto.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

      .container {

           /* Fondo semi-transparente para resaltar el carrusel */
            padding: 20px;
            border-radius: 10px;
        }

        .carousel-indicators li {
            background-color: #fdc830; /* Color de fondo del indicador */
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: #fdc830; /* Color de fondo de los controles */
        }
        .icon-color {
            color: #fdc830; /* Color de los iconos */
        }
</style>
<div class="container">
    <h2 class="text-center" style="   font-family: 'Kanit', sans-serif;
    font-family: 'Orbitron', sans-serif;">Principales Sectores</h2>
    <div id="icon-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores del carrusel -->


         <!-- Slides del carrusel -->
         <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-home fa-4x"></i>
                        <p>Casa</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-building fa-4x"></i>
                        <p>Edificio</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-store fa-4x"></i>
                        <p>Tienda</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hospital fa-4x"></i>
                        <p>Hospital</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-school fa-4x"></i>
                        <p>Escuela</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Agrega más slides con iconos y títulos según sea necesario -->
        </div>

        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#icon-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#icon-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<style>

    /* Estilo para el botón Bootstrap */
    .custom-button {
        background-color: #ffb700; /* Cambia el color del botón según tu esquema de colores */
        color: #fff; /* Color del texto del botón */
    }
</style>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-content">
                    <h1>Somos una empresa de construcción</h1>
                    <p>Dedicada a brindar soluciones a los diversos requerimientos de nuestros clientes.</p>
                    <!-- Botón Bootstrap personalizado -->
                    <a href="contacto.html" class="btn btn-warning custom-button">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

