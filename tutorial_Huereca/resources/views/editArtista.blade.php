@extends('layout.interno')
@section('title', 'Editar Artista')
@section('workspace')
<div class="card">
    <div class="card-header">
        Editar Artista
    </div>
    <div class="card-body">
        <p class="card-text">
            <form method="POST">
            @csrf
            @method('PUT')
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$artista->nombre}}" required>

                <label for="paterno">A. Paterno</label>
                <input type="text" name="paterno" class="form-control" value="{{$artista->paterno}}" required>

                <label for="materno">A. Materno</label>
                <input type="text" name="materno" class="form-control" value="{{$artista->materno}}" required>

                <label for="resena">Reseña</label>
                <textarea name="resena" id="resena" class="form-control" rows="3">{{$artista->resena}}</textarea>

                <br>

                <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Editar</button>

            </form>
        </p>
    </div>
</div>


@endsection