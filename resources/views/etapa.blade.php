@extends('adminlte::page')

@section('title', 'Etapa')

@section('content_header')
    <h1>Nueva Etapa </h1>
@stop

@section('content')
<form action="{{route('etapa.guardar')}}" method="post"><!--Profesor--> 
    @csrf
    <input type="hidden" name="id" value="{{$etapa->id}}">
    <div class="mb-3">
    <label for="" class="form-label">Nombre: </label>
    <input type="text" class="form-control boxes" value="{{$etapa->nombre}}" name="txtNombre" id="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Duracion: </label>
    <input type="text" class="form-control boxes" value="{{$etapa->duracion}}" name="txtHrs" id="">
    </div>
   
    <div class="mb-3">
        <label for="" class="form-label">--- Servicios --</label><br>
        <select name="servicio" id="" class="form-select" >
            <option>------ Servicio ---</option>
            @foreach ($servicios as $servicio)
            <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
            @endforeach
                
        </select>
    </div>
    <center><button type="submit" class="btn btn-lg btn-primary mb-5">Crear</button></center>
</form>
@stop