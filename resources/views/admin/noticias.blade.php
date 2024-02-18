@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Agregar Noticia</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('noticias.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen" id="imagen" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Agregar Noticia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
