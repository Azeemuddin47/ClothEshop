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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
   <!-- javascript -->
   <script src="store_product.js" async></script>
   <script type="text/javascript">
    function added(){
      alert('Item added');
    }
   </script>
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +91 9876543232</p>
              <p>email: info@deccan.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
               
                <li>
                  <a href="contact.php">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="mr-1 flex-nowrap" >
          <img src="img/logo.jpeg" alt="" width="50"  > </div>
          
          <h1>ClotheShop</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="category.php">Shop Category</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                      </li>
                    </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Register Now</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="cart.php" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="logout.php" class="icons">
                      <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->
    &nbsp;
    &nbsp;
    <div class = "container">
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> 
            
          </div>
        </div>  
      </div>
    </div>
  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Shop Category</h2>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="category.html">Shop</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Category Product Area =================-->
  <section class="cat_product_area section_gap">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-12">

          <div class="latest_product_inner">
            <div class="row">
              <div class="col-lg-4 col-md-6 shop-item" >
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i1.jpg" alt="" />
                    <div class="p_icon">
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a class="d-block item-name">
                      <h4>Women's purse</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 2500</span>
                      <del>₹ 3500</del>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i2.jpg" alt="" />
                    <div class="p_icon">
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Men's Jeans</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 699</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i3.jpg" alt="" />
                    <div class="p_icon">
                     
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a class="d-block item-name">
                      <h4>e-watch</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 1499</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i4.jpg" alt="" />
                    <div class="p_icon">
                      
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Latest men’s sneaker</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 2999</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i5.jpg" alt="" />
                    <div class="p_icon">
                      
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Quartz Mens Watch</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 1999</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i6.jpg" alt="" />
                    <div class="p_icon">
                     
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4> women’s footwear</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 899</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i7.jpg" alt="" />
                    <div class="p_icon">
                     
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Ladies Purse</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 3999</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i8.jpg" alt="" />
                    <div class="p_icon">
                      
                      <a class = "btn-add-to-cart" onClick="added()">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Men's sports shoes</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 399</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 shop-item">
                <div class="single-product">
                  <div class="product-img">
                    <img class="card-img" src="img/product/inspired-product/i2.jpg" alt="" />
                    <div class="p_icon">
                      
                      <a class = "btn-add-to-cart" onClick="added()"> 
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a  class="d-block item-name">
                      <h4>Denim jeans</h4>
                    </a>
                    <div class="mt-3 item-price">
                      <span class="mr-4 price">₹ 1999</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!--================End Category Product Area =================-->

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