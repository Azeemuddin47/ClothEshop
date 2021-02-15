<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>ClotheShop - Register</title>
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
</head>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery -->
  <script src="js/jquery-3.2.1.min.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "category.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
                            $("#add_err2").html("loading...");
						}
					});
					 return false;
				});
});
    </script>

</head>

<body>

   

    <!-- Navigation -->
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
                        <a href="#" class="icons">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </li>
    
                      <li class="nav-item">
                        <a href="#" class="icons">
                          <i class="ti-user" aria-hidden="true"></i>
                        </a>
                      </li>
    
                      <li class="nav-item">
                        <a href="#" class="icons">
                          <i class="ti-heart" aria-hidden="true"></i>
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
    <!-- Navigation End -->

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <div class="alert alert-danger">
                  <strong>You must be logged in to shop.</strong>
                </div>
                    <hr>
                    <h2 class="intro-text text-center">Login
                       
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class = "form-group col-lg-12">
                    <a href="register.php"><button type="submit" class="btn btn-primary">Not a Member ? Register Here </button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
