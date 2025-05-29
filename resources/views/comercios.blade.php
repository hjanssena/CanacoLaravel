@extends('base')

@section('title', 'Comercios')

@section('content')
    <h1 class="text-center p-2">Comercios</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre del comercio</th>
                        <th>Responsable</th>
                        <th>Telefono</th>
                        <th>RFC</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Documentos</th>
                        <th>Verificar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comercios as $comer)

                        <tr>
                            <td>{{ $comer->nombre_comercio }}</td>
                            <td>{{ $comer->nombre_contacto }}</td>
                            <td>{{ $comer->telefono }}</td>
                            <td>{{ $comer->rfc_comercio }}</td>
                            <td>{{ $comer->direccion }}</td>
                            <td>{{ $comer->eMail }}</td>
                            <td>
                                <button class="btn btn-primary mt-3" onclick="document.getElementById('miDialogo').showModal()">
                                    Documentos
                                </button>

                                <dialog id="miDialogo">
                                <h4 class="mb-3">Selecciona una opción</h4>
                                <div>
                                    <button class="btn btn-outline-info m-1" onclick="mostrarTexto('Constancia de Situación Fiscal')">Constancia de Situación Fiscal</button>
                                    <button class="btn btn-outline-info m-1" onclick="mostrarTexto('Licencia de funcionamiento')">Licencia de funcionamiento</button>
                                    <button class="btn btn-outline-info m-1" onclick="mostrarTexto('Comprobante domiciliario')">Licencia de funcionamiento</button>
                                </div>
                                <p id="textoResultado" class="fw-bold mt-3"></p>
                                <button class="btn btn-danger mt-2" onclick="document.getElementById('miDialogo').close()">Cerrar</button>
                            </dialog>
                            </td>
                            <td>
                                @if($comer->aceptado == true)
                                    <span class="text-center">Aprobado</span>
                                @else
                                    <form action="{{ route('comercios.aprobar', $comer->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('¿Estás seguro de aprobar este participante?')">
                                        @csrf
                                        <button class="btn btn-sm btn-dark" title="Aprobar">✅</button>
                                    </form>

                                    <form action="{{ route('comercios.rechazar', $comer->id) }}" method="POST" class="d-inline ms-1"
                                        onsubmit="return confirm('¿Estás seguro de rechazar este participante?')">
                                        @csrf
                                        <button class="btn btn-sm btn-dark" title="Rechazar">❌</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $comercios->links() }}
        </div>

        <div class="container p-3">
            <div class="row">
                <form class="col-sm text-center" action="{{ route('comercios.pdf') }}">
                    <button class="btn btn-info">Generar PDF</button>
                </form>
            </div>
        </div>
        <script>
            function mostrarTexto(mensaje) {
                document.getElementById('textoResultado').textContent = mensaje;
            }
        </script>
@endsection