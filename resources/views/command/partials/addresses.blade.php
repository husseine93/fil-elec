<ul class="list-unstyled">
  @isset($address->name)
    <li>{{ "$address->civility $address->name $address->firstname" }}</li>
  @endif
  @if($address->company)
    <li>{{ $address->company }}</li>
  @endif            
  <li>{{ $address->address }}</li>
  @if($address->addressbis)
    <li>{{ $address->addressbis }}</li>
  @endif
  @if($address->bp)
    <li>{{ $address->bp }}</li>
  @endif
  <li>{{ "$address->postal $address->city" }}</li>
  <li>{{ $address->country->name }}</li>
  <li>{{ $address->phone }}</li>
</ul>
@if(!$addresses->count())
  <p>Vous n'avez pas encore créé d'adresse dans votre compte, vous devez en créer au moins une.</p>
  <br>
  <p><a href="#" style="width: 100%" class="btn waves-effect waves-light">Je crée une adresse</a>
  </p>
@else
  <div class="row">
    @foreach($addresses as $address)
      <div class="col m12 l6">
        <div class="card">                          
          <div class="card-content address">
            <p><label><input name="{{ $name }}" value="{{ $address->id }}" type="radio" @if($loop->first) checked @endif><span></span></label></p>
            @include('account.addresses.partials.address')
          </div>
        </div>
      </div>
    @endforeach
  </div>                  
@endif