<x-app-layout>
    <x-slot name="header">
<div class="container">
  <div class=row>
    <div class="col s12 m6">
      <?php //<img style="width: 100%" src="/images/{{ $products->image }}">?>
    </div>
    <div class="col s12 m6">
      <h4>{{ $products->name }}</h4>
      <p><strong>{{ number_format($products->price, 2, ',', ' ') }} € TTC</strong></p>
      <p>{{ $products->description }}</p>
      <form  method="POST" action="#">
        @csrf
        <div class="input-field col">
          <input type="hidden" id="id" name="id" value="{{ $product->id }}">
          <input id="quantity" name="quantity" type="number" value="1" min="1">
          <label for="quantity">Quantité</label>        
          <p>
            <button class="btn waves-effect waves-light" style="width:100%" type="submit" id="addcart">Ajouter au panier
              <i class="material-icons left">add_shopping_cart</i>
            </button>
          </p>    
        </div>    
      </form>
    </div>
  </div>
</div>
</x-slot>
</x-app-layout>