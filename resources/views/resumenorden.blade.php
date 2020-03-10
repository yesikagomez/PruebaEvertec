@extends('plantilla')

@section('seccion')
<h1>Resumen de la Orden</h1>
<h4>Nombre: {{$resumen->name}}</h4>
<h4>Apellido: {{$resumen->surname}}</h4>
<h4>Tipo Documento: {{$resumen->documenttype}}</h4>
<h4>Número Documento: {{$resumen->document}}</h4>
<h4>Email: {{$resumen->email}}</h4>
<h4>Telefono: {{$resumen->phone}}</h4>
<h4>Estado Orden: {{$resumen->status}}</h4>
<h4>Fecha Creación: {{$resumen->created_at}}</h4>
<h4>Fecha Actualización: {{$resumen->updated_at}}</h4>

@if($resumen->status != "Payed")
  <a href="{{route('pago',$resumen)}}" class="btn btn-primary mb-3">Pagar</a>
@endif
@endsection