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
<section class="categorias">
    <div class="d-flex flex-wrap justify-content-around linkscategorias">
        <a href="#"><img src="img/Categoria amarillo-05.png" alt="Heladeras" class="categoriasimg"></a>
        <a href="#"><img src="img/Categoria amarillo-06.png" alt="Heladeras" class="categoriasimg"></a>
        <a href="#"><img src="img/Categoria amarillo-07.png" alt="Heladeras" class="categoriasimg"></a>
        <a href="#"><img src="img/Categoria amarillo-08.png" alt="Heladeras" class="categoriasimg"></a>
        <a href="#"><img src="img/Categoria amarillo-09.png" alt="Heladeras" class="categoriasimg"></a>
        <a href="#"><img src="img/Categoria amarillo-10.png" alt="Heladeras" class="categoriasimg"></a>

    </div>

</section>

@endsection