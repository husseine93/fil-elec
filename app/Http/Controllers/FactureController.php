<?php

namespace App\Http\Controllers;
use Cart;
use PDF;

use Illuminate\Http\Request;

class FactureController extends Controller
{
      public function showFacture(){
      $content = Cart::getContent();
      $total = Cart::getTotal();
      return view('index',compact('content', 'total'));
    }

    public function createPDF() {

    	$content = Cart::getContent();
      	$total = Cart::getTotal();

    	$dompdf = new pdf(array('enable_remote' => true));
        $pdf= PDF::loadView('index',compact('content', 'total'))->setOptions(['defaultFont' => 'sans-serif']);
        //$pdf->save('Facture_TR/nomDuFichier.pdf');
        return $pdf->download('factures_FilELEL.pdf');


      
    }


}
