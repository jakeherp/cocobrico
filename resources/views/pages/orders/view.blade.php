@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

    <div class="large-12 column">        
      <h1><i class="fa fa-truck"></i> Order {{ $pallet->customerReference }}</h1>
    </div>
    
    <div class="large-8 medium-6 small-12 column">
      <div class="callout">
        <div class="row">
          <div class="medium-6 small-12 columns">
            <h5>Billing Address</h5>
            <strong>{{ $identity->getBillingAddress()->companyName }}</strong><br>
            {{ $identity->getBillingAddress()->address1 }}<br>
            {{ $identity->getBillingAddress()->postCode }} {{ $identity->getBillingAddress()->city }}<br>
            {{ $identity->getBillingAddress()->country->name }}<br>
            <br>
            Phone: {{ $identity->getBillingAddress()->phone }}<br>
            Email: {{ $identity->getBillingAddress()->email }}
          </div>
          <div class="medium-6 small-12 columns">
            @if($pallet->address_id != 0)
              <h5>Shipping Address</h5>
              <strong>{{ $pallet->address->companyName }}</strong><br>
              {{ $pallet->address->address1 }}<br>
              {{ $pallet->address->postCode }} {{ $pallet->address->city }}<br>
              {{ $pallet->address->country->name }}<br>
              <br>
              Phone: {{ $pallet->address->phone }}<br>
              Email: {{ $pallet->address->email }}
            @else
              <h5>Pickup from Warehouse</h5>
            @endif
          </div>
        </div>
          
        <hr>

        <div class="large-12">
          <h5>General Details</h5>
          <table class="scroll" style="width: 100%;">
            <tbody>
              <tr>
                <td>Order Date</td>
                <td>{{ date('d.m.Y', time($pallet->created_at)) }}</td>
              </tr>
              <tr>
                <td>Order Time</td>
                <td>{{ date('H:i:s', time($pallet->created_at)) }}</td>
              </tr>
              <tr>
                <td>Order Status</td>
                <td>Invoice sent</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="callout">
        <h5>Ordered Items</h5>
          <table style="width: 100%;">
            <thead>
              <tr>
                <th>Item</th>
                <th>PPU</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pallet->palletOrders as $palletOrder)
                <tr>
                  <td>{{ $palletOrder->category->weight }} kg</td>
                  <td>{{ $palletOrder->price->price_per_kg }} EUR</td>
                  <td>{{ $palletOrder->amount }}</td>
                  <td>{{ $palletOrder->get_price()  }} EUR</td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <td></td>
                <td></td>
                <td>Shipping from Darmstadt:</td>
                <td>150,00 EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>Order Total:</td>
                <td>{{ $pallet->get_total_price() }} EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>Paid:</td>
                <td>0,00 EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>Balance due:</td>
                <td>{{ $pallet->get_total_price() }} EUR</td>
              </tr>
            </tfoot>
          </table>
      </div>
    </div>

    <div class="large-4 medium-6 small-12 column">
      <div class="callout">
        <h5>Options</h5>
        <a class="small expanded success button" href="#"><i class="fa fa-copy"></i> Place order again</a>
        <a class="small expanded warning button" href="#"><i class="fa fa-pencil"></i> Change order</a>
        <a class="small expanded alert button" href="#"><i class="fa fa-trash"></i> Cancel order</a>
      </div>
      <div class="callout">
        <h5>Remarks</h5>
        @foreach($pallet->get_remarks() as $remark)
          <div class="callout secondary">{{ $remark->body }} <em>{{ date('d.m.Y', time($remark->created_at)) }} at {{ date('H:i:s', time($remark->created_at)) }}</em></div>
        @endforeach
        <h6>New remark:</h6>
        <textarea type="text" name="remark" cols="20" rows="2" placeholder="Do you have any remarks regarding this order?"></textarea>
        <button class="button">Add remark</button>
      </div>
    </div>

    </section>

@endsection