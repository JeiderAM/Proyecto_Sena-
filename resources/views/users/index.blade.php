@extends('adminlte::page')

@section('title', 'Almancen de materiales')

@section('content_header')
<h2>Lista de usuarios</h2>
@stop

@section('content')
<table id="users" class="table table-secondary table-striped table-bordered mt-4 shadow-lg" style="width:100%"> 
    <thead class="table table-primary">
        <tr class="text-bold">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th> 
            <th scope="col">Acciones</th>  
        </tr>  
    </thead>   
       <tbody>
        @foreach ($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            <a href="/users/{{$user->id}}/edit" class="btn btn-info">Editar</a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#users').DataTable( {
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