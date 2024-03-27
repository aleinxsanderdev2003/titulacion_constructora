<!-- Contenido de la vista chat_cliente.blade.php -->

<!-- Importa jQuery si aún no lo has hecho -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
    // Función para mostrar un mensaje de éxito
    function mostrarMensajeExito(mensaje) {
        // Crea un elemento para el mensaje de éxito
        var successAlert = $('<div class="alert alert-success" role="alert">' + mensaje + '</div>');

        // Agrega el mensaje al contenedor de mensajes de éxito
        $('.messages-container').prepend(successAlert);

        // Oculta el mensaje después de unos segundos
        setTimeout(function () {
            successAlert.fadeOut();
        }, 3000); // 3000 milisegundos = 3 segundos
    }

    // Escucha el envío del formulario
    $('#mensajeForm').submit(function (event) {
        // Evita que se envíe el formulario normalmente
        event.preventDefault();

        // Obtiene los datos del formulario
        var formData = $(this).serialize();

        // Enviar los datos del formulario a través de AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function (data) {
                // Maneja la respuesta del servidor
                if (data.success) {
                    // Si la respuesta contiene un mensaje de éxito, muéstralo
                    mostrarMensajeExito(data.success);
                }
            },
            error: function (xhr, status, error) {
                // Maneja los errores si es necesario
                console.error(xhr.responseText);
            }
        });
    });
});

</script>


<div class="messages-container">
    <!-- Aquí se mostrarán los mensajes del cliente y del administrador -->
    @foreach($mensajes as $mensaje)
        <div class="message {{ $mensaje->emisor_id === auth()->id() ? 'sent' : 'received' }}">
            <p>{{ $mensaje->mensaje }}</p>
            <span>{{ $mensaje->created_at->format('d/m/Y H:i') }}</span>
        </div>
    @endforeach
</div>
<!-- Formulario para que el admin pueda responder --><!-- Formulario para que el admin pueda responder -->
<form action="{{ route('admin.enviarMensaje') }}" method="POST">
    @csrf
    <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">

    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" class="form-control" id="mensaje" name="mensaje" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<style>
    /* Estilos para el chat */
.messages-container {
    height: 400px;
    overflow-y: scroll;
}

.message {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 10px;
    max-width: 70%;
}

.sent {
    background-color: #DCF8C6;
    align-self: flex-end;
}

.received {
    background-color: #FFFFFF;
}

.message p {
    margin: 0;
}

.reply-form {
    margin-top: 20px;
}

</style>
