@extends('master')

@section('content')

@if (isset($category))

<h1>{{$category->name}}</h1>

@endif

@forelse ($products as $product)
<article class="">
  <div class="card mb-1 articulos" style="width: 85%;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/storage/product/{{$product->featuredimg}}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><a href="/producto/{{$product->id}}">{{$product->name}}</a></h4>
          <p class="card-text">{{$product->description}}</p>
          <h5 class="card-text">Precio: {{$product->price}}$</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</article>

@empty
<p>No hay productos disponibles</p>
@endforelse



@endsection