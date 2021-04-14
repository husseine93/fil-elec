
    
        <x-guest-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            Liste des produits        
    

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

</html></x-guest-layout>s

