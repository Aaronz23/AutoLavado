@extends('adminlte::page')

@section('title', 'Puesto')

@section('content_header')
    <h1>Puesto</h1>
@stop

@section('content')
    <div class="box">
    <div class="box-body">
        <form action="{{route('puesto.guardar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$puesto->id}}">
            <div class="form group">
                <label for="codigo">Codigo: </label>
                <input type="text" class="form-control" name="codigo" value="{{$puesto->codigo}}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="nombre" value="{{$puesto->nombre}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>
@stop

