@extends('user.layout.app')


@section('content')


<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <!-- Historial de mensajes -->
            <div class="card">
                <div class="card-body message-container">
                    <!-- Iterar sobre los mensajes -->
                    @foreach ($mensajes as $mensaje)
                        <div class="message @if ($mensaje->emisor_id === auth()->id()) sent bg-gradient-warning text-right @else received bg-gradient-warning text-left @endif">
                            <div class="message-content">
                                <p>{{ $mensaje->mensaje }}</p>
                                <span class="message-time">{{ $mensaje->created_at->setTimezone('America/Lima')->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Formulario para enviar mensajes -->
            <div class="card">
                <div class="card-header bg-gradient-warning text-white"><h6>Enviar Mensaje</h6></div>
                <div class="card-body">
                    <form action="{{ route('cliente.enviarMensaje') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control message-input" id="mensaje" name="mensaje" rows="3" placeholder="Escribe un mensaje..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning send-button"><i class="fas fa-paper-plane text-white"></i> Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    /* Estilos para el chat */
.message-container {
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

.message-content {
    position: relative;
}

.message-time {
    font-size: 12px;
    color: #808080;
    position: absolute;
    bottom: -18px;
    right: 0;
}

/* Estilos para el formulario de mensajes */
.message-input {
    resize: none;
}

.send-button {
    margin-top: 10px;
    width: 100%;
}

</style>
@endsection
