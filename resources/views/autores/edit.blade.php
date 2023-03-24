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
                <form action="{{ route('autores.update', $autor) }}" method="POST" class="form shadow p-3 mb-5 rounded ">
                    @csrf
                    @method('PUT')
                    <h1>FORMULARIO DE AUTORES</h1>
                    <div><br><br>
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombres" value="{{ old('nombres', $autor->nombres) }}">
                        @error('nombres')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><br><br>
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $autor->apellidos) }}">
                        @error('apellidos')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><br><br>
                        <label for="sexo" class="form-label">Sexo</label>
                        <select name="cod_sexo" id="sexo" class="form-select" value="{{ old('cod_sexo') }}">
                            <option value="" selected>Seleccionar...</option>
                            @foreach ($sexos as $sexo)
                            <option value="{{ $sexo->cod_sexo }}" {{ ($autor->cod_sexo == $sexo->cod_sexo)?'selected':'' }}>{{ $sexo->descripcion }}</option>
                            @endforeach
                        </select>
                        @error('cod_sexo')
                        <small class="text-danger" role="alert">Seleccione un sexo</small>
                        @enderror
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