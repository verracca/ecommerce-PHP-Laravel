@extends('master')

@section('content')
  @foreach ($ordenes as $orderNumber => $order)
    <div class="container ordencontenedor">
    <div class="ordendecompra">
      <h4>N° ORDEN DE COMPRA: {{$orderNumber}}</h4>
          <hr width=400>
      <li class="lideorden">Productos</li>
      @for ($i=0; $i < count($order); $i++)
        <li>{{$order[$i]->name}}
          <br><strong>- Cantidad =</strong> {{$order[$i]->quantity}}
          <br><strong>- Subtototal =</strong>  {{$order[$i]->subtotal}}</li>
      @endfor
      <br>
      <h5>Total: ${{$order[0]->total}}</h5>
      <br>
      <br>
      <hr width=400>
    <button class="btn btn-secondary botonvolver" type="button" name="button"><a href="/">Volver al inicio<a/></button>
    </div>
    </div>
  @endforeach


@endsection
