
@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral con lista de clientes -->
        <div class="col-md-3 bg-light">
            <h2 class="text-center mt-3">Clientes</h2>
            <ul class="list-group mt-3">
                @foreach($clientes as $cliente)
                    <li class="list-group-item">
                        <a href="{{ route('mensajes.show', ['cliente_id' => $cliente->id]) }}">{{ $cliente->nombres }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- Chat o formulario de mensajes -->
        <div class="col-md-9">
            <!-- Aquí se mostrarán los mensajes del cliente seleccionado -->
            <div class="messages-container">
                <!-- Aquí se mostrarán los mensajes del cliente seleccionado -->
            </div>
            <!-- Formulario para enviar mensajes -->
            <form action="" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Escribe tu mensaje" name="mensaje">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
