@extends('adminlte::page')

@section('title', 'Division')

@section('content_header')
    <h1>Division</h1>
@stop

@section('content')
    <div class="box">
    <div class="box-body">
        <form action="{{route('division.guardar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$division->id}}">
            <div class="form group">
                <label for="codigo">Codigo: </label>
                <input type="text" class="form-control" name="codigo" value="{{$division->codigo}}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" name="nombre" value="{{$division->nombre}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    </div>
@stop

