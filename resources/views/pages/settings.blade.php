@extends('layouts.app')

@section('content')

    <section class="row" id="content">

	    <div class="large-12 column">
        
      	<h1><i class="fa fa-cog"></i> Settings</h1>
      </div>

      <div class="large-12 column">
        <h4>Addresses</h4>
      </div>

    @foreach($customers as $customer)
      <div class="large-4 medium-6 small-12 columns">
        <strong>{{ $customer->billingCompanyName }}</strong><br>
        {{ $customer->billingAddress1 }}<br>
        {{ $customer->billingAddress2 }}<br>
        {{ $customer->billingCity }}<br>
        {{ $customer->billingPostCode }}<br>
        {{ $customer->billingCountry }}
      </div>
    @endforeach

    </section>
    
@endsection