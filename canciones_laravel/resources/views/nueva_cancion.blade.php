@extends('principal')
@section('titulo','Formulario de nuevas canciones')
@section('contenido')
    <h1>Formulario de nuevas canciones</h1>
    <form action="{{ route('agregarCancion') }}" method="post">
        @csrf{{-- Cross Site Request Forgery --}}
        <tr>
            <td>Título</td>
            <td>Álbum</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><input type="text" name="titulo" id="titulo" placeholder="Título"></td>
            <td><input type="text" name="album" id="album" placeholder="Álbum"></td>
            <td><input type="text" name="grupo" id="grupo" placeholder="Grupo"></td>
            <td><input type="number" name="anio" id="anio" placeholder="Año"></td>
            <td><input type="submit" value="Guardar">
        </tr>
    </form>
@endsection
