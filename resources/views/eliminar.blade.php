@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar usuario</h5>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de eliminar este registro?

            <table class="table table-sm table-hover trable-bordered" style="background-color:white">
                <thead>
                    <th>Nombre de usuario</th>
                    <th>DNI</th>
                    <th>Tipo de usuario</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$usuarios->nombre_usuario}}</td>
                        <td>{{$usuarios->dni}}</td>
                        <td>{{$usuarios->tipo_usuario}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route('usuarios.destroy', $usuarios->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route("usuarios.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Volver</a> 
                <button class="btn btn-danger">
                    <span class="fas fa-user-times"></span> Eliminar
                </button>
            </form>
        </div> 
      </p>
      
    </div>
  </div>
@endsection