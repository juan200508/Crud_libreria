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
                <form action="{{ route('sexos.update', $sexo) }}" method="POST" class="form shadow p-3 mb-5 rounded ">
                    @csrf
                    @method('PUT')
                    <h1>FORMULARIO DE SEXO</h1>
                    <div><br><br>
                        <label for=" descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $sexo->descripcion }}">
                        @error('descripcion')
                        <small class="text-danger">{{ $message }}</small>
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