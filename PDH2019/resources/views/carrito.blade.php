@extends('master')

@section('content')
<div class="cajacarrito">
<ul class="listacarrito">
    <li><h5>Producto</h5></li>
    <li><h5>Subtotal</h5></li>
    </ul>
    <hr width=1200>
      @forelse ($items as $item)
        <div class="productoscarrito">
<img src="/storage/product/{{$item->featuredimg}}" class="imagencarrito col-1" alt="...">
      <h5 class="col-4">{{$item->name}}</h5>
<h5 class="col-2 preciocarrito">${{$item->subtotal}}</h5>
<form class="" action="/deletecart" method="post">
  @csrf
  <input  type="hidden" name="id" value="{{$item->id}}">
  <button type="submit" class="btn btn-danger botoneliminar">Eliminar</a></button>
</form>
</div>
    <hr width=1200>

@empty

@endforelse
<hr width=1200>
    <li class="totalcarrito"><h5>Total del carrito</h5></li>
<hr width=1200>
<p>ACA VA EL TOTAL ETC</p>
<form class="" action="/checkout" method="post">
      @csrf
  <input  type="hidden" name="id" value="">
  <button class="botoncomprar btn btn-warning" type="submit" name="button"><strong>FINALIZAR COMPRA</strong></button>
</form>
    </div>
@endsection
