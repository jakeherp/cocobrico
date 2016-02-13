@extends('layouts.app')

@section('content')

    <section class="row" id="content">

	  <div class="large-12 column">        
      <ul class="dropdown menu pull-right" data-dropdown-menu>
        <li>
          <a href="javascript:;" class="button success dropdown"><i class="fa fa-plus"></i> {{ trans('orders.new') }}</a>
          <ul class="dropdown menu success" data-dropdown-menu data-click-open="true">
            <li><a href="{{ url('orders/container') }}">{{ trans('orders.containers') }}</a></li>
            <li><a href="{{ url('orders/pallets') }}">{{ trans('orders.pallets') }}</a></li>
          </ul>
        </li>
      </ul>
        
      	<h1><i class="fa fa-truck"></i> {{ trans('orders.orders') }}</h1>
      </div>

      <div class="large-12 column">
        <h4>{{ trans('orders.previous') }} <span class="secondary label">37</span></h4>
      </div>
      
      <div class="large-12 column full-width">

		<table id="table" class="scroll" style="width: 100%; padding:0px !important; margin: 0px !important;">
          <thead>
            <tr>
              <th style="min-width: 100px;">{{ trans('orders.date') }}</th>
              <th style="min-width: 100px;">{{ trans('orders.number') }}</th>
              <th style="min-width: 50px;">{{ trans('orders.container') }}</th>
              <th style="min-width: 50px;">1kg</th>
              <th style="min-width: 50px;">3kg</th>
              <th style="min-width: 50px;">10kg</th>
              <th style="min-width: 250px;">{{ trans('orders.status') }}</th>
              <th style="min-width: 150px;">{{ trans('orders.options') }}</th>
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
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.ordered') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/01/2016</td>
              <td>12034023</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.billed') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr style="text-decoration: line-through; color: #000">
              <td>01/01/2016</td>
              <td>12034018</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="secondary label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.cancelled') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/11/2015</td>
              <td>12034012</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>14/10/2015</td>
              <td>12034008</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">{{ trans('orders.shipped') }}</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>  

      </div>

    </section>
    
@endsection