@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar usuario</h5>
    <div class="card-body">
      
      <p class="card-text">
            <form action="{{route('usuarios.update', $usuarios->id)}}" method="POST">
              @csrf
              @method("PUT")
              <label for="">Nombre de usuario</label>
                <input type="text" name="nombre_usuario" class="form-control" required value="{{$usuarios->nombre_usuario}}">
                <label for="">DNI</label>
                <input type="text" name="dni" class="form-control" required value="{{$usuarios->dni}}"> 
                <label for="">Tipo de usuario</label>
                <input type="text" name="tipo_usuario" class="form-control" required value="{{$usuarios->tipo_usuario}}">  
                <br>
                <a href="{{route("usuarios.index")}}" class="btn btn-info">
                  <span class="fas fa-undo-alt"></span> Volver</a> 
            <button class="btn btn-warning">
              <span class="fas fa-user-edit"></span> Actualizar
            </button>
            
              
            </form>
            
      </p>
      
    </div>
  </div>
@endsection