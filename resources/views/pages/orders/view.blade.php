@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

    <div class="large-12 column">        
      <h1><i class="fa fa-truck"></i> {{ trans('orders.order') }} {{ $pallet->customerReference }}</h1>
    </div>
    
    <div class="large-8 medium-6 small-12 column">
      <div class="callout">
        <div class="row">
          <div class="medium-6 small-12 columns">
            <h5>{{ trans('orders.billingaddress') }}</h5>
            <strong>{{ $identity->getBillingAddress()->companyName }}</strong><br>
            {{ $identity->getBillingAddress()->address1 }}<br>
            {{ $identity->getBillingAddress()->postCode }} {{ $identity->getBillingAddress()->city }}<br>
            {{ $identity->getBillingAddress()->country->name }}<br>
            <br>
            {{ trans('orders.phone') }}: {{ $identity->getBillingAddress()->phone }}<br>
            {{ trans('orders.email') }}: {{ $identity->getBillingAddress()->email }}
          </div>
          <div class="medium-6 small-12 columns">
            @if($pallet->address_id != 0)
              <h5>{{ trans('orders.shippingaddress') }}</h5>
              <strong>{{ $pallet->address->companyName }}</strong><br>
              {{ $pallet->address->address1 }}<br>
              {{ $pallet->address->postCode }} {{ $pallet->address->city }}<br>
              {{ $pallet->address->country->name }}<br>
              <br>
              {{ trans('orders.phone') }}: {{ $pallet->address->phone }}<br>
              {{ trans('orders.email') }}: {{ $pallet->address->email }}
            @else
              <h5>{{ trans('orders.pickup') }}</h5>
            @endif
          </div>
        </div>
          
        <hr>

        <div class="large-12">
          <h5>{{ trans('orders.details') }}</h5>
          <table class="scroll" style="width: 100%;">
            <tbody>
              <tr>
                <td>{{ trans('orders.date') }}</td>
                <td>{{ date('d.m.Y', time($pallet->created_at)) }}</td>
              </tr>
              <tr>
                <td>{{ trans('orders.time') }}</td>
                <td>{{ date('H:i:s', time($pallet->created_at)) }}</td>
              </tr>
              <tr>
                <td>{{ trans('orders.status') }}</td>
                <td>{{ trans('orders.billed') }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="callout">
        <h5>{{ trans('orders.items') }}</h5>
          <table style="width: 100%;">
            <thead>
              <tr>
                <th>{{ trans('orders.item') }}</th>
                <th>{{ trans('orders.ppu') }}</th>
                <th>{{ trans('orders.quantity') }}</th>
                <th>{{ trans('orders.total') }}</th>
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
                <td>{{ trans('orders.shipping') }}:</td>
                <td>150,00 EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>{{ trans('orders.order') }} {{ trans('orders.total') }}:</td>
                <td>{{ $pallet->get_total_price() }} EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>{{ trans('orders.paid') }}:</td>
                <td>0,00 EUR</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>{{ trans('orders.due') }}:</td>
                <td>{{ $pallet->get_total_price() }} EUR</td>
              </tr>
            </tfoot>
          </table>
      </div>
    </div>

    <div class="large-4 medium-6 small-12 column">
      <div class="callout">
        <h5>{{ trans('orders.options') }}</h5>
        <a class="small expanded success button" href="{{ url('orders/pallets/copy/' . $pallet->customerReference) }}"><i class="fa fa-copy"></i> {{ trans('orders.copy') }}</a>
        <a class="small expanded warning button" href="#"><i class="fa fa-pencil"></i> {{ trans('orders.edit') }}</a>
        <a class="small expanded alert button" href="#"><i class="fa fa-trash"></i> {{ trans('orders.cancel') }}</a>
      </div>
      <div class="callout">
        <h5>{{ trans('orders.remarks') }}</h5>
        @foreach($pallet->get_remarks() as $remark)
          <div class="callout secondary">{{ $remark->body }} <em>{{ date('d.m.Y', time($remark->created_at)) }} {{ trans('orders.at') }} {{ date('H:i:s', time($remark->created_at)) }}</em></div>
        @endforeach
        <h6>{{ trans('orders.newremark') }}:</h6>
        <textarea type="text" name="remark" cols="20" rows="2" placeholder="{{ trans('orders.remarkdesc') }}"></textarea>
        <button class="button">{{ trans('orders.addremark') }}</button>
      </div>
    </div>

    </section>

@endsection