    @extends('layouts.app')
    @section('content')
    <link rel="stylesheet" href="{{ asset('build/assets/css/wel.css') }}">


    <div class="container cont">
        <center>LIBRERIA SAN CARLOS</center><br>
        <div>
            <center>
                <p class="text1">
                    La librería San Carlos es una reconocida libreria de la ciudad de Bogotá que está operando desde el año 2002.
                    Para optimizar y facilitar el acceso a la información de la librería se crea nuestra página web, que tendrá las
                    siguientes funcionalidades:
                </p>
            </center><br>
        </div>
        <div class="">
            <div class="row c1">
                <div class="col m-6">
                    <img src="{{ asset('build/assets/img/us.png') }}" class="img-thumbnail ima2" alt="...">
                </div>
                <div class="col m-6 text2">
                    <p>Registrarse en la librería y tener acceso a la información de libros, autores, etc..</p>
                </div>
            </div><br>
            <div class="row c2">
                <div class="col m-6">
                    <img src="{{ asset('build/assets/img/li.png') }}" class="img-thumbnail ima2" alt="...">
                </div>
                <div class="col m-6 text2">
                    <p>Consultar los autores de los libros y que autores están registrados en la librería</p>
                </div>
            </div><br>
            <div class="row c1">
                <div class="col m-6">
                    <img src="{{ asset('build/assets/img/crear.png') }}" class="img-thumbnail ima2" alt="...">
                </div>
                <div class="col m-6 text2">
                    <p>Crear, editar o eliminar libros según tu necesidad</p>
                </div>
            </div>
        </div>
    </div>

    @endsection