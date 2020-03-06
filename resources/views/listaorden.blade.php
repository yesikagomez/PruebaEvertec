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
      <th scope="col">Acciones</th>
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
