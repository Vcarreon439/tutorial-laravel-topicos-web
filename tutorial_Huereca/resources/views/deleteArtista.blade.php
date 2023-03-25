@extends('layout.interno')
@section('title', 'Eliminar Artista')
@section('workspace')

<div class="card">
    <div class="card-header">
        Eliminar Artista
    </div>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar el artista?
            <hr>
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>A. Paterno</th>
                        <th>A. Materno</th>
                        <th>Reseña</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="">
                <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        </p>
    </div>
</div>


@endsection