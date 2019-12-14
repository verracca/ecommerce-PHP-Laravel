@extends('master')


@section('content')

<section class="d-flex productoentero">
    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carouselProducto">
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
    </div> --}}
      <img class="imgProducto" src="/storage/product/{{$product->featuredimg}}" class="" alt="">
    <section class="d-felx producto">
        <h2>{{$product->name}}</h2>
        <h1 class="precioproducto"> ${{$product->price}}</h1>
        <section class="row nuñez">
        <i class="fas fa-truck"></i>
          <p class="ubicacion">Envios a todo el pais</p>
        </section>
        <section class="row nuñez">
          <i class="fas fa-location-arrow"></i>
          <p class="ubicacion">Nuñez, C.A.B.A.</p>
        </section>
        <br>
        <div class="container productosolo">
            <section class=" ">
                <form class="" action="/addtocart" method="post">
          @csrf
          <input type="number" class="col-xl-6 row" name="quantity" value="">
          <input  type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class=" btn btn-primary col-xl-6 botoncarrito row">Agregar al carrito<i class="fas fa-shopping-cart"></i></a>
        </form>

            </section>
        </div>
        <br>
        <br>
        <p>{{$product->description}}</p>
        <br>
        <br>
    </section>
</section>





@endsection('content')
