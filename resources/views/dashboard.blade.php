@extends('layout')
@section('title', 'Dashboard')
@section('content')
    <h1>Bienvenido {{$user->name}} al Dashboard, Edad: {{$user->age}}</h1>
    
@endsection