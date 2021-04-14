<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Facture_Fil'elec</title>

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
         
           <br/><br/><br/><br/><br/>
            <h3>Fil'elec </h3>
            <pre>
                www.Fil'elec.com 
                27 rue du chemin vert - 75011 Paris
                RC Paris B 821784048
                Téléphone: 0153416231
                Fax: 09 58 27 58 20
                
               
                
            </pre>
        </td>
    </tr>
</head>
<body>

  </table>
  <br/><br/>

  <table width="100%">
    <tr>
        <td><strong>De la part de </strong> Fil'elec</td>
        <td><strong>A </strong> {{Auth::user()->name }} </td>
    </tr>

  </table>

  <br/><br/><br/><br/><br/>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        
        <th>nom</th>
        <th>Prix ttc </th>
        <th>date</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td> {{Auth::user()->name }} </td>
        <td> {{ number_format($total, 2, ',', ' ') }} €</td>
        <td>{{ Auth::user()->created_at }}</td>
      </tr>
    </tfoot>
  </table>

   <div class="d-flex justify-content-end mb-4">
            
             <a class="btn btn-primary" a href="{{route('privates.create', ['ticket' => $ticket->id])}}">Export to pdf </a>
        </div>


<br/><br/><br/><br/><br/>

<table width="100%">

    <tr>
        <td><strong> Sergio MOURA DE CASTRO</strong> </td>
        <td><strong>{{Auth::user()->name }}</strong></td>
    </tr>
 
   <tr><td></td>
      <td>{{ $ticket->created_at }}</td></tr>

  </table>
  <br/>
  <td>
  




        


<footer>
  <center>
        <p>Fil'elec</a>www.Fil'elec.com</p>
        <p>SAS au capital de 10.500 € - 27 rue du chemin vert - 75011 Paris</p>
        <p> RC Paris B 821784048- Téléphone: +33 (0)153416231- Fax: +33 (0)9 58 27 58 20 </p>
      </center>
    </footer>

</body>

</html>