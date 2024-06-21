@extends('adminlte::page')

@section('title', 'Autos')

@section('content_header')
    <center><h1>Autos</h1></center>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de Autos</h3>
    </div>
    <div class="box-body">
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>MATRICULA</th>
                    <th>COLOR</th>
                    <th>Modelo</th>
                    <th>MARCA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Autos as $auto)
                    <tr>
                       
                        <td>{{ $auto['matricula'] }}</td>
                        <td>{{ $auto['color'] }}</td>
                        <td>{{ $auto['modelo'] }}</td>
                        <td>{{ $auto['marca'] }}</td>
                        <td>
                        
                            <a href="{{route('auto.nuevo',['id' => $auto['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class=""> ✍</span>
                            </a>
                            <form action="{{route('auto.eliminar',['id' => $auto['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$auto['id']}}">
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
