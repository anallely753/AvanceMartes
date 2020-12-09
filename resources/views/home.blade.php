@extends('layouts.app')

@section('content')
<main class="container">
    <!-- Title -->
    <div class="home-title row">
        <div class="home-title_text pl-3 mr-5">
            <h1 class="mt-4 mt-sm-5 text-purple ">Diseño Web</h1>
            <p>Gen41</p>
        </div>
        <div class="home-title_foto ">
            <img src="img/ToyFace17.png" alt="">
        </div>
    </div>
    <hr>
    <h2 class="pendientesh2 text-purple mt-2 text-orange">Tareas pendientes</h2>
    <!-- Cursos <0 -->
        <div class="cursos-index mt-4">
            <div class="row row-cols-1 row-cols-lg-2 ">
                <!-- Card 1 -->
                <div class="col mb-4">
                    <div class="card h-100 bg-yellow p-3 p-xl-4">
                        <div class="home-cursos_titulo d-flex">
                            <div class="cursos-card_header">
                                <h2 class="card-title pt-1 pl-2">Preguntas</h2>
                                <h3 class="pl-2">14/02/20 a las 00:00</h3>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Reiciendis eius exercitationem voluptatibus tempora quo vitae totam sed. Temporibus placeat, labore.</p>
                        <a class="card-text w-50">Archivo.zip</a>
                        <a href="entregas.html" class="btn btn-success card-entregar mt-5">Entregar</a>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
