@extends('master')

@section('content')
<div class="container">
    <h1>Mi Carrito</h1>
    <h2>Lista de productos</h2>

    @forelse ($items as $item)
        <article class="d-flex flex-row bd-highlight mb-3">
          <img class="p-2 bd-highlight imagencarrito" src="/storage/product/{{$item->featuredimg}}" alt="">
          <h4 class="name p-2 bd-highlight">{{$item->name}}</h4>
          <p class="description p-2 bd-highlight">{{$item->description}}</p>
          <p class="price p-2 bd-highlight">Precio: {{$item->subtotal}}$</p>
  <form class="" action="/deletecart" method="post">
    @csrf
    <input  type="hidden" name="id" value="{{$item->id}}">
    <button type="submit" class=" btn btn-danger col-xl-10 botoncarrito row">Eliminar</a>
  </form>

        </article>
      @empty

      @endforelse



</div>
@endsection
