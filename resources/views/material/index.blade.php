@extends('adminlte::page')

@section('title', 'Almancen de materiales')

@section('content_header')
    <h1>Materiales</h1>
@stop

@section('content')
<a href="materials/create" type="button" class="btn btn-outline-info mb-3 "> Agregar</a>

<table id="materials" class="table table-secondary table-striped table-bordered mt-4 shadow-lg" style="width:100%"> 
    <thead class="table table-primary">
        <tr class="text-bold">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Unidad</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Detalles</th>
            <th scope="col">Acciones</th>   
        </tr>    
    </thead>
    <tbody>
   @foreach ($materials as $material)
    <tr class="mt-4">
        <td>{{$material->id}}</td>
        <td>{{$material->nombre}}</td>
        <td>{{$material->codigo}}</td>
        <td>{{$material->descripcion}}</td>
        <td>{{$material->tipo}}</td>
        <td>{{$material->cantidad}}</td>
        <td>{{$material->detalles}}</td>
        <td>
            <form action="{{route('materials.destroy',$material->id)}}" method="POST">
            <a href="/materials/{{$material->id}}/edit" class="btn btn-info">Editar</a>
            <button type="submit" onclick="return confirm('¿Quieres borrar esta casilla?')" class="btn btn-primary">Borrar</button>
            @csrf 
            @method('DELETE')  
            </form>
        </td>
    </tr>
    @endforeach    
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#materials').DataTable( {
        resposive: true,
        autoWidth: false,



        "language": {
            "lengthMenu": "Mostrar "+      
            `<select class="custom-select custom-select-sm form-control form-control-sm">
             <option value = '5'>5</option>
             <option value = '10'>10</option>
             <option value = '25'>25</option>
             <option value = '50'>50</option>
             <option value = '-1'>all</option>
            
            </select>` +
            "registros por página",
            "zeroRecords": "No se encontraron materiales",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate': {
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
    } );
} );
    </script>
@stop