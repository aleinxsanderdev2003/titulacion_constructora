@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Administrar Proyectos</h1>

    <!-- Formulario para agregar nuevos proyectos -->
    <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proyecto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="TODO">TODO</option>
                <option value="TECHO PROPIO">TECHO PROPIO</option>
                <option value="MIVIVIENDA">MIVIVIENDA</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Proyecto</button>
    </form>

    <hr>

    <!-- Tabla para listar proyectos existentes -->
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->categoria }}</td>
                <td>
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este proyecto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
