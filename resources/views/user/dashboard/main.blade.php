@extends('user.layout.app')


@section('content')


   {{--  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Bienvenido  {{ $nombreUsuario }}</h1>
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title">¿Qué puedes hacer aquí?</h5>
                        <p class="card-text">
                            En el Panel de Administración, tienes el control total sobre el contenido y la configuración de tu sitio web. Aquí algunas de las cosas que puedes hacer:
                        </p>
                        <ul>
                            <li>Gestionar usuarios y permisos.</li>
                            <li>Actualizar y agregar nuevos productos o servicios.</li>
                            <li>Personalizar la apariencia y el diseño del sitio.</li>
                            <li>Ver estadísticas y métricas importantes.</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>Consejos para comenzar:</h5>
                    <ul>
                        <li>Explora el menú de navegación a la izquierda para acceder a diferentes secciones.</li>
                        <li>Utiliza la barra lateral para acceder rápidamente a las tareas comunes.</li>
                        <li>No dudes en contactar al soporte si necesitas ayuda o tienes preguntas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ventas</h5>
                        <p class="card-text">Número total de ventas: 100</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ganancias</h5>
                        <p class="card-text">Suma total de ganancias: $10,000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ventas</h5>
                            <p class="card-text">Número total de ventas: 100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ganancias</h5>
                            <p class="card-text">Suma total de ganancias: $10,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Muestra de ingresos</h5>
                            <div style="height: 300px; width: 100%; text-align: center;">
                                <canvas id="graficoCircular"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById('graficoCircular').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Gestionar usuarios', 'Actualizar productos', 'Personalizar sitio', 'Ver estadísticas'],
                        datasets: [{
                            data: [30, 25, 20, 25],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.8)',
                                'rgba(54, 162, 235, 0.8)',
                                'rgba(255, 206, 86, 0.8)',
                                'rgba(75, 192, 192, 0.8)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: 'right'
                        }
                    }
                });
            </script>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5>Consejos para comenzar:</h5>
                    <ul>
                        <li>Explora el menú de navegación a la izquierda para acceder a diferentes secciones.</li>
                        <li>Utiliza la barra lateral para acceder rápidamente a las tareas comunes.</li>
                        <li>No dudes en contactar al soporte si necesitas ayuda o tienes preguntas.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h5>Consejos para comenzar:</h5>
                <ul>
                    <li>Explora el menú de navegación a la izquierda para acceder a diferentes secciones.</li>
                    <li>Utiliza la barra lateral para acceder rápidamente a las tareas comunes.</li>
                    <li>No dudes en contactar al soporte si necesitas ayuda o tienes preguntas.</li>
                </ul>
            </div>
        </div>
    </div>

<!-- Agrega esto en la sección head de tu HTML -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


@endsection

