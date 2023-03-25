@extends('layout.interno')
@section('title', 'EAgregar Artista')
@section('workspace')
<div class="card">
    <div class="card-header">
        Agregar Artista
    </div>
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('artistas.store')}}" method="POST">
            @csrf
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>

                <label for="paterno">A. Paterno</label>
                <input type="text" name="paterno" class="form-control" required>

                <label for="materno">A. Materno</label>
                <input type="text" name="materno" class="form-control" required>

                <label for="resena">Reseña</label>
                <textarea name="resena" id="resena" class="form-control" rows="3"></textarea>

                <br>

                <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Agregar</button>

            </form>
        </p>
    </div>
</div>


@endsection