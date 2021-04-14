<x-guest-layout>
    <x-jet-authentication-card>
                <x-slot name="logo">

        <center>
            <img style="width: 80%" src="FilElec.png">
        </center>
            <br/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="firstname" value="{{ __('Prénom') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Nom') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="adresse" value="{{ __('Adresse') }}" />
                <x-jet-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
            </div>


            <div class="mt-4">
                <x-jet-label for="CP" value="{{ __('Code postal') }}" />
                <x-jet-input id="CP" class="block mt-1 w-full" type="text" name="CP" :value="old('CP')" required autofocus autocomplete="CP" />
            </div>

            <div class="mt-4">
                <x-jet-label for="ville" value="{{ __('Ville') }}" />
                <x-jet-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus autocomplete="ville" />
            </div>

            <div class="mt-4">
                <x-jet-label for="telephone" value="{{ __('Télephone') }}" />
                <x-jet-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role"  />
                <x-jet-input id="role" class="block mt-1 w-full" type="hidden" name="role" :value=0/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
           <x-jet-label for="entite"Choisir le statut :/>
          <select name="statut" id="statut">
              <option value="">Selectionner un statut</option>
              <option value="Particulier">Prticulier</option>
              <option value="Entreprise">Entreprise </option>
          </select>
          </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmation du mot de passe') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déja incrit ?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Valider') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
