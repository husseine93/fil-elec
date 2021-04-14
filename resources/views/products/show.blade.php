<x-app-layout>

    <x-slot name="header">   
<div class="container">

</x-slot>
  @if(session()->has('cart'))
    <div class="modal">
      <div class="modal-content center-align">
        <h5>Produit ajouté au panier avec succès</h5>
        <hr>
        <p>Il y a {{ Cart::getTotalQuantity() }} @if(Cart::getTotalQuantity() > 1) articles @else article @endif dans votre panier pour un total de <strong>{{ number_format(Cart::getTotal(), 2, ',', ' ') }} € TTC</strong> hors frais de port.</p>
        <p><em>Vous avez la possibilité de venir chercher vos produits sur place, dans ce cas vous cocherez la case correspondante lors de la confirmation de votre commande et aucun frais de port ne vous sera facturé.</em></p>
        <div class="modal-footer">
        <td class="px-4 py-3">     
          <a href="{{ route('products.index') }}" button class="modal-close btn waves-effect waves-light left" id="continue">
            Continuer mes achats

          </button>
          <br/>
          <a href="{{ route('panier.index') }}" class="btn waves-effect waves-light">
            <i class="material-icons left">Voir la commande</i> <br/>
                      
          </a>
        </div>
      </div>
    </div>
  @endif
  
    <div class="col s12 m6">
      <h4>{{ $product->name }}</h4>
      <p><strong>{{ number_format($product->price, 2, ',', ' ') }} € TTC</strong></p>
      <p>{{ $product->detail }}</p>
      <form  method="POST" action="{{ route('panier.store') }}">
        @csrf
        <div class="input-field col">
          <input type="hidden" id="id" name="id" value="{{ $product->id }}">
          <input id="quantity" name="quantity" type="number" value="1" min="1">
          <label for="quantity">Quantité</label>        
          <p>
            <div>
              <center>
            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-2 rounded" type="submit" id="addcart"  >Ajouter au panier
              <i class="material-icons left"></i></button>
                    
          
          <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 rounded" a href="{{ route('panier.index') }}">
            <i class="material-icons left">Voir la commande</i> <br/>
           </a></button>
          </div>


          </a>
          </p>    
        </div>    
      </form>
    </div>
  </div>
</div>
</a></td></div></div></div></div>

 <script>
    @if(session()->has('cart'))
    
      document.addEventListener('DOMContentLoaded', () => {      
        const instance = M.Modal.init(document.querySelector('.modal'));
        instance.open();    
      });
    @endif   
  </script>

</x-app-layout>





