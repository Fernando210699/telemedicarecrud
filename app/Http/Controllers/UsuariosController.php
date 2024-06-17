<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function index()
    {
        //Pagina de inicio del crud
        $datos = Usuarios::all();
        return view('inicio', compact('datos'));
    }

    
    public function create()
    {
        //El formulario donde nosotros agregamos datos

        return view('agregar');
    }

   
    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
        $usuarios = new Usuarios();
        $usuarios->nombre_usuario = $request->post('nombre_usuario');
        $usuarios->dni = $request->post('dni');
        $usuarios->tipo_usuario = $request->post('tipo_usuario');
        $usuarios->save();

        return redirect()->route("usuarios.index")->with("success", "Usuario agregado con exito!");

    }

    
    public function show($id){
        //Servira para obtener un registro de la tabla
        $usuarios = Usuarios::find($id);
        return view("eliminar", compact('usuarios'));
    }

    
    public function edit($id)
    {
        //Sirve para traer los datos que se van a editar 
        //y lo coloca en un formulario
        
        $usuarios = Usuarios::find($id);
        return view("actualizar", compact('usuarios'));
        
    }

   
    public function update(Request $request, $id)
    {
        //Este metodo actualiza los datos en la BD
        $usuarios = Usuarios::find($id);
        $usuarios->nombre_usuario = $request->post('nombre_usuario');
        $usuarios->dni = $request->post('dni');
        $usuarios->tipo_usuario = $request->post('tipo_usuario');
        $usuarios->save();

        return redirect()->route("usuarios.index")->with("success", "Usuario actualizado con exito!");

    }

    
    public function destroy($id)
    {
        //Elimina un registro
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
        return redirect()->route("usuarios.index")->with("success", "Usuario eliminado con exito!");
    }
}
