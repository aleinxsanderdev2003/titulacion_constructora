@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h1>Mensajes de {{ $cliente->nombres }}</h1>
    <div class="messages-container">
        @foreach($mensajes as $mensaje)
            <div class="message">
                <p>{{ $mensaje->contenido }}</p>
                <!-- Aquí puedes mostrar más detalles del mensaje si lo deseas -->
            </div>
        @endforeach
    </div>
</div>
@endsection
