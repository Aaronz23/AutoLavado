@extends('adminlte::page')

@section('title', 'Etapas')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Etapas</h3>
    </div>
    <div class="box-body">
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>NOMBRE ETAPA</th>
                    <th>DURACION DE LA ETAPA</th><!--Descripcion-->
                    <th>SERVICIO AL QUE PERTENECE LA ETAPA</th><!--Precio-->
                </tr>
            </thead>
            <tbody>
                @foreach($etapas as $etapa)
                    <tr>
                       
                        <td>{{ $etapa['nombre'] }}</td>
                        <td>{{ $etapa['duracion'] }}</td>
                        <td>{{ $etapa->nombre_servicio }}</td>
                        <td>
                        
                            <a href="{{route('etapa.nueva',['id' => $etapa['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class=""> ✍</span>
                            </a>
                            <form action="{{route('etapa.eliminar',['id' => $etapa['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$etapa['id']}}">
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
