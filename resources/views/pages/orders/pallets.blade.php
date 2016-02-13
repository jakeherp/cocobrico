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


             <!--<input type="number" name="cat_{{ $category->id }}" value="0" min="0" max="100" class="orderPalletOption" unitsperbox="{{$category->unitsperbox}}" boxesperpallet="{{$category->boxesperpallet}}" mass="{{$category->weight}}" 
             price="{{ $price->price_per_kg }}">-->
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
      
      <hr>
      
      @if(count($user->getActiveIdentity()->pallets) > 0)
        <h4>{{ trans('orders.history') }}</h4>
        <div class="callout">
          <table class="scroll">
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
              <tr>
                <td>{{ $pallet->created_at }}</td>
                <td>{{ $pallet->customerReference }}</td>
                @foreach($categories as $category)
                  @if($order = $pallet->palletOrders()->where('pallet_category_id','=',$category->id)->first())
                    <td>{{ $order->amount }}</td>
                  @else
                    <td>0</td>
                  @endif
                @endforeach
                <td>
                  <span class="@if($pallet->status >= 0) success  @else secondary @endif  label round"><i class="fa fa-question"></i></span>
                  <span class="@if($pallet->status >= 1) success  @else secondary @endif label round"><i class="fa fa-check"></i></span>
                  <span class="@if($pallet->status >= 2) success  @else secondary @endif label round"><i class="fa fa-file-text-o"></i></span>
                  <span class="@if($pallet->status >= 3) success  @else secondary @endif label round"><i class="fa fa-usd"></i></span>
                  <span class="@if($pallet->status >= 4) success  @else secondary @endif label round"><i class="fa fa-truck"></i></span>
                  <div class="boxed-text">
                    EXTRA TABLE
                  </div>
                </td>
                <td>
                  <a href="{{ url('orders/pallets/'.$pallet->customerReference) }}" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
                  <a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
                  <a href="{{ url('orders/pallets/copy/' . $pallet->customerReference) }}" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
                  <a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      @endif
    
      </div>


    </section>

    <script>
      $(document).ready(function(){
        calculatePrice();
        $('.orderPalletOption').bind('click keyup', function(){
          calculatePrice();
        });
      });

      function calculatePrice(){
          var sum = 0;
          $('.orderPalletOption').each(function() {
              sum += $(this).val() * Number($(this).attr('unitsperbox')) * Number($(this).attr('boxesperpallet')) * Number($(this).attr('mass')) * Number($(this).attr('price'));
          });
          sum = sum.toFixed(2);
          $('#priceTotal').text(sum);
      }
    </script>

@endsection