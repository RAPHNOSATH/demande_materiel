@extends('auth.app', ['title'=>"Récupération de mot de passe"])
@section('content')
    <h4 class="font-weight-light">Récupération de mot de passe.</h6>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="pt-3" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Recevoir le lien de réinitialisation du mot de passe par e-mail') }}
            </x-primary-button>
            @if (Route::has('login'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Se connecter') }}
                </a>
            @endif
        </div>
@endsection('content')
