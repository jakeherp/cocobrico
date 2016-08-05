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


<div class="off-canvas-wrapper">

    <!-- off-canvas title bar -->
    <div class="title-bar">

      <div class="top-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <img src="img/logo.svg" alt="Cocobrico"> <span>Administration Panel</span>
      </div>


      <div class="title-bar-right">

        <ul class="menu">
          <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>

      </div>

    </div>


  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>


    <!-- off-canvas left menu -->

    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>

      <ul class="vertical dropdown menu" data-dropdown-menu>

		<li class="user">Andi Reichmuth<em>Administrator</em></li>
        
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>        
		<li><a href="#"><i class="fa fa-tags"></i> Orders</a></li>
		<li><a href="#"><i class="fa fa-user"></i> Customers</a></li>
		<li><a href="#"><i class="fa fa-building"></i> Warehouses</a></li>
		<li><a href="#"><i class="fa fa-globe"></i> Exclusivities</a></li>
		<li><a href="#"><i class="fa fa-bar-chart"></i> Statistics</a></li>

		<li class="title"><i class="fa fa-cog"></i> Settings</li>
        <li><a href="#"><i class="fa fa-warning"></i> Announcements</a></li>
        <li><a href="#"><i class="fa fa-user-secret"></i> Users</a></li>
        <li><a href="#"><i class="fa fa-users"></i> User Roles</a></li>
        <li><a href="#"><i class="fa fa-usd"></i> Prices</a></li>

      </ul>

    </div>



    <!-- original content goes in this container -->

    <div class="off-canvas-content" data-off-canvas-content>

      <div class="row column">


		<table class="scroll" style="width: 100%; padding:0px !important; margin: 0px !important;">
          <thead>
            <tr>
              <th style="min-width: 250px;">Customer Name</th>
              <th style="min-width: 250px;">Customer Company</th>
              <th style="min-width: 200px;">Email</th>
              <th style="min-width: 100px;">Status</th>
              <th style="min-width: 100px;">Date added</th>
              <th style="min-width: 100px;">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jacob Herper</td>
              <td>PCServe Media Ltd</td>
              <td>jacob@pcserve.net</td>
              <td>Inactive</td>
              <td>05/02/2016</td>
              <td>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Activate Customer"><i class="fa fa-thumbs-up"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Customer"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Delete Customer"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>Andi Reichmuth</td>
              <td>Cocobrico Europe Ltd</td>
              <td>andi@cocobrico.com</td>
              <td>Active</td>
              <td>12/12/2015</td>
              <td>
              	<button class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Activate Customer" disabled><i class="fa fa-thumbs-up"></i></button>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Customer"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Delete Customer"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
		  </tbody>
        </table>


        <footer class="row">
          <div class="large-12 columns text-center">
            &copy; 2016 Cocobrico Europe Ltd
          </div>
        </footer>

      </div>
    </div>



  <!-- close wrapper, no more content after this -->

  </div>

</div>


    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>