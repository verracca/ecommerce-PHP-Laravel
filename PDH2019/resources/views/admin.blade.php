@extends('master')
@section('content')
  <h1>Hola Soy admin</h1>
  <ul>


@foreach ($products as $product)
  <li>{{$product->name}}</li>
  <form class="" action="borrarproducto" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$product->id}}">
    <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
  </form>
@endforeach
  </ul>
@endsection
