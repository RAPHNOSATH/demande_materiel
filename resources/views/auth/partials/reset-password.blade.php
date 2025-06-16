@extends('auth.app', ['title'=>"changement de mot de passe"])
@section('content')
    <form class="pt-3" method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <div class="relative">
                <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-group">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
            <div class="relative">
                <x-text-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Changer votre mot de passe') }}
            </x-primary-button>
        </div>
    </form>

    <!-- JavaScript inline pour les deux champs -->
    <script>
        // Sélectionner les deux champs
        const passwordInputs = [
            { id: 'password', buttonId: 'addon-wrapping-password' },
            { id: 'password_confirmation', buttonId: 'addon-wrapping-confirmation' }
        ];

        passwordInputs.forEach(input => {
            const password = document.getElementById(input.id);
            if (!password) return; // Ignorer si l'élément n'existe pas

            const div = password.parentNode;
            div.classList.add("form-control", "form-control-lg", "d-flex", "align-items-center", "p-0");

            const openedEye = document.createElement("i");
            openedEye.className = "mdi mdi-eye";

            const closedEye = document.createElement("i");
            closedEye.className = "mdi mdi-eye-off";

            const button = document.createElement("button");
            button.type = "button"; // Empêche la soumission du formulaire
            button.className = "input-group-addon btn bg-transparent border-0 text-gray-500 hover:text-gray-700";
            button.id = input.buttonId; // Identifiant unique pour chaque bouton
            button.appendChild(openedEye);

            password.style.cssText = "padding-right: 2.5rem; flex-grow: 1;"; // Espace pour l'icône
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
        });
    </script>
@endsection
