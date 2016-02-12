@extends('layouts.app')

@section('content')

    <section class="row" id="content">

	  <div class="large-12 column">        
      <ul class="dropdown menu pull-right" data-dropdown-menu>
        <li>
          <a href="javascript:;" class="button success dropdown"><i class="fa fa-plus"></i> New order</a>
          <ul class="dropdown menu success" data-dropdown-menu data-click-open="true">
            <li><a href="{{ url('orders/container') }}">Order Container</a></li>
            <li><a href="{{ url('orders/pallets') }}">Order Pallets</a></li>
          </ul>
        </li>
      </ul>
        
      	<h1><i class="fa fa-truck"></i> Orders</h1>
      </div>

      <div class="large-12 column">
        <h4>All previous orders <span class="secondary label">37</span></h4>
      </div>
      
      <div class="large-12 column full-width">

		<table class="scroll" style="width: 100%; padding:0px !important; margin: 0px !important;">
          <thead>
            <tr>
              <th style="min-width: 150px;">Order Date</th>
              <th style="min-width: 150px;">Order No.</th>
              <th style="min-width: 100px;">Container</th>
              <th style="min-width: 100px;">1kg</th>
              <th style="min-width: 100px;">3kg</th>
              <th style="min-width: 100px;">10kg</th>
              <th style="min-width: 260px;">Status</th>
              <th style="min-width: 150px;">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>02/01/2016</td>
              <td>12034023</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
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
              <td>12034023</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
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
              <td>12034018</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
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
              <td>12034012</td>
              <td>1</td>
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
            <tr>
              <td>14/10/2015</td>
              <td>12034008</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
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

        <ul class="pagination text-center" role="navigation" aria-label round="Pagination">
          <li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
          <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
          <li><a href="#" aria-label round="Page 2">2</a></li>
          <li><a href="#" aria-label round="Page 3">3</a></li>
          <li><a href="#" aria-label round="Page 4">4</a></li>
          <li class="pagination-next"><a href="#" aria-label round="Next page">Next <span class="show-for-sr">page</span></a></li>
        </ul>

      </div>

    </section>
    
@endsection