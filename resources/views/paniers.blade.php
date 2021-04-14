@extends('layouts.app')
@section('content')
<div class="container">
  
  <div class="row">
    <div class="col s12 cards-container">
      @foreach($products as $product)
        <div class="card">
          <div class="card-image">
            @if($product->quantity)
              <a href="#">
            @endif
              <img src="/images/thumbs/{{ $product->image }}">
            @if($product->quantity) </a> @endif
          </div>          
          <div class="card-content center-align">
            <p>{{ $product->name }}</p>
            @if($product->quantity)
              <p><strong>{{ number_format($product->price, 2, ',', ' ') }} € TTC</strong></p>
            @else
              <p class="red-text"><strong>Produit en rupture de stock</strong></p>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection