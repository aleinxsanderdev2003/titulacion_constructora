@extends('user.layout.app')
@section('content')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">Editar Perfil</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" name="nombres" value="{{ $user->nombres }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" value="{{ $user->apellidos }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
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
