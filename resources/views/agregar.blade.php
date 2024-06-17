@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo usuario</h5>
    <div class="card-body">
      
      <p class="card-text">
            <form action="{{route('usuarios.store')}}" method="POST">
                @csrf
                <label for="">Nombre de usuario</label>
                <input type="text" name="nombre_usuario" class="form-control" required>
                <label for="">DNI</label>
                <input type="text" name="dni" class="form-control" required> 
                <label for="">Tipo de usuario</label>
                <input type="text" name="tipo_usuario" class="form-control" required>  
                <br>
            <a href="{{route("usuarios.index")}}" class="btn btn-info">
              <span class="fas fa-undo-alt"></span> Volver</a> 
            <button class="btn btn-primary">
              <span class="fas fa-user-plus"></span> Agregar
            </button>
            </form>    
      </p>   
    </div>
  </div>
@endsection