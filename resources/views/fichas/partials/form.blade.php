<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control', 'placegolder' => 'Ingrese fecha actual']) !!}

@error('fecha')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>

<div class="form-group">
    {!! Form::label('nombre_elemento', 'Nombre del elemento') !!}
    {!! Form::text('nombre_elemento', null, ['class' => 'form-control', 'placegolder' => 'Ingrese el nombre del elemento']) !!}
    
    @error('nombre_elemento')
    <small class="text-danger">{{$message}}</small>
      @enderror


</div>

<div class="form-group">
    {!! Form::label('codigo', 'Referencia') !!}
    {!! Form::number('codigo', null, ['class' => 'form-control']) !!}

    @error('codigo')
    <small class="text-danger">{{$message}}</small>
      @enderror

</div>


<div class="form-group">
    {!! Form::label('valor_estimado', 'Valor estimado del elemento') !!}
    {!! Form::number('valor_estimado', null, ['class' => 'form-control']) !!}

    @error('valor_estimado')
    <small class="text-danger">{{$message}}</small>
      @enderror

</div>

<div class="form-group">
    {!! Form::label('centro_id', 'Complejo SENA') !!}
    {!! Form::select('centro_id', $centros, null, ['class' => 'form-control']) !!}

    @error('centro_id')
    <small class="text-danger">{{$message}}</small>
  @enderror

</div>


<div class="form-group">
    {!! Form::label('condiciones', 'Condiciones del elemento:') !!}
    {!! Form::textarea('condiciones', null, ['class' => 'form-control']) !!}
    @error('condiciones')
    <small class="text-danger">{{$message}}</small>
     @enderror


</div>  

<div class="form-group">
    {!! Form::label('accesorios', 'Accesorios:') !!}
    {!! Form::textarea('accesorios', null, ['class' => 'form-control']) !!}
    
    @error('accesorios')
    <small class="text-danger">{{$message}}</small>
     @enderror

</div>
 
<hr>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('estado', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('estado', 2) !!}
        Publicado
    </label>

    @error('estado')
    <small class="text-danger">{{$message}}</small>
     @enderror

</div>
<hr>