@extends('adminlte::page')

@section('title', 'Almancen de materiales')

@section('content_header')
<h2>INGRESAR MATERIALES</h2>
@stop

@section('content')

<form action="/materials" method="POST">
@csrf
  <div class="mb-2" >
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" tabindex="1">
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Código</label>
    <input type="text" name="codigo" id="codigo" class="form-control" tabindex="2">
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" class="form-control" tabindex="3">
  </div>
  
  
  <div class="mb-2 form-select">
  <label class=" ">Tipo de cantidad :</label>
  <select type="select" name="tipo" id="tipo" tabindex="4" >  
  <option value = 'C/u'>C/u</option>
  <option value = 'kg'>kg</option>
  <option value = 'gr'>gr</option>
  <option value = 'Caja'>Caja</option>
  </select>
  </div>

  <div class="mb-2">
    <label for="" class="form-label">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad" class="form-control" tabindex="5">
  </div>
  <div class="mb-2">
    <label for="" class="form-label">Detalles</label>
    <input type="text" name="detalles" id="detalles" class="form-control" tabindex="6">
  </div>
 
  <div> 
  <a href="/materials" class="btn btn-secondary" tabindex="7">Cancelar </a>
  <button type="submit" class="btn btn-success" tabindex="8">Guardar</button>
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop