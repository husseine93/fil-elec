<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modification d'un produit
        </h2>
    </x-slot>    
    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <x-jet-validation-errors class="mb-4" />
          @if (session()->has('message'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
              {{ session('message') }}
            </div>
          @endif
          <form action="{{ route('products.update', $product->id) }}" method="post">
              @csrf
              @method('put')
              <div class="mt-4">
                  <x-jet-label value="name" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=name name="name" :value="old('name', $product->name)" placeholder="Entrez le nouveau nom du produit" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label  value="{{ __('Prix') }}" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=name name="price" :value="old('price', $product->price)" placeholder="Entrez le nouveau prix du produit" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label  value="{{ __('Quantité') }}" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=quantity name="quantity" :value="old('quantity', $product->quantity)" placeholder="Entrez la nouvel quantité du produit" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Détail" />
                  <textarea class="form-input rounded-md shadow-sm mt-1" style="width: 100%" id="detail" name="detail" placeholder="Détail de la tâche">{{ old('detail', $product->detail) }}</textarea>
              </div>
              
              <div class="flex items-center justify-end mt-4">
                  <x-jet-button class="ml-4">
                      Envoyer
                  </x-jet-button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>