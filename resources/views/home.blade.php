@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul>
                        <li>
                            <a href="{{ route('getUser') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Los usuarios que tengan el rol 1 y 2 </a>
                        </li>
                        <li>
                            <a href="{{ route('getPermission') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Los permisos que se tienen del rol 1 </a>
                        </li>
                        <li>
                            <a href="{{ route('getUserRol') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Los usuarios y el rol que tienen el permiso 2 </a>
                        </li>
                    </ul>
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