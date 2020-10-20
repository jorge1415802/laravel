@extends('layouts.theme')
@section('title','Index')
@section('content')
    @if ($users.count($users) == 0)
        <div class="col-6 mx-auto p-4">
            <div class="card">
                <div class="card-header">
                    <h3>No tiene usuarios creados, por favor cree al menos uno</h3>
                </div>
                <div class="card-body">
                <a href="{{route('user.form')}}" class="btn btn-outline-primary">Crear</a>
                </div>
            </div>
        </div>

    @else
        @foreach ($users as $user)
            <div class="contianer p-4">
                <div class="card">
                    <div class="card-header">
                        <h3>{{$user->name}}</h3>
                    </div>
                    <div class="card-body">
                        Apellido: {{$user->lastname}}
                        <br>
                        Email: {{$user->email}}
                        <br>
                        Telefono: {{$user->phone}}
                        <br>
                        Edad: {{$user->age}}
                        <hr>
                        <a href="{{route('user.show',['id' => $user->id])}}" class="btn btn-outline-success">Ver</a>
                        <a href="{{route('user.formEdit',['id' => $user->id])}}" class="btn btn-outline-warning">Modificar</a>
                        <form action="{{route('user.destroy',['id' => $user->id])}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
         @endforeach
         <div class="p-4">
            <h3>Crear nuevo Usuario</h3>
            <a href="{{route('user.form')}}" class="btn btn-outline-primary">Crear</a>
         </div>
    @endif

@endsection
