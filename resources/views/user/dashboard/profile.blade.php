@extends('user.layout.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Perfil del Usuario</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="h4 mb-4">Información Personal</p>
                    <dl class="row">
                        <dt class="col-sm-4">Nombre:</dt>
                        <dd class="col-sm-8">{{ $user->nombres }} {{ $user->apellidos }}</dd>
                        <dt class="col-sm-4">Correo:</dt>
                        <dd class="col-sm-8">{{ $user->email }}</dd>
                        <!-- Agrega más campos según sea necesario -->
                    </dl>
                </div>
                <div class="col-md-6">
                    <p class="h4 mb-4">Foto de Perfil</p>
                    @if($user->photo)
                        <img src="{{ asset($user->photo) }}" alt="Foto de Perfil" class="img-fluid">
                    @else
                        <p>No hay foto de perfil. <a href="{{ route('user.dashboard.profile_edit') }}">Agregar foto</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
