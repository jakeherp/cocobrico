@extends('layouts.app')

@section('content')

    <section class="row" id="content">

	    <div class="large-12 column">
        
      	<h1><i class="fa fa-cog"></i> Settings</h1>
      </div>

      <div class="large-12 column">
        <h4>Addresses</h4>
      </div>

    @foreach($user->getActiveIdentity()->addresses as $address)
      <div class="large-4 medium-6 small-12 columns">
        <strong>{{ $address->companyName }}</strong><br>
        {{ $address->address1 }}<br>
        {{ $address->address2 }}<br>
        {{ $address->city }}<br>
        {{ $address->postCode }}<br>
        {{ $address->country }}
      </div>
    @endforeach

    </section>
    
@endsection