<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CN constructora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estiloTecho.css')}}">

</head>
<body>
    @extends('layout.app')
    @section('content')
    <link rel="stylesheet" href="{{asset('css/estiloTecho.css')}}">
<style>
        /* Estilo para el fondo de imagen */
.bg-image {
    background-image:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.2)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80'); /* Reemplaza 'tu-imagen.jpg' con la URL de tu imagen */
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

background-image: linear-gradient(to right, #fe8c00, #f83600);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
}

</style> <header class="bg-image">
    <div class="container text-center">
        <h1 style=" font-family: 'Kanit', sans-serif;
        font-family: 'Orbitron', sans-serif;">PROGRAMA TECHO PROPIO</h1>
        <p>Descubre más sobre nuestra empresa.</p>
    </div>
</header>
    <div class="container">


        <div class="row">
            <!-- Dos columnas arriba -->
            <div class="col-md-6 mb-4">
                <div class="p-3" style="color: black;" id="techoPropio">
                    <p>Construimos viviendas a través del proyecto “Techo Propio” en la modalidad de “Construcción en Sitio Propio” dirigida a las familias que tienen un terreno propio  inscrito en Registros Públicos, sin cargas ni gravámenes, para construir su vivienda.</p>

                    <p> Tenemos más de 20 años de experiencia en construcción, habiendo realizado a la fecha más de 3600 viviendas en dicho modalidad. Actualmente nos encontramos entre las cinco primeras entidades a nivel nacional de un total  de 600 entidades técnicas aprox.</p>

                    <p> Constructora Capón viene realizando este tipo de proyectos en diferentes partes del Perú Pisco:</p>
                    <div class="p-3" id="listas">
                        <ul style="list-style-type: disc;">
                            <li>950 módulos  de viviendas (Pisco Cercado, San Andrés, Paracas, San Clemente, Túpac Amaru).</li>
                            <li>Chincha: 290 módulos de vivienda (Chincha Baja, Chincha Alta, Pueblo Nuevo)</li>
                            <li>Cañete: 1000 módulos de vivienda (San Vicente, Imperial, San Luis, Santa Bárbara, Nuevo Imperial)</li>
                            <li>Lima: 300 módulos de vivienda (Ate, Villa El Salvador, Puente Piedra, Ancón)</li>
                            <li>Callao: 40 módulos de vivienda (Ventanilla)</li>
                            <li>Chiclayo: 50 módulos de vivienda (Pacora)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" id="carrusel">
                <div class="p-3">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/EMPRESA.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/EMPRESA.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/EMPRESA.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="container" id="requerimientos">
                        <div class="requisitos">
                            <p><strong>REQUISITOS PARA CONSTRUIR UNA VIVIENDA A TRAVÉS DEL PROGRAMA TECHO PROPIO</strong></p>

                            <div class="accordion-body">
                                <div class="accordion">
                                    <hr>
                                    <div class="contenedor">
                                        <div class="label"><strong>Requisitos:</strong></div>
                                        <div class="content4">
                                            <ul style="list-style-type: disc;">
                                                <li>Se debe tener un terreno inscrito en Registros Públicos sin cargas ni gravámenes y NO contar con otro terreno o vivienda a nivel nacional.</li>
                                                <li>Debe estar vigente una Convocatoria en la provincia donde se posee el terreno para que se pueda inscribir al Programa.</li>
                                                <li>Una vez inscrito en el Programa se debe elegir una ET (Entidad Técnica) autorizada por el Fondo para construir la vivienda.</li>
                                                <li>Se debe firmar Contrato de Obra con la ET CONSTRUCTORA CAPON SAC.</li>
                                                <li>La ET le indicará en qué momento debes depositar el ahorro de tu Grupo Familiar en la Cuenta del Fondo MIVIVIENDA-Recaudación en el Banco Interbank.</li>
                                                <li>La construcción de la vivienda se inicia una vez que el Fondo MIVIVIENDA desembolsa el Bono a la ET CONTRUCTORA CAPON SAC.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const accordion = document.getElementsByClassName('contenedor');

        for (i=0; i<accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            this.classList.toggle('active')
        })
        };
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      @endsection

</body>
</html>
