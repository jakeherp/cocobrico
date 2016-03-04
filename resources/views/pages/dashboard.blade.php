@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">
<!--
	  <div class="large-12 column">

        <div class="alert callout" data-closable>
          <h5>Warning: Counterfeit Products found in Europe</h5>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.</p>
          <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="success callout" data-closable>
          <h5>New pallet size for 1kg</h5>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.</p>
          <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
      </div>
-->
      <div class="large-6 small-12 columns">
      
        <h4>Statistics</h4>
      
        <table style="width: 100%; color: #fff background: #000;">
          <thead>
            <tr>
              <th>Product</th>
              <th>Current year</th>
              <th>Last year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Container</td>
              <td>XX</td>
              <td>XX</td>
            </tr>
            @foreach($categories as $category)
              <tr>
                <td>Pallet {{ $category->weight }}kg</td>
                <td>
                  <?php $info = $user->getActiveIdentity()->countPalletOrders(date('Y',time())); ?>
                  {{ $info[$category->id] }}
                </td>
                <td>
                  <?php $info = $user->getActiveIdentity()->countPalletOrders(date('Y',time())-1); ?>
                  {{ $info[$category->id] }}
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td>Total orders:</td>
              <td>XX</td>
              <td>XX</td>
            </tr>
          </tfoot>
        </table>  
    
      </div>


      <div class="large-6 small-12 columns">
      
        <h4>Recent orders</h4>
        @if($orders)
        <table style="width: 100%; color: #fff background: #000;">
          <thead>
            <tr>
              <th>Order No.</th>
              <th>Order Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>{{ $order['obj']->orderReference }}</td>
                  <td>{{ date(trans('global.datetimeformat'),$order['created_at']) }}</td>
                  <td>{{ trans('orders.'.$order['obj']->getStatus()) }}</td>
                </tr>
              @endforeach
          </tbody>
        </table>  
        @else
          <p>There are currently no orders!</p>
        @endif
      </div>

    </section>
    
@endsection