@extends('layout.interno')
@section('title', 'Ejemplo de Bootstrap')
@section('workspace')

<div class="card">
    <div class="card-header">
        CRUD de Artistas con Laravel y MySQL
    </div>
    <div class="card-body">
        <h5 class="card-tittle">Lista de Artistas</h5>
        <a href="{{route('artistas.create')}}" class="btn btn-primary">Agregar Artista</a>
        <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">A. Paterno</th>
                        <th scope="col">A. Materno</th>
                        <th scope="col">Reseña</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $artista)
                    <tr>
                        <td>{{$artista->id}}</td>
                        <td>{{$artista->Nombre}}</td>
                        <td>{{$artista->paterno}}</td>
                        <td>{{$artista->materno}}</td>
                        <td>{{$artista->resena}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>

 <h1>Hola Ejemplo</h1>
 <p>Este es un parrafo</p>
 <a href="{{route('artistas.create')}}">Agregar</a>
@endsection

