<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Facture_Fil'elec </title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>
  

  <table width="100%">
    <tr>
        <td valign="top">

        <td align="right">
          
          
            <h3>Fil'elec</h3>
            <pre>
                www.Fil'elec.com 
                27 rue du chemin vert - 75011 Paris
                RC Paris B 821784048
                Téléphone: +33 7 67 72 50 06
                email : husseine1998@gmail.com
                

                            
</head>
<body>

  </table>
  <br/><br/>

  <table width="100%">
    <tr>
        <td><strong>De la part de </strong> Fil'elec</td>
        <td><strong>A </strong> {{Auth::user()->name }}</td>
    </tr>

  </table>

  <br/><br/><br/><br/><br/>

  <br/>
            <p> Détails de votre facture  : </p> 
            
            @foreach ($content as $item)
                <br>
                
                  
                   
                    <div class="col m6 s12">{{ $item->name }} x {{$item->quantity }}</div>
                    <div class="col m3 s12"><strong>{{ number_format($item->quantity * $item->price, 2, ',', ' ') }} €</strong></div>
                    <div class="col m2 s12">
                     
                  
                
                    
                    
              @endforeach




  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        
        
        <th>Prix TTC</th>

        <th> nom
        <th>date</th> 
 @if (Auth::user()->statut=="Entreprise") 
                  <th>tva</th>
@endif
      </tr>
    </thead>
    <tbody>
      <tr>
        
    
        <td> {{ $total }}</td>
      
        <td> {{Auth::user()->name}}</td>
        <td> {{Auth::user()->created_at}}</td>
        @if (Auth::user()->statut=="Entreprise") 
          
        <td> 300</td>
        @endif
    
      </tr>
    </tfoot>


  </table>

  


<br/><br/><br/><br/><br/>

<table width="100%">

    <tr>
        <td><strong> Houballah husseine (ajouté signature) </strong> </td>
        <td><strong>{{Auth::user()->name }}</strong></td>
    </tr>
 
   

  </table>
  <br/>
  <td>



        <br/><br/><br/><br/><br/><br/>


<div class="d-flex justify-content-end mb-4">
            
             <a class="btn btn-primary" a href="/facture_PDF">Export to pdf </a>
        </div>




      
<footer>
  <center>
        <p>–Fil'elec– <a href="www.Fil'elec.com"></a>www.Fil'elec.com</p>
        <p>169 Rue Vercingétorix, 75014 Paris</p>
      </center>
    </footer>


</body>

</html>