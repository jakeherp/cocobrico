@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

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
              <td>21</td>
              <td>12</td>
            </tr>
            <tr>
              <td>Pallet 1kg</td>
              <td>3</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Pallet 3kg</td>
              <td>2</td>
              <td>2</td>
            </tr>
            <tr>
              <td>Pallet 10kg</td>
              <td>1</td>
              <td>2</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Total orders:</td>
              <td>27</td>
              <td>17</td>
            </tr>
          </tfoot>
        </table>  
    
      </div>


      <div class="large-6 small-12 columns">
      
        <h4>Recent orders</h4>
      
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
                <td>{{ $order['reference'] }}</td>
                <td>{{ $order['created_at'] }}</td>
                <td>{{ $order['status'] }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>  
    
      </div>

    </section>
    
@endsection