@extends('principal') 

@section('titulo','Editar canción')

@section('contenido')
    <form action="{{ route('actualizarCancion') }}" method="POST">
        @csrf
        <tr>
            <td><input type="hidden" name="id" id="id" value="{{ $cancion->id }}"></td>
            <td>Título</td>
            <td><input type="text" name="titulo" id="titulo" value="{{ $cancion->titulo }}" ></td><br><br>
            <td>Álbum</td>
            <td><input type="text" name="album" id="album" value="{{ $cancion->album }}"></td><br><br>
            <td>Grupo</td>
            <td><input type="text" name="grupo" id="grupo" value="{{ $cancion->grupo }}"></td><br><br>
            <td>Año</td>
            <td><input type="number" name="anio" id="anio" value="{{ $cancion->anio }}"></td><br><br>
            <td><input type="submit" value="Guardar">
        </tr>
    </form>
@endsection