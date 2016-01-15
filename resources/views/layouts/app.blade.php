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
  </head>
  <body>

    <header class="top-bar">
      <div class="top-bar-left">
        <img src="{{ URL::asset('img/logo.svg') }}" alt="Cocobrico">
      </div>

      <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>

      <div class="top-bar-left" id="main-nav">
        <ul class="menu">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="orders.php"><i class="fa fa-truck"></i> Orders</a></li>
          <li><a href="accounts.php"><i class="fa fa-usd"></i> Accounts</a></li>
          <li><a href="downloads.php"><i class="fa fa-download"></i> Downloads</a></li>
          <li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <li>Welcome back, Mr. Reichmuth</li>
          <li class="logout"><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </header>

	 @yield('content')
	    
    <footer class="row">
      <div class="large-12 columns text-center">
    	&copy; 2016 Cocobrico Europe Ltd
      </div>
    </footer>


	<script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/vendor/what-input.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/foundation.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  </body>
</html>