@extends('layouts.app')

@section('title', 'Crear Nueva Materia')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card my-4">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="mb-0 fw-bold">
                    <i class="fa-solid fa-plus-circle me-2"></i>Crear Nueva Materia
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

                <form action="{{ route('materia.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre de la Materia</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ej. Estructura de Datos" required>
                    </div>

                    <div class="mb-3">
                        <label for="creditos" class="form-label fw-bold">Número de Créditos</label>
                        <input type="number" class="form-control" id="creditos" name="creditos" value="{{ old('creditos') }}" placeholder="Ej. 8" required min="1">
                    </div>

                    <div class="mb-4">
                        <label for="profesor" class="form-label fw-bold">Nombre del Profesor</label>
                        <input type="text" class="form-control" id="profesor" name="profesor" value="{{ old('profesor') }}" placeholder="Ej. Dr. Roberto Gómez" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('materia.index') }}" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-arrow-left me-1"></i> Cancelar / Volver
                        </a>
                        <button type="submit" class="btn btn-success fw-bold shadow-sm">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Guardar Materia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection