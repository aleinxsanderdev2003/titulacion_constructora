@extends('user.layout.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Z8UJcFWpMO7bkXbnP6LmJMAqGOdfrd5lLOOQspWhgV8vqrAclU0DdBd2XBOJi1ZZ2O0IOrZe2UqKf2DNu5c3KUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-gradient-warning text-white">
                    <h5 class="mb-0 text-center"><i class="fas fa-user"></i> Datos Personales</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre:</label>
                            <input type="text" id="nombre" class="form-control" value="{{ $user->nombres }} {{ $user->apellidos }}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="form-label"><i class="fas fa-envelope"></i> Correo:</label>
                            <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>

                    <p class="h5 mt-4 text-center" data-bs-toggle="collapse" href="#additionalInfo" role="button" aria-expanded="false" aria-controls="additionalInfo">
                        <i class="fas fa-plus"></i> Agregar más datos personales
                    </p>
                    <div class="collapse" id="additionalInfo">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt"></i> Dirección:</label>
                                <input type="text" id="direccion" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label"><i class="fas fa-phone"></i> Número Telefónico:</label>
                                <input type="text" id="telefono" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="edad" class="form-label"><i class="fas fa-birthday-cake"></i> Edad:</label>
                                <input type="text" id="edad" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-gradient-warning text-white">
                    <h5 class="mb-0 text-center"><i class="fas fa-image"></i> Foto de Perfil</h5>
                </div>
                <div class="card-body text-center">
                    @if($user->photo)
                        <img src="{{ asset('storage/' . $user->photo) }}" alt="Foto de perfil" class="img-fluid img-profile">
                    @else
                        <p>No hay foto de perfil. <a href="{{ route('user.dashboard.profile_edit') }}"><i class="fas fa-camera"></i> Agregar foto</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

 {{-- <p class="h5 mb-4 text-center">Cambiar Contraseña</p>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="current_password" class="form-label">Contraseña Actual:</label>
                            <input type="password" id="current_password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="new_password" class="form-label">Contraseña Nueva:</label>
                            <input type="password" id="new_password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña:</label>
                            <input type="password" id="confirm_password" class="form-control">
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-warning">Cambiar Contraseña</button>
                    </div> --}}
<style>
    .img-profile {
        max-width: 200px;
        max-height: 200px;
        border-radius: 10%;
    }
</style>
@endsection
