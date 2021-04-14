<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<div class="container">

  <div class="row">
    <div class="col s12">
      <div class="card">        
        <div class="card-content">
          <div id="wrapper">          
            @if($total)
              <span class="card-title">Mon panier</span>            
              @foreach ($content as $item)
                <hr><br>
                <div class="row">
                  <form action="{{ route('panier.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col m6 s12">{{ $item->name }}</div>
                    <div class="col m3 s12"><strong>{{ number_format($item->quantity * $item->price, 2, ',', ' ') }} €</strong></div>
                    <div class="col m2 s12">
                      <input name="quantity" type="number" style="height: 2rem" min="1" value="{{ $item->quantity }}">
                    </div>
                  </form>
                  <form action="{{ route('panier.destroy', $item->id) }}" method="POST">
                       
                </div>
              @endforeach
              <hr><br>
              <div class="row" style="background-color: lightgrey">
                <div class="col s6">
                  Total TTC (hors livraison)
                </div>
                <div class="col s6">
                  <strong>{{ number_format($total, 2, ',', ' ') }} €</strong>
                </div>
              </div>
            @else
            <span class="card-title center-align">Le panier est vide</span>
            @endif
          </div>        
          
        </div>
        <div id="action" class="card-action">
          <p>
            <center>
            <td class="px-4 py-3"><a  href="{{ route('products.index') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Continuer mes achats</a></td> 
            @if($total)
              <td class="px-4 py-3"> <a href="/facture" role="button" class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Voir la facture</a></td>  
            @endif
          </center>
          </p>
        </div>
      </div>
    </div>
  </div>

</div>


@section('javascript')
  <script>

    document.addEventListener('DOMContentLoaded', () => {
      const quantities = document.querySelectorAll('input[name="quantity"]');
      quantities.forEach( input => {
        input.addEventListener('input', e => {
          if(e.target.value < 1) {
            e.target.value = 1;
          } else {
            e.target.parentNode.parentNode.submit();
            document.querySelector('#wrapper').classList.add('hide');
            document.querySelector('#action').classList.add('hide');
            document.querySelector('#loader').classList.remove('hide');
          }
        });
      }); 

      const deletes = document.querySelectorAll('.deleteItem');
      deletes.forEach( icon => {
        icon.addEventListener('click', e => {
          e.target.parentNode.parentNode.submit();
          document.querySelector('#wrapper').classList.add('hide');
          document.querySelector('#loader').classList.remove('hide');
        });
      }); 
    });
    
  </script>
@endsection

</x-slot>
</x-app-layout>