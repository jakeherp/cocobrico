@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-truck"></i> {{ trans('orders.orderpallets') }}</h1>
      </div>

	{!! Form::open(['url' => 'orders/pallets', 'method' => 'post']) !!}
      <div class="large-6 small-12 columns">
      
      	<div class="callout">
          @foreach($categories as $category)
            <?php $price = $user->getActiveIdentity()->getPalletPrice($category->id, 'EUR'); ?>
             <label>
               {{$category->weight}}kg: {{$category->unitsperbox}} x {{$category->boxesperpallet}} x {{$category->weight}}kg 
               ( 
                  {{ $price->price_per_kg }} 
                  EUR/kg
               )

              {!! Form::number('cat_'.$category->id, 0, [
                'min' => 0, 
                'max' => 100,
                'class' => 'orderPalletOption',
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
          echo Form::select('delivery', $options, null, []);
        ?>
        </label>
  
          <label>
            {{ trans('orders.remark') }}
            {!! Form::textarea('remark', null, ['placeholder' => trans('orders.remarkdesc'), 'rows' => 2]) !!}
          </label>
  
          <label>
            {{ trans('orders.total') }}:
            <strong>&euro; <span id="priceTotal">0,00</span></strong> {!! trans('orders.plusshipping') !!}
          </label>

          @include ('errors.list')

      	  <div class="expanded button-group">
            <button role="submit" class="button success" id="test"><i class="fa fa-check"></i> {{ trans('orders.place') }}</button>
          </div>
        </div>
    
      </div>
    {!! Form::close() !!}

      <div class="small-12 columns">
            
      @if(count($user->getActiveIdentity()->pallets) > 0)
      <hr>

        <h4>{{ trans('orders.history') }}</h4>
          <table class="scroll" id="table">
            <thead>
               <tr>
                <th>{{ trans('orders.date') }}</th>
                <th>{{ trans('orders.number') }}</th>
                @foreach($categories as $category)
                  <th width="5%">{{ $category->weight }} kg</th>
                @endforeach
                <th width="30%">{{ trans('orders.status') }}</th>
                <th width="20%">{{ trans('orders.options') }}</th>
              </tr>
            </thead>
            <tbody>
            @foreach($user->getActiveIdentity()->pallets as $pallet)
              @if($pallet->hasStatus('cancelled'))
              <tr class="cancelled">
              @else
              <tr>
              @endif
                <td>{{ $pallet->created_at }}</td>
                <td>{{ $pallet->orderReference }}</td>
                @foreach($categories as $category)
                  @if($order = $pallet->palletOrders()->where('pallet_category_id','=',$category->id)->first())
                    <td>{{ $order->amount }}</td>
                  @else
                    <td>0</td>
                  @endif
                @endforeach
                <td>
                  <span class="@if($pallet->hasStatus('ordered')) success  @else secondary @endif  label round"><i class="fa fa-question"></i></span>
                  <span class="@if($pallet->hasStatus('confirmed')) success  @else secondary @endif label round"><i class="fa fa-check"></i></span>
                  <span class="@if($pallet->hasStatus('billed')) success  @else secondary @endif label round"><i class="fa fa-file-text-o"></i></span>
                  <span class="@if($pallet->hasStatus('paid')) success  @else secondary @endif label round"><i class="fa fa-usd"></i></span>
                  <span class="@if($pallet->hasStatus('shipped')) success  @else secondary @endif label round"><i class="fa fa-truck"></i></span>
                  <div class="boxed-text">
                    {{ trans('orders.'.$pallet->getStatus()) }}
                  </div>
                </td>
                <td>
                  <a 
                    href="{{ url('orders/pallets/'.$pallet->orderReference) }}" 
                    class="tiny button primary" 
                    data-tooltip aria-haspopup="true" 
                    data-disable-hover='false' 
                    tabindex=1 
                    title="View Order"
                  ><i class="fa fa-search"></i></a>
                  
                  <a 
                    class="tiny button warning editOrderModalButton" 
                    orderReference="{{ $pallet->orderReference }}" 
                    data-tooltip aria-haspopup="true" 
                    data-disable-hover='false' 
                    tabindex=1 
                    title="Edit Order" 
                    @if( $pallet->hasStatus('cancelled') )
                      disabled
                    @else
                      data-open="manageOrderModal"
                    @endif
                  ><i class="fa fa-pencil"></i></a>

                  <a 
                    class="tiny button success copyOrderModalButton" 
                    orderReference="{{ $pallet->orderReference }}" 
                    data-tooltip aria-haspopup="true" 
                    data-disable-hover='false' 
                    tabindex=1 
                    title="Copy Order" 
                    data-open="manageOrderModal"
                  ><i class="fa fa-clone"></i></a>

                  <a 
                    class="tiny button alert cancelOrderModalButton" 
                    orderReference="{{ $pallet->orderReference }}" 
                    data-tooltip aria-haspopup="true" 
                    data-disable-hover='false' 
                    tabindex=1 
                    title="Cancel Order" 
                    @if( $pallet->hasStatus('cancelled') )
                      disabled
                    @else
                      data-open="cancelOrderModal" 
                    @endif
                  ><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
      @endif
    
      </div>


    </section>

    @if(count($user->getActiveIdentity()->pallets) > 0)
    <!-- Modal for copying and editing orders -->
      <div class="reveal" id="manageOrderModal" data-reveal>
        <h3 id="orderModalHeadline">HEADLINE</h3>
        {!! Form::open(['url' => 'orders/pallets', 'method' => 'post', 'id' => 'orderModalFormId']) !!}
          {!! Form::hidden('orderReference', '', ['id' => 'order_orderReference']) !!}
          <span id="putOrderModal"></span>
            <div class="large-6 small-12 columns">
              <div class="callout">
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
        <h3>Cancel order P...</h3>
        <div class="callout alert">You are about to cancel your order no. <span id="orderReferenceSpan"></span>. Are you sure you want to cancel this order?</div>
        {!! Form::open(['url' => 'orders/pallets/cancel', 'method' => 'post']) !!}
          <input type="hidden" id="orderReference" name="orderReference" value="">
          <button id="cancelOrderButton" class="alert button">Cancel order</button>
          <button type="reset" class="secondary button" data-close>Keep order</button>
        {!! Form::close() !!}
        <button class="close-button" data-close aria-label="Close reveal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <script type="text/javascript" src="{{ URL::asset('js/orderactions.js') }}"></script>

@endsection