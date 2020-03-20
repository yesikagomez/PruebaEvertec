@extends('plantilla')

@section('seccion')
<link rel="stylesheet"  href="{{asset('CSS/MiEstilo.css')}}">
<h2 id="titulo2">Orden</h2> 
@if(session('mensaje'))
  <div class="alet alert-success">
      {{session('mensaje')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
  </div> 
@endif

<form action="{{route('crear')}}" method="POST">
  @csrf

  @error('name')
    <div class="alert alert-success">
      El nombre es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
    </div>
  @enderror
  @error('surname')
    <div class="alert alert-success">
      El apellido es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
    </div>
  @enderror
  @error('document')
    <div class="alert alert-success">
      El número de documento es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
    </div>
  @enderror
  @error('email')
    <div class="alert alert-success">
      El email es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
    </div>
  @enderror
    @error('phone')
    <div class="alert alert-success">
      El telefono es obligatorio
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <spam aria-hidden="true">&times</spam>
      </button>
    </div>
  @enderror
  <div class="form-group container">
    <label for="Nombre" id="Etiquetas">Nombre</label>
    <input type="text" class="form-control mb-2" id="Nombre" name="name" placeholder="Ingrese Nombre" value="{{old('name')}}">
  </div> 
  <div class="form-group container">
    <label for="surname" id="Etiquetas">Apellido</label>
    <input type="text" class="form-control mb-2" id="surname" name="surname" placeholder="Ingrese Nombre" value="{{old('name')}}">
  </div> 
  <div class="container row">
    <div class="form-group col">
      <label for="documenttype" id="Etiquetas">Tipo de Identificación</label>
      <select class="form-control" id="documenttype" name="documenttype" value="{{old('documenttype')}}">
          <option>CC</option>
          <option>TI</option>
          <option>PPN</option>
          <option>CE</option>
      </select>
    </div>
    <div class= "form-group col" >
        <label for="document" id="Etiquetas">Identificación del Titular</label>
        <input type="number" class="form-control" id="document" name="document" value="{{old('document')}} placeholder="Ingrese Número de Identificación" >
    </div>
  </div>
  <div class="container row">
    <div class="form-group col">
      <label for="Email" id="Etiquetas">Email</label>
      <input type="email" class="form-control mb-2" id="Email" name="email" placeholder="Ingrese Email" value="{{old('email')}}">
    </div>
    <div class="form-group col">
      <label for="Phone" id="Etiquetas">Telefono</label>
      <input type="number" class="form-control mb-2" id="Phone" name="phone" placeholder="Ingrese Número de Telefono" value="{{old('phone')}}">
    </div> 
  </div>
  <button type="submit" id="boton" class="btn btn-primary btn-block">Ordenar</button>
</form>
@endsection 