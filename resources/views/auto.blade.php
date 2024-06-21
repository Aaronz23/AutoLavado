@extends('adminlte::page')

@section('title', 'Auto')

@section('content_header')
    <h1>Nuevo Auto </h1>
@stop

@section('content')
<form action="{{route('auto.guardar')}}" method="post"><!--Profesor--> 
    @csrf
    <input type="hidden" name="id" value="{{$auto->id}}">
    <div class="mb-3">
    <label for="" class="form-label">Matricula: </label>
    <input type="text" class="form-control boxes" value="{{$auto->matricula}}" name="TxtMatricula" id="">
    </div>

    <label for="" class="form-label">Color: </label>
    <input type="text" class="form-control boxes" value="{{$auto->color}}" name="TxtColor" id="">
    </div>

    <label for="" class="form-label">Modelo: </label>
    <input type="text" class="form-control boxes" value="{{$auto->modelo}}" name="TxtModelo" id="">
    </div>

    <label for="" class="form-label">Marca : </label>
    <input type="text" class="form-control boxes" value="{{$auto->marca}}" name="TxtMarca" id="">
    </div>
    <center><button type="submit" class="btn btn-lg btn-primary mb-5">Crear</button></center>
</form>
@stop