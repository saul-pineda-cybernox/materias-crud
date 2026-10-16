@extends('layouts.app')

@section('title', 'Listado de Materias')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Tarjeta Principal -->
        <div class="card my-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
                <h4 class="mb-0 fw-bold">
                    <i class="fa-solid fa-list me-2"></i>Listado de Materias
                </h4>
                <a href="{{ route('materia.create') }}" class="btn btn-light text-primary fw-bold shadow-sm">
                    <i class="fa-solid fa-plus-circle me-1"></i> Nueva Materia
                </a>
            </div>
            
            <div class="card-body p-4">
                <!-- Mensaje de éxito -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-circle-check me-2 fs-5"></i>
                        <div>{{ session('success') }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Tabla de Registros -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle border">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="text-center" style="width: 80px;">ID</th>
                                <th scope="col">Nombre de la Materia</th>
                                <th scope="col" class="text-center" style="width: 120px;">Créditos</th>
                                <th scope="col">Profesor</th>
                                <th scope="col" class="text-center" style="width: 220px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($materias as $materia)
                                <tr>
                                    <th scope="row" class="text-center fw-bold">{{ $materia->id }}</th>
                                    <td class="fw-bold text-secondary">{{ $materia->nombre }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-info text-dark fs-6">{{ $materia->creditos }}</span>
                                    </td>
                                    <td>{{ $materia->profesor }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('materia.show', $materia->id) }}" class="btn btn-sm btn-outline-primary" title="Ver Detalle">
                                                <i class="fa-solid fa-eye"></i> Ver
                                            </a>
                                            <a href="{{ route('materia.edit', $materia->id) }}" class="btn btn-sm btn-outline-warning text-dark" title="Editar">
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <form action="{{ route('materia.destroy', $materia->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Desea eliminar esta materia?')" title="Eliminar">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        <i class="fa-solid fa-folder-open fs-1 d-block mb-2"></i>
                                        No hay materias registradas actualmente.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection