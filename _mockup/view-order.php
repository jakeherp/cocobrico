<?php
	require('inc/header.php');
?>
    <section class="row" id="content">

	  <div class="large-12 column">        
      	<h1><i class="fa fa-truck"></i> Order P201010</h1>
      </div>

      <div class="large-8 medium-6 small-12 column">
      	<div class="callout">
          <div class="row">
            <div class="medium-6 small-12 columns">
              <h5>Billing Address</h5>
              <strong>Cocobrico Europe Ltd</strong><br>
              Blegistrasse 5<br>
              CH-1234 Baar<br>
              Switzerland<br>
              <br>
              Phone: 029 39 39 22<br>
              Email: info@cocobrico.eu
            </div>
            <div class="medium-6 small-12 columns">
              <h5>Shipping Address</h5>
              <strong>Cocobrico Deutschland GmbH</strong><br>
              Musterstrasse 49<br>
              12345 Darmstadt<br>
              Germany<br>
              <br>
              Phone: 029 39 39 22<br>
              Email: info@cocobrico.de
            </div>
          </div>
          
          <hr>

          <div class="large-12">
            <h5>General Details</h5>
            <table class="scroll" style="width: 100%;">
              <tbody>
                <tr>
                  <td>Order Date</td>
                  <td>02.02.2016</td>
                </tr>
                <tr>
                  <td>Order Time</td>
                  <td>21:15</td>
                </tr>
                <tr>
                  <td>Order Status</td>
                  <td>Invoice sent</td>
                </tr>
              </tbody>
            </table>
          </div>
		</div>

      	<div class="callout">
          <h5>Ordered Items</h5>
            <table style="width: 100%;">
              <thead>
              	<tr>
                  <th>Item</th>
                  <th>PPU</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1kg</td>
                  <td>2.00 EUR</td>
                  <td>1400</td>
                  <td>2.800,00 EUR</td>
                </tr>
                <tr>
                  <td>3kg</td>
                  <td>1.90 EUR</td>
                  <td>0</td>
                  <td>0,00 EUR</td>
                </tr>
                <tr>
                  <td>10kg</td>
                  <td>1.70 EUR</td>
                  <td>70</td>
                  <td>1.190,00 EUR</td>
                </tr>
              </tbody>
              <tfoot>
              	<tr>
                  <td></td>
                  <td></td>
                  <td>Shipping from Darmstadt:</td>
                  <td>150,00 EUR</td>
                </tr>
              	<tr>
                  <td></td>
                  <td></td>
                  <td>Order Total:</td>
                  <td>4.140,00 EUR</td>
                </tr>
              	<tr>
                  <td></td>
                  <td></td>
                  <td>Paid:</td>
                  <td>0,00 EUR</td>
                </tr>
              	<tr>
                  <td></td>
                  <td></td>
                  <td>Balance due:</td>
                  <td>4.140,00 EUR</td>
                </tr>
              </tfoot>
            </table>
		</div>
      </div>
      
      <div class="large-4 medium-6 small-12 column">
		<div class="callout">
          <h5>Options</h5>
      	  <a class="small expanded success button" href="#"><i class="fa fa-copy"></i> Place order again</a>
      	  <a class="small expanded warning button" href="#"><i class="fa fa-pencil"></i> Change order</a>
      	  <a class="small expanded alert button" href="#"><i class="fa fa-trash"></i> Cancel order</a>
        </div>
		<div class="callout">
          <h5>Remarks</h5>
      	  <div class="callout secondary">Lorem ipsum dolor sit amet.</div>
          <h6>New remark:</h6>
          <textarea type="text" name="remark" cols="20" rows="2" placeholder="Do you have any remarks regarding this order?"></textarea>
          <button class="button">Add remark</button>
        </div>
      </div>

    </section>
    
<?php
	require('inc/footer.php');
?>