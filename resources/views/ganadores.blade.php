@extends('base')

@section('title', 'Ganadores')

@section('content')
    <h1 class="text-center p-2">Ganadores</h1>
    <div class="text-center mb-3">
        <h5>Ganadores Aprobados: {{ $approvedCount }}</h5>
    </div>
    @if ($ganadores->isEmpty())
        <div class="container p-3">
            <div class="row">
                <form class="col-sm text-center" action="{{ route('ganadores.generar') }}">
                    <button class="btn btn-info">Generar más ganadores</button>
                </form>
            </div>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Monto</th>
                        <th>Fecha de Compra</th>
                        <th>Teléfono</th>
                        <th>Ticket</th>
                        <th>Verificar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ganadores as $ganador)
                        @php
                            $p = $ganador->participante;
                        @endphp
                        <tr>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->apellidos }}</td>
                            <td>${{ number_format($p->monto, 2) }}</td>
                            <td>{{ \Carbon\Carbon::parse($p->fecha_compra)->format('d/m/Y') }}</td>
                            <td>{{ $p->telefono }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                    data-bs-target="#ticketModal{{ $ganador->id }}">
                                    Ver Ticket
                                </button>

                                <!-- Ticket Modal -->
                                <div class="modal fade" id="ticketModal{{ $ganador->id }}" tabindex="-1"
                                    aria-labelledby="ticketLabel{{ $ganador->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ticketLabel{{ $ganador->id }}">Ticket</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Cerrar"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('storage/tickets/' . $p->ticket_image) }}" class="img-fluid"
                                                    alt="Ticket">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($ganador->aprobado == true)
                                    <span class="text-center">Aprobado</span>
                                @else
                                    <form action="{{ route('ganadores.aprobar', $ganador->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('¿Estás seguro de aprobar este participante?')">
                                        @csrf
                                        <button class="btn btn-sm btn-dark" title="Aprobar">✅</button>
                                    </form>

                                    <form action="{{ route('ganadores.rechazar', $ganador->id) }}" method="POST" class="d-inline ms-1"
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
            {{ $ganadores->links() }}
        </div>

        <div class="container p-3">
            <div class="row">
                <form class="col-sm text-center" action="{{ route('ganadores.generar') }}">
                    <button class="btn btn-info">Generar más ganadores</button>
                </form>
                <form class="col-sm text-center" action="{{ route('ganadores.pdf') }}">
                    <button class="btn btn-info">Generar PDF</button>
                </form>
            </div>
        </div>
    @endif
@endsection