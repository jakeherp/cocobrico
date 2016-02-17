@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

    <div class="large-12 column">        
      <h1><i class="fa fa-truck"></i> {{ trans('orders.order') }} {{ $pallet->orderReference }}</h1>
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
            @if($pallet->pickup == 2)
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
                <td>{{ trans('orders.'.$pallet->getStatus()) }}</td>
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
        <a 
          class="small expanded success button copyOrderModalButton" 
          orderReference="{{ $pallet->orderReference }}" 
          data-open="manageOrderModal"
        ><i class="fa fa-copy"></i> {{ trans('orders.copy') }}</a>
        <a 
          class="small expanded warning button editOrderModalButton" 
          orderReference="{{ $pallet->orderReference }}" 
          @if( $pallet->hasStatus('cancelled') )
            disabled
          @else
            data-open="manageOrderModal"
          @endif
        ><i class="fa fa-pencil"></i> {{ trans('orders.edit') }}</a>
        <a 
          class="small expanded alert button cancelOrderModalButton" 
          orderReference="{{ $pallet->orderReference }}" 
          @if( $pallet->hasStatus('cancelled') )
            disabled
          @else
            data-open="cancelOrderModal" 
          @endif
        ><i class="fa fa-trash"></i> {{ trans('orders.cancel') }}</a>
      </div>
      <div class="callout">
        <h5>{{ trans('orders.remarks') }}</h5>
        @foreach($pallet->get_remarks() as $remark)
          <div class="callout secondary">{{ $remark->body }} <em>{{ $remark->created_at }}</em></div>
        @endforeach
        <h6>{{ trans('orders.newremark') }}:</h6>
        {!! Form::open(['url' => ('orders/pallets/remark'), 'method' => 'post', 'id' => 'orderModalFormId']) !!}
          <textarea type="text" name="remark" cols="20" rows="2" placeholder="{{ trans('orders.remarkdesc') }}"></textarea>
          <input type="hidden" name="reference" value="{{ $pallet->orderReference }}">
          <button class="button">{{ trans('orders.addremark') }}</button>
        {!! Form::close() !!}
      </div>
    </div>

    </section>

    <!-- Modal for copying and editing orders -->
      <div class="reveal" id="manageOrderModal" data-reveal>
        <h3 id="orderModalHeadline">HEADLINE</h3>
        {!! Form::open(['url' => ('orders/pallets'), 'method' => 'post', 'id' => 'orderModalFormId']) !!}
          <span id="putOrderModal"></span>
            <div class="large-6 small-12 columns">
              <div class="callout">
                {!! Form::hidden('orderReference', $pallet->orderReference, []) !!}
                @foreach($categories as $category)
                  <?php $price = $user->getActiveIdentity()->getPalletPrice($category->id, 'EUR'); ?>
                   <label>
                     {{$category->weight}}kg: {{$category->unitsperbox}} x {{$category->boxesperpallet}} x {{$category->weight}}kg 
                     ( 
                        {{ $price->price_per_kg }} 
                        EUR/kg
                     )

                    {!! Form::number('cat_'.$category->id, 0, [
                      'id'  => 'order_cat_'.$category->id,
                      'min' => 0, 
                      'max' => 100,
                      'class' => 'modalOrderPalletOption',
                      'unitsperbox' => $category->unitsperbox,
                      'boxesperpallet' => $category->boxesperpallet,
                      'mass' => $category->weight,
                      'price' => $price->price_per_kg
                    ]) !!}
                  </label>
                @endforeach
              </div>
            </div>
            <div class="large-6 small-12 columns">
              <div class="callout">
                <label>{{ trans('orders.deliveryoption') }}
                <?php
                  $options = array();
                  foreach($warehouses as $warehouse){
                    $name = trans('orders.pickup').' '.$warehouse->name;
                    $options['w_'.$warehouse->id] = $name;
                  }
                  foreach($user->getActiveIdentity()->addresses as $address){
                    $name = trans('orders.deliverto') . ' ' . $address->companyName . ', ' . $address->address1 . ', ' . $address->city . ' ' . $address->postCode . ', ' . $address->country->name;
                    $options['d_'.$address->id] = $name;
                  }
                  echo Form::select('delivery', $options, null, ['id' => 'order_delivery']);
                ?>
                </label>
                <label>
                  {{ trans('orders.remark') }}
                  {!! Form::textarea('remark', null, ['id' => 'order_remark', 'placeholder' => trans('orders.remarkdesc'), 'rows' => 2]) !!}
                </label>
                <label>
                  {{ trans('orders.total') }}:
                  <strong>&euro; <span id="modalPriceTotal">0,00</span></strong> {!! trans('orders.plusshipping') !!}
                </label>
                <div class="expanded button-group">
                  <button role="submit" class="button success" id="orderModalButton"><i class="fa fa-check"></i> BUTTONTEXT</button>
                </div>
              </div>
            </div>
        {!! Form::close() !!}
        <button class="close-button" data-close aria-label="Close reveal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Modal for cancelling orders -->
      <div class="reveal" id="cancelOrderModal" data-reveal>
        <h3>Cancel order <span class="orderReferenceSpan"></span></h3>
        <div class="callout alert">You are about to cancel your order no. <span class="orderReferenceSpan"></span>. Are you sure you want to cancel this order?</div>
        {!! Form::open(['url' => 'orders/pallets/cancel', 'method' => 'post']) !!}
          <input type="hidden" id="orderReference" name="orderReference" value="">
          <button id="cancelOrderButton" class="alert button">Cancel order</button>
          <button type="reset" class="secondary button" data-close>Keep order</button>
        {!! Form::close() !!}
        <button class="close-button" data-close aria-label="Close reveal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <script type="text/javascript" src="{{ URL::asset('js/orderactions.js') }}"></script>

@endsection