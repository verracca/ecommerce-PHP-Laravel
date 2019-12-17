@extends('master')
@section('content')
  <h1>Productos</h1>
  <ul>


@foreach ($products as $product)
  <ul class="list-unstyled carritoentero">
    <li class="media">
  <form class="" action="borrarproducto" method="post">
    @csrf
          <div class="media-body">
    <h2>{{$product->name}}</h2>
    <input type="hidden" name="id" value="{{$product->id}}">
    <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
  </form>

  </div>
</li>
</ul>

@endforeach
  </ul>
@endsection
