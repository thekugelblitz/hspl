<?php
$title = "HSPL - Best & Cheapest Hosting In INDIA";
$description = "HSPL - Best & Cheapest Hosting In INDIA";
include'head.php';
include'nav.php';
?>
  <div class="top-header item7 overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="wrapper">
            <h1 class="heading">Cart</h1>
            <h3 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** KNOWLEDGEBASE ***** -->
  <section class="config cd-main-content pb-80 blog sec-bg2 motpath">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8 pt-80">
          <div class="wrap-blog">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="wrapper targetDiv sec-grad-white-to-green">
                  <h3>Review & Checkout</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  <div class="row">
                    <div class="col-md-12 pt-4">
                      <div class="table-responsive-lg">
                        <table class="table compare">
                          <thead>
                            <tr>
                              <td>Product/Options</td>
                              <td>Qty</td>
                              <td>Price/Cycle</td>
                              <td>Edit</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><div class="badge bg-pink">Save 15%</div> Business VPS Linux</td>
                              <td><input type="number" value="1" class="form-control"></td>
                              <td><span class="ltgh">$12.30</span>  <b class="c-green">$9.99</b></td>
                              <td>
                                <a href="configurator" class="mr-2 c-pink" data-toggle="tooltip" data-placement="top" data-original-title="Edit your product"><i class="fas fa-cog"></i></a>
                                <a href="" data-toggle="modal" data-target="#myModal"><i class="far fa-trash-alt c-grey"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>yourperfectdomain.com</td>
                              <td><input type="number" value="1" class="form-control"></td>
                              <td><span class="">$16.00</span></td>
                              <td>
                                <a href="configurator" class="mr-2 c-pink" data-toggle="tooltip" data-placement="top" data-original-title="Edit your product"><i class="fas fa-cog"></i></a>
                                <a href="" data-toggle="modal" data-target="#myModal"><i class="far fa-trash-alt c-grey"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-12 pt-4">
                      <div class="cd-filter-block">
                        <h4>Payment Method</h4>
                        <div class="radio-group radios-filter cd-filter-content list">
                          <div class="table-responsive-sm">
                            <table class="table compare min">
                              <tbody>
                                <tr>
                                  <td><div class="badge bg-pink mr-1">Select</div> Payments Methods</td>
                                  <td>
                                    <div class="cd-select">
                                      <select class="select-filter">
                                        <option value="all">Select Payment Method</option>
                                        <option value=".data1">Pay by Bank Transfer</option>
                                        <option value=".data2">Pay with Paypal</option>
                                        <option value=".data3">Pay by Check</option>
                                      </select>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td><div class="badge bg-grey mr-1">Promo</div> Promocode</td>
                                  <td>
                                    <input type="text" name="promocode" placeholder="Put your promocode here" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="badge bg-grey mr-1">Legal</div>
                                    <a class="golink" href="legal" target="_blank">Terms (GDPR)</a>
                                  </td>
                                  <td class="pt-3">
                                    <label class="label-form float-right mb-0"></label>
                                    <div class="mt-3">
                                      <input class="filter" value="" type="checkbox" id="checkbox1">
                                      <label class="checkbox-label" for="checkbox1">Agree with terms and conditions?</label>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-12 col-lg-4">
          <aside id="sidebar" class="mt-120 sidebar sec-bg1">
            <div class="ordersummary mt-0">
              <h4>Order Summary</h4>
              <div class="table-responsive-lg">
                <table class="table">
                  <tbody>
                    <tr>
                      <td><div class="title-table">Subtotal</div></td>
                      <td>$25.99 USD</td>
                    </tr>
                    <tr>
                      <td><div class="title-table">Cycle</div></td>
                      <td>$9.99 USD Montly <br> $16.00 USD Annually</td>
                    </tr>
                    <tr>
                      <td><div class="title-table">Total Amount</div></td>
                      <td><h6><b>$25.99 USD</b></h6></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <a href="checkout" class="btn btn-default-yellow-fill mb-3">Checkout <i class="fas fa-arrow-alt-circle-right"></i></a>
            <a href="index" class="btn btn-default-fill mb-3">Continue Shopping</a>
          </aside>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ***** SMALL MODAL ***** -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Remove Item!</b></h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to remove this item from your cart?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default-fill " data-dismiss="modal">No</button>
          <button type="button" class="btn btn-default-purple-fill" data-dismiss="modal">Yes</button>
        </div>
      </div>
    </div>
  </div>
<?php 
include'parts/help.php';
include'foot.php';
?>