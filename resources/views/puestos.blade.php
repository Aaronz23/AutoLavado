@extends('adminlte::page')

@section('title', 'Puestos')

@section('content_header')
    <h1>Puestos</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Puestos</h3>
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
                @foreach($puestos as $puesto)
                    <tr>
                        <td>{{ $puesto['codigo'] }}</td>
                        <td>{{ $puesto['nombre'] }}</td>
                        <td>
                            <a href="{{route('puesto.nueva',['id' => $puesto['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class="far fa-edit"> Editar</span>
                            </a>
                            <form action="{{route('puesto.eliminar',['id' => $puesto['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$puesto['id']}}">
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
