@extends('adminlte::page')

@section('title', 'Almancen de materiales')

@section('content_header')
<h2>EDITAR MATERIALES</h2>  
@stop

@section('content')
<form action="/materials/{{$material->id}}" method="POST">
@csrf       
@method('PUT')
  <div class="mb-2" >
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$material->nombre}}" >
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Código</label>
    <input type="text" name="codigo" id="codigo" class="form-control" value="{{$material->codigo}}" >
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$material->descripcion}}" >
  </div>
  
  <div class="mb-2">
    <label for="" class="form-label">Tipo de cantidad:</label>
    <input type="text" name="tipo" id="tipo" class="form-select" value="{{$material->tipo}}" >
  </div>
  
  <div class="mb-2">
    <label for="" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{$material->cantidad}}" >
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Detalles</label>
    <input type="text" name="detalles" id="detalles" class="form-control" value="{{$material->detalles}}" >
  </div>
  <div> 
  <a href="/materials" class="btn btn-secondary" >Cancelar </a>
  <button type="submit" class="btn btn-success" >Guardar</button>
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop