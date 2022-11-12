@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar Email') }}</div>

                <div class="card-body">
                    
                    <form class="" method="POST" action="{{ route('emailVerify') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Verificar') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
