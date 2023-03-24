@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('build/assets/css/home.css') }}">

<br>
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
                <a class="nav-link text-dark " href="">Autores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#" tabindex="-1" aria-disabled="true">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="#" tabindex="-1" aria-disabled="true">Idiomas</a>
            </li>
        </ul>
    </div>
    <div><br>
        <center>
            <h1>TU INFORMACIÓN</h1>
        </center>
    </div><br><br>
    <div class="colu1">
        <div class="row c1">
            <div class="col m-6">
                <h2>NOMBRE: </h2>
            </div>
            <div class="col m-6 c2">
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div><br><br>
    </div>
    <div class="colu1">
        <div class="row c1">
            <div class="col m-6">
                <h2>EMAIL: </h2>
            </div>
            <div class="col m-6 c2">
                <h2>{{ Auth::user()->email }}</h2>
            </div>
        </div>
    </div>

</div>
@endsection