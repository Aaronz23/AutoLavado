@extends('adminlte::page')

@section('title', 'División')

@section('content_header')
    <h1>PROFESOR NUEVO </h1>
@stop

@section('content')
<form action="{{route('profesore.guardar')}}" method="post"><!--Profesor--> 
    @csrf
    <input type="hidden" name="id" value="{{$profesore->id}}">
    <div class="mb-3">
    <label for="" class="form-label">Numero</label>
    <input type="text" class="form-control " value="{{$profesore->codigo}}" name="txtNumero" id="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control boxes" value="{{$profesore->codigo}}" name="txtNombre" id="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Horas asignadas</label>
    <input type="text" class="form-control boxes" value="{{$profesore->codigo}}" name="txtHrs" id="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Dias economicos correspondientes</label>
    <input type="text" class="form-control boxes" name="txtDias" value="{{$profesore->nombre}}" id="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Usuario</label><br>
    <select name="user" id="" class="form-select mt-2">
        <option>USUARIO</option>
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    </div>

    <center><button type="submit" class="btn btn-lg btn-primary mb-5">Crear</button></center>
</form>
@stop