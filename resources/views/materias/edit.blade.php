@extends('layouts.app')

@section('title', 'Editar Materia')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4">
            <div class="card-header bg-warning text-dark py-3">
                <h4 class="mb-0 fw-bold">
                    <i class="fa-solid fa-pen-to-square me-2"></i>Editar Materia
                </h4>
            </div>
            <div class="card-body p-4">

                <!-- Mensajes de Error de Validación -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('materia.update', $materia->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre de la Materia</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $materia->nombre) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="creditos" class="form-label fw-bold">Número de Créditos</label>
                        <input type="number" class="form-control" id="creditos" name="creditos" value="{{ old('creditos', $materia->creditos) }}" required min="1">
                    </div>

                    <div class="mb-4">
                        <label for="profesor" class="form-label fw-bold">Nombre del Profesor</label>
                        <input type="text" class="form-control" id="profesor" name="profesor" value="{{ old('profesor', $materia->profesor) }}" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('materia.index') }}" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-arrow-left me-1"></i> Cancelar / Volver
                        </a>
                        <button type="submit" class="btn btn-primary fw-bold shadow-sm">
                            <i class="fa-solid fa-rotate me-1"></i> Actualizar Materia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection