<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ trans('global.title') }}</title>
	<link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
	<link rel="apple-touch-icon" href="{{ URL::asset('img/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('img/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('img/touch-icon-ipad-retina.png') }}">
	<link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" type="image/png">

  </head>
  <body>

    <header class="top-bar">
      <div class="top-bar-left">
        <img src="{{ URL::asset('img/logo.svg') }}" alt="Cocobrico">
      </div>

      <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">{{ trans('global.menu') }}</div>
      </div>

      <div class="top-bar-left" id="main-nav">
        <ul class="menu">
          <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('global.dashboard') }}</a></li>
          <li><a href="orders.php"><i class="fa fa-truck"></i> {{ trans('global.orders') }}</a></li>
          <li><a href="accounts.php"><i class="fa fa-usd"></i> {{ trans('global.accounts') }}</a></li>
          <li><a href="downloads.php"><i class="fa fa-download"></i> {{ trans('global.downloads') }}</a></li>
          <li><a href="settings.php"><i class="fa fa-cog"></i> {{ trans('global.settings') }}</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <li>{{ trans('global.welcome') }} {{ $user->firstname }}</li>
          <li class="logout"><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
      </div>
    </header>

	 @yield('content')
	    
    <footer class="row">
      <div class="large-12 columns text-center">
    	&copy; <?php echo date("Y"); ?> Cocobrico Europe Ltd
      </div>
    </footer>


	<script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/vendor/what-input.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/foundation.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
  </body>
</html>