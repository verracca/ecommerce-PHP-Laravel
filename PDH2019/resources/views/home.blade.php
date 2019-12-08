@extends('master')


@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carouselimg" src="img/SliderChicoUno.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carouselimg" src="img/SliderChicoDos.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<h1 class="text-center categories">Categorías</h1>
<section id="categories" class="categorias">
    <div class="d-flex flex-wrap justify-content-around linkscategorias">
      {{-- @foreach ($categories as $category)
        <a href="/categories/microondas"><img src="img/Categoria amarillo-05.png" alt="Microondas" class="categoriasimg"></a>
      @endforeach --}}
        <a href="/categorias/1"><img src="img/Categoria amarillo-05.png" alt="Microondas" class="categoriasimg"></a>
        <a href="/categorias/2"><img src="img/Categoria amarillo-06.png" alt="Lavarropas" class="categoriasimg"></a>
        <a href="/categorias/3"><img src="img/Categoria amarillo-07.png" alt="Procesadoras" class="categoriasimg"></a>
        <a href="/categorias/4"><img src="img/Categoria amarillo-08.png" alt="Cafeteras" class="categoriasimg"></a>
        <a href="/categorias/5"><img src="img/Categoria amarillo-09.png" alt="Aspiradoras" class="categoriasimg"></a>
        <a href="/categorias/6"><img src="img/Categoria amarillo-10.png" alt="Licuadoras" class="categoriasimg"></a>

    </div>

</section>

@endsection
