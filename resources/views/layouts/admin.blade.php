<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cocobrico Commercial</title>
    <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
  </head>
  <body>


<div class="off-canvas-wrapper">

    <!-- off-canvas title bar -->
    <div class="title-bar">

      <div class="top-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <img src="{{ URL::asset('img/logo.svg') }}" alt="Cocobrico"> <span>Administration Panel</span>
      </div>


      <div class="title-bar-right">

        <ul class="menu">
          <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>

      </div>

    </div>


  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>


    <!-- off-canvas left menu -->

    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

      <ul class="vertical dropdown menu" data-dropdown-menu>

        <li class="user">Andi Reichmuth<em>Administrator</em></li>
            
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>        
        <li><a href="{{ url('admin/customers') }}"><i class="fa fa-user"></i> Customers</a></li>
        <li><a href="{{ url('admin/warehouses') }}"><i class="fa fa-building"></i> Warehouses</a></li>
        <li><a href="{{ url('admin/countries') }}"><i class="fa fa-globe"></i> Exclusivities</a></li>
        <li><a href="{{ url('admin/statistics') }}"><i class="fa fa-bar-chart"></i> Statistics</a></li>

        <li class="title"><i class="fa fa-tags"></i> Orders</li>
            <li><a href="{{ url('admin/orders/options') }}"><i class="fa fa-tag"></i> Options</a></li>
            <li><a href="{{ url('admin/orders/containers') }}"><i class="fa fa-ship"></i> Containers</a></li>
            <li><a href="{{ url('admin/orders/pallets') }}"><i class="fa fa-truck"></i> Pallets</a></li>

        <li class="title"><i class="fa fa-cog"></i> Settings</li>
            <li><a href="{{ url('admin/announcements') }}"><i class="fa fa-warning"></i> Announcements</a></li>
            <li><a href="{{ url('admin/users') }}"><i class="fa fa-user-secret"></i> Users</a></li>
            <li><a href="{{ url('admin/userroles') }}"><i class="fa fa-users"></i> User Roles</a></li>
            <li><a href="{{ url('admin/prices') }}"><i class="fa fa-usd"></i> Prices</a></li>

      </ul>

    </div>

    <div class="off-canvas-content" data-off-canvas-content>
          <div class="row column">


    
    <section class="row" id="content">
	   @yield('content')
    </section>
    

    <footer class="row">
      <div class="large-12 columns text-center">
      &copy; 2016 Cocobrico Europe Ltd
      </div>
    </footer>
      </div>

    </div>


  <script type="text/javascript" src="{{ URL::asset('js/vendor/what-input.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  </body>
</html>