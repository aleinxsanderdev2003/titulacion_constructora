
@extends('admin.layouts.app')

@section('content')
<!-- Agrega SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<!-- Agrega SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    // Espera a que el DOM esté cargado
    document.addEventListener('DOMContentLoaded', function () {
        // Obtiene todos los botones de cliente-link
        const clienteButtons = document.querySelectorAll('.cliente-link');

        // Itera sobre cada botón
        clienteButtons.forEach(button => {
            // Agrega un evento de clic a cada botón
            button.addEventListener('click', function (event) {
                // Previene el comportamiento predeterminado del enlace
                event.preventDefault();

                // Obtiene el ID del cliente del atributo de datos
                const clienteId = this.getAttribute('data-cliente-id');

                // Realiza una petición para obtener el chat del cliente
                fetch(`/admin/chat/${clienteId}`)
                    .then(response => response.text())
                    .then(html => {
                        // Muestra el chat del cliente en una ventana emergente usando SweetAlert2
                        Swal.fire({
                            title: 'Mensajes',
                            html: html,
                            showCloseButton: true,
                            showConfirmButton: false
                        });
                    })
                    .catch(error => {
                        console.error('Error al obtener el chat del cliente:', error);
                    });
            });
        });
    });
</script>
<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral con lista de clientes -->
        <div class="col-md-3 bg-light">
            <h2 class="text-center mt-3">Clientes</h2>
            <ul class="list-group mt-3">
                @foreach($clientesConMensajes as $cliente)
                <li class="list-group-item cliente-item">
                    <!-- Agrega un atributo de datos con el ID del cliente -->
                    <button class="btn btn-link cliente-link" data-cliente-id="{{ $cliente->id }}">
                        {{ $cliente->nombres }}
                    </button>
                </li>

                @endforeach
            </ul>

        </div>

        <!-- Chat o formulario de mensajes -->
        <div class="col-md-9" id="chatContainer">
            <div class="messages-container">
                <!-- Aquí se mostrarán los mensajes del cliente seleccionado -->
                <div id="chatPlaceholder">Selecciona un cliente para iniciar el chat.</div>
            </div>
        </div>
    </div>
</div>

@endsection
