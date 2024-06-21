@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Servicios</h3>
    </div>
    <div class="box-body">
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio['codigo'] }}</td>
                        <td>{{ $servicio['nombre'] }}</td>
                        <td>{{ $servicio['descripcion'] }}</td>
                        <td>{{ $servicio['precio'] }}</td>
                        <td>
                            <a href="{{route('servicio.nuevo',['id' => $servicio['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class=""> ✍</span>
                            </a>
                            <form action="{{route('servicio.eliminar',['id' => $servicio['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$servicio['id']}}">
                                <button href="submit" class="btn btn-danger btn-sm rounded-0">
                                <span class="far fa-del"> 🧺</span>
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
