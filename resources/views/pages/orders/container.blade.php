@extends('layouts.app')

@section('content')

    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-ship"></i> Order container</h1>
      </div>

      <div class="large-6 small-12 columns">
      
        <h4>Container Options</h4>
          <table style="width: 100%; color: #fff background: #000;">
            <tbody>
              <tr>
                <td>Options available</td>
                <td>{{ count($user->getActiveIdentity()->options()->where('price','>',0)->get()) }}</td>
              </tr>
            </tbody>
          </table>
    
      </div>

      <div class="large-6 small-12 columns">
      
        <h4>Order more options</h4>
          <table style="width: 100%; color: #fff background: #000;">
            <tbody>
              {!! Form::open(['url' => 'orders/container', 'method' => 'post']) !!}
              <tr>
                <td>Quantity</td>
                <td width="30%"><input name="amount" type="number" min="1" value="1" style="margin: 0;"></td>
              </tr>
              <tr>
                <td>Option Rate</td>
                <td>{{ $defaultPrice }} EUR</td>
              </tr>
              <tr>
              	<td colspan="2"><button role="submit" class="expanded success button">Place Order &raquo;</button></td>
              </tr>
              {!! Form::close() !!}
            </tbody>
          </table>
      </div>

    @if( count($user->getActiveIdentity()->options()) > 0 )
      <div class="small-12 columns">
      
        <h4>Your available options</h4>
      
        <table class="scroll large-12">
          <thead>
            <tr>
              <th width="200">Date</th>
              <th width="200">Number</th>
              <th width="200">Description</th>
              <th width="200">Amount Paid</th>
              <th width="200">Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($user->getActiveIdentity()->options as $option)
               <tr>
                <td>{{ $option->created_at }}</td>
                <td>{{ $option->orderReference }}</td>
                <td>Container Option</td>
                <td>{{ number_format ($option->price , 2 , '.' , '&#39;' ) }} EUR</td>
                <td>Ordered</td>
                <td><a href="#" class="alert button">Cancel Order</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
            
      </div>
    @endif
    </section>
    
    
    <div class="reveal" id="orderContainer" data-reveal>
      <h1>Container Order</h1>
      <table class="pull-right">
      	<tr>
          <td>Date:</td>
          <td>11/01/2016</td>
        </tr>
      	<tr>
          <td>Order Option:</td>
          <td>C1023-2</td>
        </tr>
      	<tr>
          <td>Amount Paid:</td>
          <td>13,000 EUR</td>
        </tr>
      </table>
      <p>Please select a percentage for each unit size:<br><br><br>SELECTORS<br><br><br><br><br></p>
      <a class="expanded button success" data-toggle="orderConfirm">Place order</a>
      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="reveal" id="orderConfirm" data-reveal>
      <h2>Thank you for your order</h2>
      <p>Your order #C2994929 has been received and will be confirmed shortly. You can change your order <a href="#">here</a> until confirmation has been received.</p>
      <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

@endsection