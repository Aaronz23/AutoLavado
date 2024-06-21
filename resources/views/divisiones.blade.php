@extends('adminlte::page')

@section('title', 'Divisiones')

@section('content_header')
    <h1>Divisiones</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Divisiones</h3>
    </div>
    <div class="box-body">
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($divisiones as $division)
                    <tr>
                        <td>{{ $division['codigo'] }}</td>
                        <td>{{ $division['nombre'] }}</td>
                        <td>
                            <a href="{{route('division.nueva',['id' => $division['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class="far fa-edit"> Editar</span>
                            </a>
                            <form action="{{route('division.eliminar',['id' => $division['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$division['id']}}">
                                <button href="submit" class="btn btn-danger btn-sm rounded-0">
                                <span class="far fa-del"> Eliminar</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('js')
<script>
    $('#table-data').DataTable({"scrollX": true});
</script>
