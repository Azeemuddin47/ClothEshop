<?php
//Initialize Session
session_start();

if(isset($_SESSION['login'])) {
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>ClotheShop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
     <!--================Header Menu Area =================-->
     <?php require_once 'nav.php'; ?>
  <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Product Checkout</h2>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="checkout.html">Product Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
      <div class="container">
        
        
          
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
              >
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="first"
                    name="name"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="First name"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="last"
                    name="name"
                  />
                  <span class="placeholder" data-placeholder="Last name"></span>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="company"
                    name="company"
                    placeholder="Company name"
                  />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="number"
                    name="number"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Phone number"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="compemailany"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Email Address"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="4">Canada</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add1"
                    name="add1"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address line 01"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add2"
                    name="add2"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address line 02"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                  />
                  <span class="placeholder" data-placeholder="Town/City"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="zip"
                    name="zip"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-12 form-group">
                  
                </div>
                <div class="col-md-12 form-group">
                  
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Order Notes"
                  ></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Product
                      <span>Total</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Product 1
                      <span class="middle">x 02</span>
                      <span class="last">₹ 720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Product 2
                      <span class="middle">x 02</span>
                      <span class="last">₹ 720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Product 3
                      <span class="middle">x 02</span>
                      <span class="last">₹ 720.00</span>
                    </a>
                  </li>
                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#"
                      >Subtotal
                      <span>₹ 2160.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Shipping
                      <span>Flat rate: ₹ 50.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Total
                      <span>₹ 2210.00</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Check payments</label>
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town,
                    Store State / County, Store Postcode.
                  </p>
                </div>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Paypal </label>
                    <img src="img/product/single-product/card.jpg" alt="" />
                    <div class="check"></div>
                  </div>
                  
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                <a class="main_btn" href="completed.php">Proceed to Pay</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
    
        <div  class=" col-lg-4 col-md-6 single-footer-widget  mx-auto"  >
          <center>
  
                      <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
              method="get" class="form-inline">
              <div class="mx-auto"></div>
              <input class="form-control " name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Your Email Address '" required="" type="email">
              <button class="click-btn btn btn-default">Subscribe</button>
              
              <!-- <div style="position: relative; left: -5000px;">
            
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
    
              </div> -->

              <div class="info"></div>
            </form>
          </div>
        </div>
      </center>
      </div>
      <div class="footer-bottom row align-items-center">
        <div class="col-lg-3 col-md-3 footer-social mx-auto">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    
    </div>
  </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>


<?php
} else {
  header("location:login.php");
}
?>
