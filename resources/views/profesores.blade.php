@extends('adminlte::page')

@section('title', 'profesor')

@section('content_header')
    <h1>Profesores </h1>
@stop

@section('content')
    <table id="table-data" class="table">
        <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Nombre</th>
            <th scope="col">Horas asignadas</th>
            <th scope="col">Dia eco. a.</th>
            <th scope="col">Usuario</th>
            <th scope="col">Puesto</th>
            <th scope="col">Division</th>
            <th colspan="2" scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($profesores as $profesore) 
            <tr>
                <td>{{$profesore['numero']}}</td>
                <td>{{$profesore['nombre']}}</td>
                <td>{{$profesore['horas_asignadas']}}</td>
                <td>{{$profesore['dia_econom_c']}}</td>
                <td>{{$profesore['id_usuario']}}</td>
                <td>{{$profesore['id_puesto']}}</td>
                <td>{{$profesore->division->nombre}}</td>
                <td>{{$profesore->puesto->nombre}}</td>

                <td>
                    <a href="{{route('profesore.nuevo',['id' => $profesore['id']])}}" class="btn btn-success btn-sm rounded-0">
                        <span class="far fa-edit">EDITAR :D</span>
                    </a>
                </td>
                <td>
                    <form action="{{route('profesore.eliminar',['id' => $profesore['id']])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$profesore['id']}}">
                    <input type="submit" class="btn btn-danger btn-sm rounded-0" value="ELIMINAR D:">
                    
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
@section('js')
    <script>
        $('#table-data').DataTable({
            "scrollX": true
        })
    </script>
@stop

