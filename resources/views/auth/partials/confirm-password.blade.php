@extends('auth.app', ['title'=>"confirmation de mot de passe"])
@section('content')
    <h4 class="font-weight-light">Confirmez le mot de passe.</h6>
    <form class="pt-3" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <div class="relative">
                <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirmer') }}
            </x-primary-button>
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
