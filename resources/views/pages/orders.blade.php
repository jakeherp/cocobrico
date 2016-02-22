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
        <h4>{{ trans('orders.previous') }} <span class="secondary label">{{ count($orders) }}</span></h4>
      </div>
      
      <div class="large-12 column full-width">
        @if($orders)
        <div class="horizontal-scroll">
  		    <table id="table" class="full-table">
            <thead>
              <tr>
                <th>{{ trans('orders.date') }}</th>
                <th>{{ trans('orders.number') }}</th>
                <th style="min-width: 50px;">{{ trans('orders.container') }}</th>
                @foreach($categories as $category)
                    <th style="min-width: 50px;">{{ $category->weight }} kg</th>
                @endforeach
                <th style="min-width: 250px;">{{ trans('orders.status') }}</th>
                <th style="min-width: 150px;" class="no-sort">{{ trans('orders.options') }}</th>
              </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ date(trans('global.datetimeformat'),$order['created_at']) }}</td>
                        <td>{{ $order['obj']->orderReference }}</td>
                        <td>
                            @if($order['type'] == 'container')
                                1
                            @else
                                0
                            @endif
                        </td>
                        @foreach($categories as $category)
                            <td>
                                @if($order['type'] == 'pallet')
                                    <?php
                                        $info = $order['obj']->palletOrders()->where('pallet_id','=',$order['obj']->id)->where('pallet_category_id','=',$category->id)->first();
                                    ?>
                                    @if($info)
                                        {{ $info['amount'] }}
                                    @else
                                        0
                                    @endif
                                @else
                                    0
                                @endif
                            </td>
                        @endforeach
                        <td>
                            <span class="success label round"><i class="fa fa-question"></i></span>
                            <span class="secondary label round"><i class="fa fa-check"></i></span>
                            <span class="secondary label round"><i class="fa fa-file-text-o"></i></span>
                            <span class="secondary label round"><i class="fa fa-usd"></i></span>
                            <span class="secondary label round"><i class="fa fa-truck"></i></span>
                            <div class="boxed-text">{{ trans('orders.'.$order['obj']->getStatus()) }}</div>
                        </td>
                        <td>
                            <a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.view') }}"><i class="fa fa-search"></i></a>
                            <a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.edit') }}"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.copy') }}"><i class="fa fa-clone"></i></a>
                            <a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="{{ trans('orders.cancel') }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        @else
            <p>There are no orders right now!</p>
        @endif
      </div>

    </section>
    
@endsection