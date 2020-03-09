@extends('plantilla')

@section('seccion')
<h1>Orden</h1> 
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
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control mb-2" id="Nombre" name="name" placeholder="Ingrese Nombre" value="{{old('name')}}">
  </div> 
  <div class="form-group">
  <label for="Email">Email</label>
    <input type="email" class="form-control mb-2" id="Email" name="email" placeholder="Ingrese Email" value="{{old('email')}}">
  </div>
  <div class="form-group">
    <label for="Phone">Telefono</label>
    <input type="number" class="form-control mb-2" id="Phone" name="phone" placeholder="Ingrese Número de Telefono" value="{{old('phone')}}">
  </div> 
  <button type="submit" class="btn btn-primary btn-block">Ordenar</button>
</form>
@endsection 