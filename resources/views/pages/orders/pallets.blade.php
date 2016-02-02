@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-truck"></i> Order pallets</h1>
      </div>

	<form>
      <div class="large-6 small-12 columns">
      
      	<div class="callout">
          @foreach($categories as $category)
             <label>
               {{$category->weight}}kg: {{$category->unitsperbox}} x {{$category->boxesperpallet}} x {{$category->weight}}kg ({{$category->priceperkg}} EUR/kg)
             <input type="number" value="0" min="0" max="100" class="orderPalletOption" unitsperbox="{{$category->unitsperbox}}" boxesperpallet="{{$category->boxesperpallet}}" mass="{{$category->weight}}" price="{{$category->priceperkg}}">
            </label>
          @endforeach
        </div>
    
      </div>
	  <div class="large-6 small-12 columns">
      
      	<div class="callout">
        
          <label>Delivery Option
            <select>
              @foreach($warehouses as $warehouse)
                <option value="{{ $warehouse->id }}">Pick up from warehouse {{ $warehouse->name }}</option>
              @endforeach
              @foreach($customers as $customer)
                <option value="delivery{{ $customer->id }}">Delivery to {{ $customer->billingCompanyName }}, {{ $customer->billingAddress1 }} {{ $customer->billingAddress2 }}, {{ $customer->billingPostCode }} {{ $customer->billingCity }}, {{ $customer->billingCountry }}</option>
              @endforeach
            </select>
          </label>
  
          <label>
            Remark
            <textarea placeholder="Do you have any comments regarding your order?" rows="2"></textarea>
          </label>
  
          <label>
            Total:
            <strong>€ <span id="priceTotal">0,00</span></strong> plus Shipping &amp; VAT
          </label>

      	  <div class="expanded button-group">
            <a class="button success" id="test"><i class="fa fa-check"></i> Place order</a>
          </div>
        </div>
    
      </div>
    </form>

      <div class="small-12 columns">
      
      <hr>
      
        <h4>Order History</h4>
      
      	<div class="callout">
		<table class="scroll">
          <thead>
            <tr>
              <th>Order Date</th>
              <th>Order No.</th>
              <th width="5%">1kg</th>
              <th width="5%">3kg</th>
              <th width="5%">10kg</th>
              <th width="30%">Status</th>
              <th width="20%">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>02/01/2016</td>
              <td>P12034023</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Ordered</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/01/2016</td>
              <td>P12034023</td>
              <td>0</td>
              <td>5</td>
              <td>3</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Billed</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr style="text-decoration: line-through; color: #000">
              <td>01/01/2016</td>
              <td>P12034018</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td><span class="secondary label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Cancelled</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/11/2015</td>
              <td>P12034012</td>
              <td>10</td>
              <td>0</td>
              <td>5</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>14/10/2015</td>
              <td>P12034008</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
    
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