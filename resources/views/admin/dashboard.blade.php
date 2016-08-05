@extends('layouts.admin')

@section('content')

	  <div class="large-4 medium-6 small-12 column">
      	<div class="callout secondary">
        	<h4>Total Orders</h4>
            <div class="pull-left lg"><i class="fa fa-tags"></i></div>
            <div class="pull-right lg">2.912</div>
            <div class="clearfix"></div>
            <a href="#">See more details &raquo;</a>
        </div>
      </div>

	  <div class="large-4 medium-6 small-12 column">
      	<div class="callout secondary">
        	<h4>Total Sales</h4>
            <div class="pull-left lg"><i class="fa fa-eur"></i></div>
            <div class="pull-right lg">2.9m</div>
            <div class="clearfix"></div>
            <a href="#">See more details &raquo;</a>
        </div>
      </div>

	  <div class="large-4 medium-6 small-12 column">
      	<div class="callout secondary">
        	<h4>Total Customers</h4>
            <div class="pull-left lg"><i class="fa fa-user"></i></div>
            <div class="pull-right lg">503</div>
            <div class="clearfix"></div>
            <a href="#">See more details &raquo;</a>
        </div>
      </div>

      <div class="large-6 small-12 column">
      
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


      <div class="large-6 small-12 column">
      
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
            <tr>
              <td>12034023</td>
              <td>02/01/2016</td>
              <td>Ordered</td>
            </tr>
            <tr>
              <td>12034018</td>
              <td>01/01/2016</td>
              <td>Cancelled</td>
            </tr>
            <tr>
              <td>12034012</td>
              <td>01/11/2015</td>
              <td>Shipped</td>
            </tr>
            <tr>
              <td>12034008</td>
              <td>14/10/2015</td>
              <td>Shipped</td>
            </tr>
            <tr>
              <td>12034914</td>
              <td>05/10/2015</td>
              <td>Shipped</td>
            </tr>
          </tbody>
        </table>  
    
      </div>
  
@endsection