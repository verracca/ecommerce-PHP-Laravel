@extends('master')

@section('content')
  {{-- <div class="container">
      <h1>Home</h1>
      <h2>Lista de productos</h2>

      @forelse ($products as $product)
        <article>
          <img src="/storage/product/{{$product->featured_img}}" alt="">
          <h4 class="name">{{$product->name}}</h4>
          <p class="description">{{$product->description}}</p>
          <p class="price">Precio: {{$product->price}}$</p>
          <form class="" action="/addtocart" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <button type="submit" class="btn btn-success">Agregar al carrito</a>
          </form>


        </article>
      @empty
        <p>No hay productos disponibles</p>
      @endforelse



  </div> --}}
  @endsection
