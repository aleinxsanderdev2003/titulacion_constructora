@extends('user.layout.app')
@section('content')

    <div class="container mt-3 mb-5">
        <div class="card">
            <div class="card-header bg-gradient-warning">
                <h2 class="mb-0">Editar Perfil</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombres" class="form-label"><i class="fas fa-user"></i> Nombres:</label>
                        <input type="text" class="form-control" name="nombres" value="{{ $user->nombres }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" value="{{ $user->apellidos }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Correo:</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label"><i class="fas fa-map-marker-alt"></i> Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $user->direccion }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="celular" class="form-label"><i class="fas fa-phone"></i> Número Telefónico:</label>
                        <input type="number" id="celular" name="celular" class="form-control" maxlength="9" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 9);" value="{{ $user->celular }}" required>
                        <div class="invalid-feedback">Por favor, ingrese hasta 9 números.</div>
                    </div>


                    <div class="mb-3">
                        <label for="edad" class="form-label"><i class="fas fa-birthday-cake"></i> Edad:</label>
                        <input type="number" id="edad" class="form-control" name="edad" maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 2);" value="{{ $user->edad }}" required>
                        <div class="invalid-feedback">Por favor, ingrese hasta 2 números.</div>
                    </div>


                    <div class="mb-3">
                        <label for="estado_civil" class="form-label"><i class="fas fa-heart"></i> Estado Civil:</label>
                        <input type="text" id="estado_civil" name="estado_civil" class="form-control" value="{{ $user->estado_civil }}" required>
                    </div>


                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto de Perfil:</label>
                        <input type="file" class="form-control" name="photo">
                        @if($user->photo)
                            <p>La foto actual se mostrará después de guardar.</p>
                        @endif
                    </div>
                    <!-- Agrega más campos según sea necesario -->
                    <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                </form>
            </div>
        </div>
    </div>
@endsection
