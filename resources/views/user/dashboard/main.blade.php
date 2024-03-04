@extends('user.layout.app')

@section('content')
    <div class="container">
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
    </div>
@endsection

