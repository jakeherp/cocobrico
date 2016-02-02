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

        <div class="row collapse">
          <div class="medium-2 columns">
            <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
              <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Customer Details</a></li>
              <li class="tabs-title"><a href="#panel2v"><i class="fa fa-plus"></i> New company</a></li>
            </ul>
            </div>
            <div class="medium-10 columns">
            <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
              <div class="tabs-panel is-active" id="panel1v">

                <form>
                  <div class="row">
                  	<div class="small-12 column"><h5>Personal Details</h5></div>
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">First Name</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Andi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Last Name</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Reichmuth">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Email Address</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="andi@cocobrico.com">
                    </div>
                  </div>
                  <div class="row">
                  	<div class="small-12 column"><h5>Company Details</h5></div>
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Company</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Cocobrico Europe Ltd">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Tax ID</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Proof of Incorporation</label>
                    </div>
                    <div class="small-9 columns">
                      <button class="button success">PDF Download</button> <button class="button alert">Delete</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Address Line 1</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Blegistrasse">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Address Line 2</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">City</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Baar">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Post Code</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="6340">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-3 columns">
                      <label for="middle-label" class="text-right middle">Country</label>
                    </div>
                    <div class="small-9 columns">
                      <input type="text" id="middle-label" value="Switzerland">
                    </div>
                  </div>
                </form>

              </div>
              <div class="tabs-panel" id="panel2v">

				

              </div>
            </div>
          </div>
        </div>

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