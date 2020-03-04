@extends('plantilla')

@section('seccion')
<table class="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha Creación</th>
      <th scope="col">Fecha Actualización</th>
    </tr>
  </thead>
  <tbody>
  @foreach($lista as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      <td><a href="{{route('resumen',$item)}}" clase="btn btn-primary">Resumen Orden</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection
