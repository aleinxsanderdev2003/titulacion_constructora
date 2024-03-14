@extends('admin.layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0 text-center"><i class="fas fa-user"></i> Datos Personales</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre:</label>
                            <input type="text" id="nombre" class="form-control" value="{{ $cliente->nombres }} {{ $cliente->apellidos }}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label"><i class="fas fa-envelope"></i> Correo:</label>
                            <input type="email" id="email" class="form-control" value="{{ $cliente->email }}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt"></i> Dirección:</label>
                            <input type="text" id="direccion" class="form-control" value="{{ $cliente->direccion ?? 'Aún no ingresado' }}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono" class="form-label"><i class="fas fa-phone"></i> Número Telefónico:</label>
                            <input type="text" id="telefono" class="form-control" value="{{ $cliente->celular ?? 'Aún no ingresado' }}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="edad" class="form-label"><i class="fas fa-birthday-cake"></i> Edad:</label>
                            <input type="text" id="edad" class="form-control" value="{{ $cliente->edad ?? 'Aún no ingresado' }}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label for="estadoCivil" class="form-label"><i class="fas fa-heart"></i> Estado Civil:</label>
                            <input type="text" id="estadoCivil" class="form-control" value="{{ $cliente->estado_civil ?? 'Aún no ingresado' }}" readonly>
                        </div>

                    </div>
                </div>
            </div>
        </div>






        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0 text-center"><i class="fas fa-image"></i> Foto de Perfil</h5>
                </div>
                <div class="card-body text-center">
                    @if($cliente->photo)
                        <img src="{{ asset('storage/' . $cliente->photo) }}" alt="Foto de perfil" class="img-fluid img-profile">
                    @else
                        <p>No hay foto de perfil.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Sección de documentos --}}<div class="container mt-4">
    <div class="row">
        {{-- Iterar sobre los documentos --}}
        @foreach($documentos as $documento)
            <div class="col-md-4 mb-4">
                <div class="card">
                    {{-- Encabezado de la tarjeta --}}
                    <div class="card-header bg-gradient-primary text-white">
                        <h5 class="mb-0 text-center">{{ $documento->nombre }}</h5>
                    </div>
                    {{-- Cuerpo de la tarjeta --}}
                    <div class="card-body">
                        {{-- Imagen del documento --}}
                        <img src="{{ asset('storage/' . $documento->ruta) }}" class="card-img-top img-fluid" alt="{{ $documento->nombre }}">
                        {{-- Detalles del documento --}}
                        <p class="card-text">Subido el: {{ $documento->created_at->format('d/m/Y') }}</p>
                        {{-- Enlace para descargar como imagen --}}
                        <a href="{{ route('admin.documento.download', ['id' => $documento->id, 'format' => 'image']) }}" class="btn btn-primary btn-sm">Descargar como imagen</a>
                        {{-- Enlace para descargar como PDF --}}
                        <a href="{{ route('admin.documento.download', ['id' => $documento->id, 'format' => 'pdf']) }}" class="btn btn-primary btn-sm">Descargar como PDF</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<style>
    .img-profile {
        max-width: 200px;
        max-height: 200px;
        border-radius: 10%;
    }
</style>
@endsection
