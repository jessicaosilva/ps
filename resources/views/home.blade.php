@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="{{ url('/') }}"     class="text-sm text-gray-700 dark:text-gray-500 underline">Página Inicial</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Página Principal') }}</div>
                <div class="card-body">
                    {{ __('Bem vindo') }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
