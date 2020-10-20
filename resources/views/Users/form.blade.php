@extends('layouts.theme')
@section('content')
    <div class="container">
        @section('title','Create')
            <fieldset>
                <h3>Crear nuevo Usuario</h3>
            <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" placeholder="Nombre"  name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" placeholder="Apellido" name="lastname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" placeholder="Telefono" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" placeholder="Edad" name="age" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Crear</button>
                    <a href="/users" class="btn btn-outline-dark">Volver</a>
                </form>
            </fieldset>
    </div>
@endsection
