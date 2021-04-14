<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        <center>
            <img style="width: 80%" src="FilElec.png">
        </center>
            <br/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form  method="POST" action="{{ route('login') }}">
          @if(url()->previous() === route('panier.index'))
            <div class="col s12">
              <div class="card purple darken-3">
                <div class="card-content white-text center-align">
                  Vous devez être connecté pour passer une commande, si vous n'avez pas encore de compte vous pouvez en créer un en utilisant le lien sous ce formulaire.
                </div>
              </div>
            </div>
          @endif
          <div class="card-content">
            @csrf
            <span class="card-title">Connexion</span>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Connexion') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
