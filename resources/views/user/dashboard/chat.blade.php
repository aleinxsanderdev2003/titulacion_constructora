@extends('user.layout.app')


@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <!-- Aquí puedes mostrar el historial de mensajes -->
                <div class="card">
                    <div class="card-body">
                        <!-- Iterar sobre los mensajes -->
                        @foreach ($mensajes as $mensaje)
                            <div class="message @if ($mensaje->emisor_id === auth()->id()) sent @else received @endif">
                                <p>{{ $mensaje->contenido }}</p>
                                <span>{{ $mensaje->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Aquí puedes mostrar el formulario para enviar mensajes -->
                <div class="card">
                    <div class="card-header">Enviar Mensaje</div>
                    <div class="card-body">
                        <form action="{{ route('cliente.enviarMensaje') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="mensaje">Mensaje:</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
