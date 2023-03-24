    @extends('layouts.app')

    @section('content')
    <link rel="stylesheet" href="{{ asset('build/assets/css/home.css') }}">
    <div class="container cont">

        <div><br>
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
            <center>
                <h1>AUTORES</h1>
            </center>
            <div><br>
                <div align="right">
                    <a class="btn btn-dark" href="{{ route('autores.create') }}">Agregar Autor</a>
                </div><br>
                @if (sizeof($autores) > 0)
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Sexo</th>
                            <th class="text-center" width="20%  ">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autores as $autor)
                        <tr>
                            <td class="text-center">{{ $autor->cod_autor }}</td>
                            <td class="text-center">{{ $autor->nombres }}</td>
                            <td class="text-center">{{ $autor->apellidos }}</td>
                            <td class="text-center">{{ $autor->sexo->descripcion }}</td>
                            <td class="text-center">
                                <div class="row">
                                    <div class="col m-6">
                                        <a href="{{ route('autores.edit', $autor) }}" class="btn btn-secondary">Editar</a>
                                    </div>
                                    <div class="col m-6">
                                        <form action="{{ route('autores.destroy', $autor) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-light">
                    <h3>NO SE ENCONTRARON REGISTROS</h3>
                </div>
                @endif
            </div>
        </div>
    </div>

    @endsection