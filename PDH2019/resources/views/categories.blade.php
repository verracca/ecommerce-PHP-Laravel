@extends('master')

@section('content')
  @forelse ($products as $product)
    <article>
      <img src="/storage/product/{{$product->featuredimg}}" alt="">
      <h4 class="name"><a href="/product/{{$product->id}}">{{$product->name}}</a></h4>
      <p class="description">{{$product->description}}</p>
      <p class="price">Precio: {{$product->price}}$</p>
    </article>
  @empty
    <p>No hay productos disponibles</p>
  @endforelse

  @endsection
