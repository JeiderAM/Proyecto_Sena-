@extends('adminlte::page')

<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

@section('title', 'Almancen de materiales')

@section('content_header')
 <h1>Nuevo registro de ficha</h1>
@stop

    
@section('content')

    <div class="card-body">
        {!! Form::open(['route' => 'fichas.store', 'autocomplete' => 'off']) !!}


        {!! Form::hidden('user_id', auth()->user()->id) !!}
         
        @include('fichas.partials.form')
      
       {!! Form::submit('Crear ficha', ['class' => 'btn btn-success' ]) !!}
       
        {!! Form::close() !!}


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#condiciones' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#accesorios' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@stop