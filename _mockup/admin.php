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


    
    <section class="row" id="content">

	  <div class="large-12 column">

        <div class="alert callout" data-closable>
          <h5>Warning: Counterfeit Products found in Europe</h5>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.</p>
          <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="success callout" data-closable>
          <h5>New pallet size for 1kg</h5>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.</p>
          <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
      </div>

      <div class="large-6 small-12 columns">
      
        <h4>Statistics</h4>
      
        <table style="width: 100%; color: #fff background: #000;">
          <thead>
            <tr>
              <th>Product</th>
              <th>Current year</th>
              <th>Last year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Container</td>
              <td>21</td>
              <td>12</td>
            </tr>
            <tr>
              <td>Pallet 1kg</td>
              <td>3</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Pallet 3kg</td>
              <td>2</td>
              <td>2</td>
            </tr>
            <tr>
              <td>Pallet 10kg</td>
              <td>1</td>
              <td>2</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Total orders:</td>
              <td>27</td>
              <td>17</td>
            </tr>
          </tfoot>
        </table>  
    
      </div>


      <div class="large-6 small-12 columns">
      
        <h4>Recent orders</h4>
      
        <table style="width: 100%; color: #fff background: #000;">
          <thead>
            <tr>
              <th>Order No.</th>
              <th>Order Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12034023</td>
              <td>02/01/2016</td>
              <td>Ordered</td>
            </tr>
            <tr>
              <td>12034018</td>
              <td>01/01/2016</td>
              <td>Cancelled</td>
            </tr>
            <tr>
              <td>12034012</td>
              <td>01/11/2015</td>
              <td>Shipped</td>
            </tr>
            <tr>
              <td>12034008</td>
              <td>14/10/2015</td>
              <td>Shipped</td>
            </tr>
            <tr>
              <td>12034914</td>
              <td>05/10/2015</td>
              <td>Shipped</td>
            </tr>
          </tbody>
        </table>  
    
      </div>

    </section>
    

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