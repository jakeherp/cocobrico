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

      <div class="large-6 medium-6 small-12 columns">
      	<h3>Pending Customers</h3>
        <table style="width: 100%;">
          <thead>
          	<tr>
              <th>Date</th>
              <th>Name</th>
              <th>Company</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	<tr>
              <td>01.02.2016</td>
              <td>Max Mustermann</td>
              <td>Mustermann GmbH</td>
              <td>
              	<a href="#" class="tiny button primary" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button success" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Approve"><i class="fa fa-thumbs-up"></i></a>
              	<a href="#" class="tiny button alert" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Disapprove"><i class="fa fa-thumbs-down"></i></a>
              </td>
            </tr>
          	<tr>
              <td>01.02.2016</td>
              <td>Max Mustermann</td>
              <td>Mustermann GmbH</td>
              <td>
              	<a href="#" class="tiny button primary" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button success" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Approve"><i class="fa fa-thumbs-up"></i></a>
              	<a href="#" class="tiny button alert" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Disapprove"><i class="fa fa-thumbs-down"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="large-6 medium-6 small-12 columns">
      	<h3>Pending Orders</h3>
        <table style="width: 100%;">
          <thead>
          	<tr>
              <th>Date</th>
              <th>Customer</th>
              <th>Type</th>
              <th>Order No.</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	<tr>
              <td>01.02.2016</td>
              <td>Mustermann GmbH</td>
              <td>Pallet Order</td>
              <td>P 160204</td>
              <td>
              	<a href="#" class="tiny button primary" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button success" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Confirm"><i class="fa fa-thumbs-up"></i></a>
              </td>
            </tr>
          	<tr>
              <td>01.02.2016</td>
              <td>Mustermann GmbH</td>
              <td>Container Order</td>
              <td>C DEMU14</td>
              <td>
              	<a href="#" class="tiny button primary" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button success" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Confirm"><i class="fa fa-thumbs-up"></i></a>
              </td>
            </tr>
          	<tr>
              <td>01.02.2016</td>
              <td>Mustermann GmbH</td>
              <td>Pallet Order</td>
              <td>P 160204</td>
              <td>
              	<a href="#" class="tiny button primary" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button success" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Confirm"><i class="fa fa-thumbs-up"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="large-6 medium-6 small-12 columns">
      	<h3>Stock Levels (in pallets)</h3>
        <table style="width: 100%;">
          <thead>
          	<tr>
              <th>Warehouse</th>
              <th>1kg</th>
              <th>3kg</th>
              <th>10kg</th>
            </tr>
          </thead>
          <tbody>
          	<tr>
              <td>Antwerp</td>
              <td><strong>160</strong> (178)</td>
              <td><strong>340</strong> (343)</td>
              <td><strong>120</strong> (120)</td>
            </tr>
          	<tr>
              <td>Darmstadt</td>
              <td><strong>160</strong> (178)</td>
              <td><strong>340</strong> (343)</td>
              <td><strong>120</strong> (120)</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="large-12 column">
      	<h3>Recent orders</h3>
		<table class="scroll" style="width: 100%; padding:0px !important; margin: 0px !important;">
          <thead>
            <tr>
              <th style="min-width: 150px;">Order Date</th>
              <th style="min-width: 150px;">Order No.</th>
              <th style="min-width: 100px;">Container</th>
              <th style="min-width: 100px;">1kg</th>
              <th style="min-width: 100px;">3kg</th>
              <th style="min-width: 100px;">10kg</th>
              <th style="min-width: 260px;">Status</th>
              <th style="min-width: 150px;">Options</th>
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
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Ordered</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/01/2016</td>
              <td>12034023</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Billed</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr style="text-decoration: line-through; color: #000">
              <td>01/01/2016</td>
              <td>12034018</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="secondary label round"><i class="fa fa-question"></i></span><span class="secondary label round"><i class="fa fa-check"></i></span><span class="secondary label round"><i class="fa fa-file-text-o"></i></span><span class="secondary label round"><i class="fa fa-usd"></i></span><span class="secondary label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Cancelled</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>01/11/2015</td>
              <td>12034012</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>14/10/2015</td>
              <td>12034008</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>05/10/2015</td>
              <td>12034914</td>
              <td>1</td>
              <td>10</td>
              <td>12</td>
              <td>11</td>
              <td><span class="success label round"><i class="fa fa-question"></i></span><span class="success label round"><i class="fa fa-check"></i></span><span class="success label round"><i class="fa fa-file-text-o"></i></span><span class="success label round"><i class="fa fa-usd"></i></span><span class="success label round"><i class="fa fa-truck"></i></span><div class="boxed-text">Shipped</div></td>
              <td>
              	<a href="#" class="tiny button primary has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="View Order"><i class="fa fa-search"></i></a>
              	<a href="#" class="tiny button warning has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Order"><i class="fa fa-pencil"></i></a>
              	<a href="#" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Copy Order"><i class="fa fa-clone"></i></a>
              	<a href="#" class="tiny button alert has-tip disabled" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Cancel Order"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>  

        <ul class="pagination text-center" role="navigation" aria-label round="Pagination">
          <li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
          <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
          <li><a href="#" aria-label round="Page 2">2</a></li>
          <li><a href="#" aria-label round="Page 3">3</a></li>
          <li><a href="#" aria-label round="Page 4">4</a></li>
          <li class="pagination-next"><a href="#" aria-label round="Next page">Next <span class="show-for-sr">page</span></a></li>
        </ul>
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