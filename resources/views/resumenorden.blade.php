@extends('plantilla')

@section('seccion')
<link rel="stylesheet"  href="{{asset('CSS/MiEstilo.css')}}">
<h2 id="titulo2">Resumen de la Orden</h2>
<div  class="mb-2"><h4 id="Etiquetas" >Nombre: </h4><h4 id="div"> {{$resumen->name}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas" >Apellido: </h4><h4 id="div"> {{$resumen->surname}}</h4></div>
<div  class="mb-2"><h4 id="Etiquetas">Tipo Documento: </h4><h4 id="div"> {{$resumen->documenttype}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas">Número Documento: </h4><h4 id="div"> {{$resumen->document}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas">Email: </h4><h4 id="div"> {{$resumen->email}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas">Telefono: </h4><h4 id="div"> {{$resumen->phone}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas">Estado Orden: </h4><h4 id="div"> {{$resumen->status}}</h4></div>
<div class="mb-2"><h4 id="Etiquetas">Fecha Creación: </h4><h4 id="div"> {{$resumen->created_at}}</h4></div>
<div class="mb-3"><h4 id="Etiquetas">Fecha Actualización: </h4><h4 id="div"> {{$resumen->updated_at}}</h4></div>
@if($resumen->status != "Payed")
  <a href="{{route('pago',$resumen)}}" id="boton" class="btn btn-primary mb-4 btn-lg">Pagar</a>
@endif
@endsection