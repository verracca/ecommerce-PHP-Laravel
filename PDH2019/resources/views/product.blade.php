@extends('master')


@section('content')

<section class="d-flex bd-highlight">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carouselProducto">
            <div class="carousel-item active">
                <img src="img/producto1.jpg" class="" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/producto1second.jpg" class="" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/producto1.jpg" class="d-block" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="d-felx producto">
        <h2>Vaso Jarra Licuadora Philips Walita Hl 3252 Hl 3253</h2>
        <h1> $560</h1>
        <br>
        <div class="container">
            <section class="row ">
                <select class="custom-select col-xl-4" id="inlineFormCustomSelectPref">
                    <option value="0">Cantidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
                <button type="button" class=" btn btn-primary col-xl-4">Agregar al carrito</button>
            </section>
        </div>
        <br>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            t aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
</section>





@endsection('content')