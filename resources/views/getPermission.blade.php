@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                <div class="card-header">{{ __('Los permisos que se tienen del rol 1') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Permisos</th>
                           
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permision )
                            <tr>
                                <td>{{$permision->permission}}</td>
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