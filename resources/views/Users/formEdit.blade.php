@extends('layouts.theme')
@section('content')
@section('title','Edit')
<div class="container">
    <fieldset>
        <h3>Modificar Usuario</h3>
    <form action="{{route('user.update',['id' => $user->id])}}" method="POST">
            @csrf @method('PATCH')
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" placeholder="Nombre" name="name" value="{{$user->name}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Apellido </label>
                <input type="text" placeholder="Apellido" name="lastname" value="{{$user->lastname}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email </label>
                <input type="email" placeholder="Email" name="email" value="{{$user->email}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Telefono </label>
                <input type="number" placeholder="Telefono" name="phone" value="{{$user->phone}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Edad </label>
                <input type="number" placeholder="Edad" name="age" value="{{$user->age}}" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Modificar</button>
                <a href="/users" class="btn btn-outline-dark">Volver</a>
            </div>
        </form>
    </fieldset>
</div>
@endsection
