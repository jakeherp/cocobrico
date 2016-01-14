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

    <header class="row">
      <div class="large-12 columns text-center">
        <h1><img src="{{ URL::asset('img/logo.svg') }}" alt="Cocobrico">Commercial Customers</h1>
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
