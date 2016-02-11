<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cocobrico Commercial</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css" />
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
          <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="{{ url('orders') }}"><i class="fa fa-truck"></i> Orders</a></li>
          <li><a href="{{ url('accounts') }}"><i class="fa fa-usd"></i> Accounts</a></li>
          <li><a href="{{ url('downloads') }}"><i class="fa fa-download"></i> Downloads</a></li>
        </ul>
      </div>

      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <li>
          
          <button type="button" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Settings"><i class="fa fa-cog"></i></button>
          <li>
          
          <button type="button" data-toggle="messages" class="iconlink" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Messages"><i class="fa fa-envelope"></i><sup class="alert label">2</sup></button>
            <div class="dropdown-pane" id="messages" data-dropdown>
              messages
            </div>

          </li>
          <li>

          <button type="button" data-toggle="switcher" class="iconlink" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Change Identity / Logout"><i class="fa fa-sign-out"></i></button>
            <div class="dropdown-pane right" id="switcher" data-dropdown>
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a href="#">Switch to Cocobrico Europe Ltd</a></li>
                <li><a href="#">Switch to Cocobrico Deutschland GmbH</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </div>

          </li>
          <li>Welcome back, Jacob</li>
        </ul>
      </div>
    </header>