@extends('adminlte::page')

@section('title', 'servicios')

@section('content_header')
    <h1>Servicio</h1>
@stop

@section('content')
    <div class="box">
    <div class="box-body">
        <form action="{{route('servicio.guardar')}}" method="POST"><!-- servico.guardar-->
            @csrf
            <input type="hidden" name="id" value="{{$servicio->id}}">
            <div class="form group">
                <label for="codigo">Codigo: </label>
                <input type="text" class="form-control" name="codigo" value="{{$servicio->codigo}}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="nombre" value="{{$servicio->nombre}}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripciòn: </label>
                <input type="Text" class="form-control" name="descripcion" value="{{$servicio->descripcion}}" >
            </div>
            <div class="form-group">
                <label for="precio">Costo: </label>
                <input type="Text" class="form-control" name="precio" value="{{$servicio->precio}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>
@stop

