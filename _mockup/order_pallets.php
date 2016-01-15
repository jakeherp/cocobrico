<?php
	require('inc/header.php');
?>
    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-truck"></i> Order pallets</h1>
      </div>

	<form>
      <div class="large-6 small-12 columns">
      
      	<div class="callout">
          <label>
            1kg: 35 x 20 x 1kg (2.00 EUR/kg)
            <input type="number" value="1" min="0" max="100">
          </label>
          <label>
            3kg: 48 x 5 x 3kg (1.90 EUR/kg)
            <input type="number" value="1" min="0" max="100">
          </label>
          <label>
            10kg: 70 x 10kg (1.70 EUR/kg)
            <input type="number" value="1" min="0" max="100">
          </label>
        </div>
    
      </div>
	  <div class="large-6 small-12 columns">
      
      	<div class="callout">
        
          <label>Delivery Option
            <select>
              <option value="darmstadt">Pick up from warehouse Darmstadt</option>
              <option value="antwerp">Pick up from warehouse Antwerp</option>
              <option value="delivery1">Delivery to Muster GmbH, Musterstr. 10, 50402 Musterstadt, Germany</option>
              <option value="delivery2">Delivery to Mustermann AG, Max-Mustermann-Weg 25, 49201 Musterstadt, Germany</option>
            </select>
          </label>
  
          <label>
            Remark
            <textarea placeholder="Do you have any comments regarding your order?" rows="2"></textarea>
          </label>
  
          <label>
            Total:
            <strong>€ 3.958,00</strong> plus Shipping &amp; VAT
          </label>

      	  <div class="expanded button-group">
            <a class="button success"><i class="fa fa-check"></i> Place order</a>
          </div>
        </div>
    
      </div>
    </form>

      <div class="small-12 columns">
      
      <hr>
      
        <h4>Order History</h4>
      
      	<div class="callout">
		<table class="scroll">
          <thead>
            <tr>
              <th>Order Date</th>
              <th>Order No.</th>
              <th width="5%">1kg</th>
              <th width="5%">3kg</th>
              <th width="5%">10kg</th>
              <th width="30%">Status</th>
              <th width="20%">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>02/01/2016</td>
              <td>P12034023</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
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
              <td>P12034023</td>
              <td>0</td>
              <td>5</td>
              <td>3</td>
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
              <td>P12034018</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
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
              <td>P12034012</td>
              <td>10</td>
              <td>0</td>
              <td>5</td>
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
              <td>P12034008</td>
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
        </div>
    
      </div>


    </section>
    
<?php
	require('inc/footer.php');
?>