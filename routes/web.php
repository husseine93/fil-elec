<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
use App\http\Controllers\CartController;
use App\Http\Controllers\PublicBoutique;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FactureController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('facture',CartController::class);
Route::resource('admin',AdminController::class)->middleware('admin');
Route::resource('panier', CartController::class); // Fonction darlylcode
Route::resource('boutiquePublique', PublicBoutique::class);
Route::get('/facture', [FactureController::class, 'showFacture']);
Route::get('/facture_PDF', [FactureController::class, 'createPDF']);

//Route::middleware('auth')->group(function () {
  // Commandes
  //Route::prefix('commandes')->group(function () {
    //  Route::resource('/', 'OrderController')->names([
      //    'create' => 'commandes.create',
        //  'store' => 'commandes.store',
      //])->only(['create', 'store']);
  //});
//});
   // enregistrer la commande 

Route::resource('products', ProductController::class)->middleware('auth'); // afficher les produits 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // authentification 

Route::get('chart', [ChartController::class, 'index']);

