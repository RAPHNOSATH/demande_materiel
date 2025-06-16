@extends('auth.app', ['title' => 'Connexion'])

@section('content')
    <h4 class="font-weight-light">Connexion</h4>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="pt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <div class="relative">
                <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center mr-4">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se souvenir de moi') }}</span>
            </label>

            @if (Route::has('register'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                {{ __('Pas de compte?') }}
            </a>
            @endif
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Se connecter') }}
            </x-primary-button>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
        </div>
    </form>

    <!-- JavaScript inline pour l'œil -->
    <script>
        const password = document.getElementById("password");

        const div = password.parentNode;
        div.classList.add("form-control", "form-control-lg", "d-flex", "align-items-center", "p-0");

        const openedEye = document.createElement("i");
        openedEye.className = "mdi mdi-eye";

        const closedEye = document.createElement("i");
        closedEye.className = "mdi mdi-eye-off";

        const button = document.createElement("button");
        button.type = "button"; // Empêche la soumission du formulaire
        button.className = "input-group-addon btn bg-transparent border-0 text-gray-500 hover:text-gray-700";
        button.id = "addon-wrapping";
        button.appendChild(openedEye);

        password.style.cssText = "padding-right: 2.5rem; flex-grow: 1;"; // Espace pour l'icône et style
        password.classList.add("form-control", "form-control-lg");

        div.appendChild(button);

        button.addEventListener('click', function (elt, evt) {
            if (button.lastChild === openedEye) {
                button.removeChild(openedEye);
                button.appendChild(closedEye);
                password.setAttribute("type", "text");
            } else {
                button.removeChild(closedEye);
                button.appendChild(openedEye);
                password.setAttribute("type", "password");
            }
        });
    </script>
@endsection
