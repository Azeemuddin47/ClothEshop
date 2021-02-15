<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>ClotheShops</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- javascript -->
  <script src="store_product.js" async></script>
</head>

<body>
  <!--================Header Menu Area =================-->
  
  
  <?php require_once 'nav.php'; ?>
  <!--================Header Menu Area =================-->
  <?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>
  
  
  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">men Collection</p>
            <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
        
            <a class="main_btn mt-40" href="category.php">View Collection</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  
 

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>products</span></h2>
       
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="https://images.pexels.com/photos/297933/pexels-photo-297933.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
              <div class="p_icon">
                <a href="category.php">
                  <i class="ti-eye"></i>
                </a>
                
              </div>
            </div>
            <div class="product-btm">
              <a href="category.php" class="d-block">
                <h4>Men's Polo Shirt</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">₹ 2850</span>
                <del>₹ 3850</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
              <div class="p_icon">
                <a href="category.php">
                  <i class="ti-eye"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="category.php" class="d-block">
                <h4>Sweater</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">₹ 800</span>
                <del>₹ 1135.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="https://images.pexels.com/photos/298863/pexels-photo-298863.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
              <div class="p_icon">
                <a href="category.php">
                  <i class="ti-eye"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="category.php" class="d-block">
                <h4>Men's wear</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">₹ 3325.00</span>
                <del>₹ 4773.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->

 
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
          
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="new_product">
            <h5 class="text-uppercase">collection of 2020</h5>
            <h3 class="text-uppercase">Men’s summer t-shirt</h3>
            <div class="product-img">
              <img class="img-fluid" src="img/product/new-product/new-product1.png" alt="" />
            </div>
            <h4>₹ 1200</h4>
            <a href="category.php" class="main_btn">Add to cart</a>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n1.jpg" alt="" />
                </div>
                <div class="product-btm">
                  <a href="category.php" class="d-block">
                    <h4> latest sneaker</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">₹ 4000</span>
                    <del>₹ 6000</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n2.jpg" alt="" />
                  
                </div>
                <div class="product-btm">
                  <a href="category.php" class="d-block">
                    <h4>Quartz hand watch</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">₹ 5000</span>
                    <del>₹ 6000</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n3.jpg" alt="" />
                </div>
                <div class="product-btm">
                  <a href="category.php" class="d-block">
                    <h4>denim jeans</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">₹ 2500</span>
                    <del>₹ 3500</del>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="img/product/new-product/n4.jpg" alt="" />
                  
                </div>
                <div class="product-btm">
                  <a href="category.php" class="d-block">
                    <h4>nike sport shoe</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">₹ 5500</span>
                    <del>₹ 7500</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->

  

 

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
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>