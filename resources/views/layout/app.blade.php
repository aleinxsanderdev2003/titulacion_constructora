<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main_styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"> --}}

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Phudu&display=swap" rel="stylesheet">
    <title>CN constructora</title>
    <link rel="icon" href="{{asset('img/EMPRESA.png')}}">
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
</head>
<body>

 <!-- Header with phone number -->
<style>
    .nav-link{
        color: #fdc830;
        font-family: 'Kanit', sans-serif;
font-family: 'Orbitron', sans-serif;
    }
    .nav-item:hover .nav-link:hover {
        border-radius: 10px;
        background: linear-gradient(to right, #000000, #000000);
        color: #ffffff; /* Cambia el color del texto al pasar el cursor */
        transition: background-color 0.8s, color 0.5s; /* Agrega una transición suave */
    }
</style>

<!-- Navbar -->


    <main class="">
        @yield('content')

    </main>



        {{-- clientes --}}

        <section id="fh5co-trusted" data-section="trusted">
            <div class="fh5co-trusted">
                <div class="container" id="Clientes-contenedor" >
                    <div class="row" id="animate">
                        <div class="col-md-12 section-heading text-center" id="to-animate">
                            <h2 class="to-animate text-center" style="
                                font-family: 'Kanit', sans-serif;
                        font-family: 'Orbitron', sans-serif;
                            ">Apoyados por</h2>

                        </div>
                    </div>
                    <div class="row" id="partes">
                         <div class="col-md-2 col-sm-4 col-xs-6 col-sm-offset-0 col-md-offset-1 fotos-cliene">
                             <div class="partner-logo to-animate-2" id="techo">
                                 <img src="{{asset('img/techopropio.png')}}" alt="Partners" class="img-responsive" id="techoP">
                             </div>
                         </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 fotos-cliene">
                            <div class="partner-logo to-animate-2" id="Mivi">
                                <img src="{{asset('img/vivienda.png')}}" alt="Partners" class="img-responsive" id="img-vivienda">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 fotos-cliene" id="minis">
                            <div class="partner-logo to-animate-2" id="ministerio">
                                <img src="{{asset('img/ministerio.png')}}" alt="Partners" class="img-responsive"  >
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 fotos-cliene" id="muni">
                            <div class="partner-logo to-animate-2" id="municipalidad">
                                <img src="{{asset('img/municipalidad.png')}}" alt="Partners" class="img-responsive" >
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 " id="fotos-cliente" >
                            <div class="partner-logo to-animate-2" id="libertad">
                                <img src="{{asset('img/libertad.png')}}" alt="Partners" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <script>
            // Asegúrate de que el documento esté completamente cargado
$(document).ready(function() {
    // Maneja el evento de hacer clic en el botón para desplazarse hacia arriba
    $('.floating-button a').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});

        </script>
        <style>
            /* Estilo para el botón flotante */
.floating-button {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 1000;
}

/* Agrega estilos adicionales según sea necesario */

        </style>
        <div class="floating-button">
            <a href="#" class="btn btn-warning btn-lg">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>
        <style>
            /* Estilo para cambiar el color de fondo al pasar el mouse */
/* Estilo para cambiar el color de fondo a negro al pasar el mouse */
/* Estilo para aplicar el filtro de desaturación al pasar el mouse */
/* Estilo para aplicar el filtro de desaturación (blanco y negro) al inicio */
.partner-logo img {
    filter: grayscale(100%);
    transition: filter 0.3s; /* Agrega una transición suave de 0.3 segundos */
}

/* Estilo para quitar el filtro al pasar el mouse */
.partner-logo:hover img {
    filter: none; /* Quita el filtro, muestra la imagen a todo color al pasar el mouse */
}



        </style>
        {{-- fin --}}

        {{-- <div class="whatsapp-button">
            <a href="https://wa.me/1234567890" target="_blank">
                <div class="whatsapp-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="WhatsApp Icon">
                </div>
            </a>
        </div> --}}
        <div class="whatsapp-button">
            <a href="#" onclick="toggleChat(event)">
                <div class="whatsapp-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="WhatsApp Icon">
                </div>
            </a>
        </div>

        <div id="chat-container">
            <div id="chat-header">Chat con JhonatanBot</div>
            <iframe id="chat-iframe" src='https://webchat.botframework.com/embed/CNBot-bot?s=dd47gV6ft3I.xVUrKfOT_UrS7PAq5Xb9E57tEFm1lsorLHsdSk7iGhY' style='min-width: 400px; width: 100%; min-height: 500px;background: #ffcccc;'></iframe>
        </div>


        <style>
            #chat-container {
              display: none;
              position: fixed;
              bottom: 20px;
              right: 120px; /* Ajusta este valor para mover el iframe más a la izquierda */
              border-radius: 10px;
              overflow: hidden;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
              transition: display 0.3s ease-in-out;
              z-index: 9999; /* Valor alto para superponerse a otros elementos */

          }

          #chat-header {
              background-color: #25D366; /* Color de fondo de WhatsApp */
              color: #fff; /* Color del texto */
              padding: 10px;
              text-align: center;
              font-weight: bold;
          }

          #chat-iframe {
              width: 100%;
              height: calc(100% - 40px); /* Resta el tamaño del encabezado */
              border: none;
              background-color: #f0f0f0; /* Color de fondo del iframe */
          }
          </style>

        <style>

.whatsapp-button {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background-color: #25d366; /* Color de fondo de WhatsApp */
    border-radius: 50%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    animation: radar 2s linear infinite; /* Animación de radar */
    z-index: 999; /* Añade una alta z-index para asegurarte de que esté en la parte superior de otros elementos */
}

.whatsapp-icon {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.whatsapp-icon img {
    width: 40px;
    height: 40px;
}

@keyframes radar {
    0% {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.4);
    }
    50% {
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3), 0px 0px 30px rgba(0, 0, 0, 0.5);
    }
    100% {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2), 0px 0px 20px rgba(0, 0, 0, 0.4);
    }
}
        </style>

 <!-- footer -->
 <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="{{asset('img/EMPRESA.png')}}" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small id="pie">&copy; 2023 <b>CN Constructora</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>


{{-- bot --}}
<script>
    function toggleChat(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            var chatContainer = document.getElementById('chat-container');
            chatContainer.style.display = (chatContainer.style.display === 'none' || chatContainer.style.display === '') ? 'block' : 'none';
    }
</script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>
