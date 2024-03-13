@extends('admin.layouts.app')

@section('content')<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="searchInput" class="form-label"><i class="fas fa-search"></i> Buscar cliente:</label>
                <input type="text" id="searchInput" class="form-control" placeholder="Ingrese nombre, correo, etc.">
            </div>
        </div>
        <div class="col-md-2">
            <!-- Select para Departamentos -->
            <div class="mb-3">
                <label for="departamento" class="form-label"><i class="fas fa-map-marker-alt"></i> Departamento:</label>
                <select class="form-select" id="departamento">
                    <option value="" selected>Selecciona un departamento</option>
                    <option value="Lima">Lima</option>
                    <option value="Arequipa">Arequipa</option>
                    <option value="Cusco">Cusco</option>
                    <!-- Agrega más departamentos según necesites -->
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label class="form-label">&nbsp;</label>
                <button class="btn btn-primary w-100"><i class="fas fa-search"></i> Buscar</button>
            </div>
        </div>
    </div>

    <!-- Botones de Exportar a Excel y PDF -->
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group" role="group" aria-label="Exportar">
                <button type="button" class="btn btn-success"><i class="fas fa-file-excel"></i> Exportar a Excel</button>
                <button type="button" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Exportar a PDF</button>
            </div>
        </div>
    </div>
<br>
<hr>
    <div class="table-responsive">
        <div class="card-header bg-gradient-primary text-white">
            <h5 class="mb-0 text-center"><i class="fas fa-user"></i> Datos Personales</h5>

        </div>

        <table class="table table-bordered table-striped">
            <thead style="background-color: #4e73df; color: white !important;">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    {{-- <th>Dirección</th>
                    <th>Celular</th>
                    <th>Edad</th>
                    <th>Estado Civil</th> --}}
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->email }}</td>

                        <td>
                            <a href="{{ route('admin.cliente.verDetalle', ['id' => $cliente->id]) }}" data-toggle="tooltip" data-placement="top" title="Ver más">
                                <i class="fas fa-eye text-primary cursor-pointer ml-2" style="font-size: 1.2em;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


<!-- Script para la funcionalidad de búsqueda -->
<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("searchInput").addEventListener("input", function () {
            var filter, table, tr, td, i, txtValue;
            filter = this.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Cambia el índice según la columna que quieras buscar
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    });
</script>
@endsection