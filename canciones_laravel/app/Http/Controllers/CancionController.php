<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller{
    public function index(){
        $songs = Cancion::get();
        return view('inicio', ['canciones' => $songs]);
    }

    public function agregarCancion(Request $peticion){
        $cancion = new Cancion();
        $cancion->titulo = $peticion->titulo;
        $cancion->album = $peticion->album;
        $cancion->grupo = $peticion->grupo;
        $cancion->anio = $peticion->anio;
        $cancion->save();
        session()->flash('mensaje', 'Canción agregada correctamente');
        return redirect()->route('inicio'); //->with('mensaje', 'Canción agregada correctamente');
    }

    public function eliminarCancion(Request $peticion){
        $idEliminar = $peticion->route('id');
        $cancion = Cancion::findOrFail($idEliminar);
        $cancion->delete();
        return redirect()->route('inicio')->with('mensaje', 'Canción eliminada correctamente');
    }

    public function editarCancion(Request $peticion){
        $idEditar= $peticion->route('id');
        $cancion = Cancion::findOrFail($idEditar);
        return view('editar_cancion',['cancion' => $cancion]);
    }
}
