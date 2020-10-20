@extends('layouts.theme')
@section('title','show')
@section('content')
    <div class="container">
    <h2>{{$user->name}}</h2>
    <strong>Apellido : </strong> {{$user->lastname}}
    <br>
    <strong>Email: </strong> {{$user->email}}
    <br>
    <strong>Telefono: </strong> {{$user->phone}}
    <br>
    <strong>Edad: </strong> {{$user->age}}
    <br>
    <a href="/users" class="btn btn-outline-primary">Volver</a>
    </div>
@endsection
