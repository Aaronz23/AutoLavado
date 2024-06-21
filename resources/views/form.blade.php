@extends('layout')

@section('title', 'Login')

@section('content')
    
    <div class="container mt-5">
     


        <form action="{{route('login.validate')}}" method="post">
            @csrf
            <div class="form group">
                <label for="username">Usuario: </label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña: </label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>


        </form>
        
    </div>
    
@endsection