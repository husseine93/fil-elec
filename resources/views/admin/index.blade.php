<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des produits        

             <a href="{{ route('products.create') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Ajouter un produit</a>
          
        </h2>
    </x-slot>    

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2 w-1/3">Nom du produit</th>
                  <th class="px-4 py-2 w-1/3">Prix</th>
                   <th class="px-4 py-2 w-1/3">Détails</th>


                  
                  
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr>
                    <td class="px-4 py-3">{{ $product->name }}</td>
                    <td class="px-4 py-3">{{ $product->price }}</td>
                    <td class="px-4 py-3">{{ $product->detail }}</td>


                    
                    <td class="px-4 py-3"><a href="{{ route('products.edit', $product->id) }}" role="button" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Modifier</a></td>
                    <td class="px-4 py-3">
                      <form id="destroy{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')                      
                        <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Supprimer
                   
                   <td class="px-4 py-3">
                      <div class="input-field col">
                          
                          
                                </div>  

                        


                      </form>
                    </td class="px-4 py-3">
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>

<?php /*<form id="destroy{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')                      
                        <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">
                          Supprimer*/