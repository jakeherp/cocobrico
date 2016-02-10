@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-truck"></i> Order pallets</h1>
      </div>

	{!! Form::open(['url' => 'orders/pallets', 'method' => 'post']) !!}
      <div class="large-6 small-12 columns">
      
      	<div class="callout">
          @foreach($categories as $category)
            <?php $price = $user->getActiveIdentity()->getPalletPrice($category->id, 'EUR'); ?>
             <label>
               {{$category->weight}}kg: {{$category->unitsperbox}} x {{$category->boxesperpallet}} x {{$category->weight}}kg 
               ( 
                  {{ $price->priceperkg }} 
                  EUR/kg
               )
             <input type="number" name="cat_{{ $category->id }}" value="0" min="0" max="100" class="orderPalletOption" unitsperbox="{{$category->unitsperbox}}" boxesperpallet="{{$category->boxesperpallet}}" mass="{{$category->weight}}" 
             price="{{ $price->priceperkg }}">
            </label>
          @endforeach
        </div>
    
      </div>
	  <div class="large-6 small-12 columns">
      
      	<div class="callout">
        
          <label>Delivery Option
            <select name="delivery">
              @foreach($warehouses as $warehouse)
                <option value="w_{{ $warehouse->id }}">Pick up from warehouse {{ $warehouse->name }}</option>
              @endforeach
              @foreach($user->getActiveIdentity()->addresses as $address)
                <option value="d_{{ $address->id }}">Delivery to {{ $address->companyName }}, {{ $address->address1 }} {{ $address->address2 }}, {{ $address->postCode }} {{ $address->city }}, {{ $address->country }}</option>
              @endforeach
            </select>
          </label>
  
          <label>
            Remark
            <textarea name="remark" placeholder="Do you have any comments regarding your order?" rows="2"></textarea>
          </label>
  
          <label>
            Total:
            <strong>€ <span id="priceTotal">0,00</span></strong> plus Shipping &amp; VAT
          </label>

      	  <div class="expanded button-group">
            <button role="submit" class="button success" id="test"><i class="fa fa-check"></i> Place order</button>
          </div>
        </div>
    
      </div>
    {!! Form::close() !!}

      <div class="small-12 columns">
      
      <hr>
      
      @if(count($user->getActiveIdentity()->pallets) > 0)
        <h4>Order History</h4>
        <div class="callout">
          <table class="scroll">
            <thead>
               <tr>
                <th>Order Date</th>
                <th>Order No.</th>
                @foreach($categories as $category)
                  <th width="5%">{{ $category->weight }} kg</th>
                @endforeach
                <th width="30%">Status</th>
                <th width="20%">Options</th>
              </tr>
            </thead>
            <tbody>
            @foreach($user->getActiveIdentity()->pallets as $pallet)
              <tr>
                <td>{{ $pallet->created_at }}</td>
                <td>{{ $pallet->customerReference }}</td>
                @foreach($pallet->palletOrders as $order)
                  <td>{{ $order->amount }}</td>
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
                  <a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
                  <a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
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
        $('.orderPalletOption').bind('click keyup', function(){
          var sum = 0;
          $('.orderPalletOption').each(function() {
              sum += $(this).val() * Number($(this).attr('unitsperbox')) * Number($(this).attr('boxesperpallet')) * Number($(this).attr('mass')) * Number($(this).attr('price'));
          });
          sum = sum.toFixed(2);
          $('#priceTotal').text(sum);
        });
      });
    </script>

@endsection