@extends('user.layout.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargar Documentos</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cliente.documentos.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Documento 1 -->
                        <div class="mb-3">
                            <label for="documento1" class="form-label">Copia DNI:</label>
                            <input type="file" class="form-control" id="documento1" name="documento1" required>
                        </div>

                        <!-- Documento 2 -->
                        <div class="mb-3">
                            <label for="documento2" class="form-label">Copia Literal:</label>
                            <input type="file" class="form-control" id="documento2" name="documento2" required>
                        </div>

                        <!-- Documento 3 -->
                        <div class="mb-3">
                            <label for="documento3" class="form-label">Normas APA:</label>
                            <input type="file" class="form-control" id="documento3" name="documento3" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Cargar Documentos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
