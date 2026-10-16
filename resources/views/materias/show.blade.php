@extends('layouts.app')

@section('title', 'Detalle de la Materia')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4">
            <div class="card-header bg-info text-dark py-3 d-flex justify-content-between align-items-center">
                <h4 class="mb-0 fw-bold">
                    <i class="fa-solid fa-circle-info me-2"></i>Detalle de la Materia
                </h4>
                <span class="badge bg-dark text-white fs-6">ID: {{ $materia->id }}</span>
            </div>
            
            <div class="card-body p-4">
                <div class="row mb-3">
                    <div class="col-sm-4 text-secondary fw-bold">Nombre de la Materia:</div>
                    <div class="col-sm-8 fs-5 text-dark fw-bold">{{ $materia->nombre }}</div>
                </div>
                <hr>

                <div class="row mb-3">
                    <div class="col-sm-4 text-secondary fw-bold">Créditos:</div>
                    <div class="col-sm-8">
                        <span class="badge bg-primary fs-6">{{ $materia->creditos }} Créditos</span>
                    </div>
                </div>
                <hr>

                <div class="row mb-3">
                    <div class="col-sm-4 text-secondary fw-bold">Profesor:</div>
                    <div class="col-sm-8 fs-6 text-dark">
                        <i class="fa-solid fa-user-tie me-1 text-secondary"></i> {{ $materia->profesor }}
                    </div>
                </div>
                <hr>

                <div class="row mb-3">
                    <div class="col-sm-4 text-secondary fw-bold">Fecha de Creación:</div>
                    <div class="col-sm-8 text-muted">
                        <i class="fa-solid fa-calendar-plus me-1"></i> {{ $materia->created_at ? $materia->created_at->format('d/m/Y H:i') : 'N/A' }}
                    </div>
                </div>
                <hr>

                <div class="row mb-4">
                    <div class="col-sm-4 text-secondary fw-bold">Última Actualización:</div>
                    <div class="col-sm-8 text-muted">
                        <i class="fa-solid fa-calendar-check me-1"></i> {{ $materia->updated_at ? $materia->updated_at->format('d/m/Y H:i') : 'N/A' }}
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-2">
                    <a href="{{ route('materia.index') }}" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-arrow-left me-1"></i> Volver al Listado
                    </a>
                    <a href="{{ route('materia.edit', [$materia]) }}" class="btn btn-warning fw-bold shadow-sm">
                       <i class="fa-solid fa-pen-to-square me-1"></i> Editar Materia
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection