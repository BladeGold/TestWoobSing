@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                <div class="card-header">{{ __('Los usuarios que tengan el rol 1 y 2') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endauth

                @guest
                <div class="card-header"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Desconectado </a></div>

                <div class="card-body">
                 Hola Visitante por favor   <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sesión </a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection