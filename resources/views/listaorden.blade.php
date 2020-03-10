@extends('plantilla')

@section('seccion')
<link rel="stylesheet"  href="{{asset('CSS/MiEstilo.css')}}">
<table class="table" >
  <thead>
    <tr>
      <th scope="col" id="lista">id</th>
      <th scope="col" id="lista">Nombre</th>
      <th scope="col" id="lista">Email</th>
      <th scope="col" id="lista">Telefono</th>
      <th scope="col" id="lista">Estado</th>
      <th scope="col" id="lista">Fecha Creación</th>
      <th scope="col" id="lista">Fecha Actualización</th>
      <th scope="col" id="lista">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($lista as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><a href="{{route('resumen',$item)}}" clase="btn btn-primary">{{$item->name}}</a></td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      <td>
        <a href="{{route('editar',$item)}}" class="btn btn-warning btn-sm">Editar</a>
      <form action="{{route('eliminar',$item)}}" method="POST" 
      class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
      </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{$lista->links()}}
@endsection
