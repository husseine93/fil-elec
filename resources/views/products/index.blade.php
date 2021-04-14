<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des produits        

            
          
        </h2>
    </x-slot>    

    <div class="container-fluid  h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col align-self-center text-center">
                    <h1 class="text-white">Produit</h1>

                    <div class="card bg-light border-20">
                        <div class="card-body">
                            <table class="table table-striped table-bordered" id="Produits">
                                <thead>
                <tr>
                   <th>Nom du produit</th>
                   <th>Prix</th>
                   <th>Détail</th>
                   <th>images</th>
                   <th>voir</th>


                  
                  
               </tr>
                                </thead>
                                <tbody>
                @foreach($products as $product)
                  <tr>
                    <td>
                        
                        {{ $product->name }}
                       </a>
                    </td>
                     <td>
                       
                        {{ $product->price }}
                       </a>
                    </td>
                     <td>
                        
                        {{ $product->detail }}
                       </a>
                    </td>
                     <td>
                        
                        <img src="{{$product->image}}">
                       </a>
                    </td>
                    <td class="px-3 py-3"><a href="{{ route('products.show', $product->id) }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">voir</a></td>
                
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>

<script type="text/javascript">
  $(document).ready( function () {
    $('#Produits').DataTable( {
        "language":{
    "decimal":        "",
    "emptyTable":     "Pas de données correspondante",
    "info":           "",
    "infoEmpty":      "",
    "infoFiltered":   "(filtrer sur _MAX_ total résultat)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Montrez _MENU_ colonnes",
    "loadingRecords": "Patientez...",
    "processing":     "En cours...",
    "search":         "Rechercher:",
    "zeroRecords":    "Pas de résultats correspondants a votre recherche",
    "paginate": {
        "first":      "Première",
        "last":       "Dernière",
        "next":       "Suivant",
        "previous":   "Précedant"
    },
    "aria": {
        "sortAscending":  ": activer pour trier les colonnes par ordre croissant",
        "sortDescending": ": activer pour trier les colonnes par ordre décroissant"
    }
}
    } );
} );


</script>

