@extends('layout/plantilla')

@section('tituloPagina', 'Telemedicare')

@section('contenido')

<div class="card">
        <h5 class="card-header">TELEMEDICARE <i class="fas fa-medkit"></i></h5>
        <div class="card-body">
        
        <p>
            <a href="{{route("usuarios.create")}}"class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo usuario
            </a>

        </p>
        <hr>
        <h5 class="card-title text-center">Listado de usarios en el sistema</h5>
        <p class="card-text">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$mensaje}}
                        </div>
                    @endif

                   
                </div>
            </div>
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre de usuario</th>
                        <th>DNI</th>
                        <th>Tipo de usuario</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->nombre_usuario}}</td>
                            <td>{{$item->dni}}</td>
                            <td>{{$item->tipo_usuario}}</td>
                            <td>
                               <form action="{{route("usuarios.edit", $item->id)}}" method="get">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>         
                            </td>
                            <td>
                                <form action="{{route("usuarios.show", $item->id)}}" method="get">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                @endforeach        
                    </tbody>
                </table>
                <hr>
                
                </div>
              
            </div>
        </p>
        
        </div>

  </div>
    
@endsection
    
