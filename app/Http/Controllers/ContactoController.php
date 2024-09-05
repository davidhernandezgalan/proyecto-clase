<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function listado(){
        $mensajes = Contacto::all();

        return view('listado-contactos', compact('mensajes'));

        //return view('listado-contactos'['mensajes' -> $mensajes]);
    }

    public function formularioContacto(){
        return view('contacto');
    }


    public function guardarFormulario(Request $request) {
        //dd($request->all(), $request->nombre);
        $request->validate([
            'nombre' -> 'required|min:3|max:255',
            'correo' -> 'required|min:3|email',
            'mensaje' -> ['required|min:3|max:255']
        ])

        $contacto=new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
    
        return redirect('/contacto');
    }
}