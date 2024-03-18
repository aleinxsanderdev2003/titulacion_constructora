
@extends('user.layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Documentos Cargados</div>

                <div class="card-body">
                    <div class="row">
                        @foreach($cliente->documentos as $documento)
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $documento->ruta) }}" class="card-img-top" alt="{{ $documento->nombre }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $documento->nombre }}</h5>
                                        <p class="card-text">Tipo: {{ $documento->tipo }}</p>
                                        <p class="card-text">Subido el: {{ $documento->created_at->format('d/m/Y') }}</p>
                                        <form method="POST" action="{{ route('cliente.documentos.delete', ['id' => $documento->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Quitar envío</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
