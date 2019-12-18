@extends('master')

@section('content')
  @foreach ($ordenes as $orderNumber => $order)
    <div class="container ordencontenedor">
    <div class="ordendecompra">
      <h5>N° ORDEN DE COMPRA: {{$orderNumber}}</h5>
          <hr width=400>
      <li class="lideorden">Productos</li>
      @for ($i=0; $i < count($order); $i++)
        <li>{{$order[$i]->name}} - Cantidad: {{$order[$i]->quantity}} - Subtototal = {{$order[$i]->subtotal}}</li>
      @endfor
      <br>
      <h5>Total: ${{$order[0]->total}}</h5>
      <br>
      <br>
      <hr width=400>
    <button class="btn btn-secondary botonvolver" type="button" name="button"><a href="/">Vovler al incio<a/></button>
    </div>
    </div>
  @endforeach


@endsection
