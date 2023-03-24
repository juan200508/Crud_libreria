@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('build/assets/css/home.css') }}">
<div class="container cont">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link text-dark " aria-current="page" href="/home  ">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark " aria-current="page" href="/sexos">Sexo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="/autores">Autores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="/libros">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="/categorias" tabindex="-1" aria-disabled="true">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="/idiomas" tabindex="-1" aria-disabled="true">Idiomas</a>
            </li>
        </ul>
    </div><br>
    <div>
        <center>
            <div class=""><br>
                <form action="{{ route('libros.update', $libros) }}" method="POST" class="form shadow p-3  mb-5 rounded " style="background: #A37F6F">
                    @csrf
                    @method('PUT')
                    <h1>FORMULARIO DE LIBROS</h1>
                    <div><br><br>
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $libros->titulo) }}">
                        @error('titulo')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><br><br>
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $libros->descripcion) }}">
                        @error('descripcion')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><br><br>
                        <label for="fecha_publicacion" class="form-label">Fecha Publicación</label>
                        <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ old('fecha_publicacion', $libros->fecha_publicacion) }}">
                        @error('fecha_publicacion')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><br><br>
                        <label for="idioma" class="form-label">Idioma</label>
                        <select name="cod_idioma" id="idioma" class="form-select" value="{{ old('cod_idioma') }}">
                            <option value="" selected>Seleccionar...</option>
                            @foreach ($idioma as $idiomas)
                            <option value="{{ $idiomas->cod_idioma }}" {{ ($libros->cod_idioma == $idiomas->cod_idioma)?'selected' : '' }}>{{ $idiomas->descripcion }}</option>
                            @endforeach
                        </select>
                        @error('cod_idioma')
                        <small class="text-danger" role="alert">Seleccione un idioma</small>
                        @enderror
                    </div><br>
                    <label for="categorias" class="">Categoría</label>
                    <div>
                        @if (sizeof ($categorias) > 0)
                        @foreach ($categorias as $key => $value)
                        <input type="checkbox" class="" name="categorias[]" value="{{ $key }}" {{ $libros->categorias->pluck('cod_categoria')->contains($key) ? 'checked' : '' }}>
                        {{ $value }}
                        @endforeach
                        @error('categorias')
                        <small class=" text-danger">No se encontraron categorias</small>
                        @enderror
                        @else
                        @endif
                    </div><br><br>
                    <label for="categorias" class="">Autor</label>
                    <div>
                        @if (sizeof ($autores) > 0)
                        @foreach ($autores as $key => $value)
                        <input type="checkbox" class="" name="autores[]" value="{{ $key }}" {{ $libros->autores->pluck('cod_autor')->contains($key) ? 'checked' : '' }}>
                        {{ $value }}
                        @endforeach
                        @error('autores')
                        <small class=" text-danger">No se encontraron autores</small>
                        @enderror
                        @else
                        @endif
                    </div>
                    <div><br>
                        <button class="btn btn-warning" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </center>

    </div>
</div>

@endsection