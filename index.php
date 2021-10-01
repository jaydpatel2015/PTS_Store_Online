<?php
include('includes/db_config.php');
include('./functions/functions.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prime Time Shopper</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap">
  <!-- owl carousel-->
  <link rel="stylesheet" href="styles/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="styles/owl.carousel/assets/owl.theme.default.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="styles/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="styles/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="./logo/primetime_icon.png">
</head>

<body>
  <!-- navbar-->
  <header class="header mb-5">
    <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Welcome, Guest</a><a href="#" class="ml-1">Shopping Cart Total Price: &#8377;100, Total Items: 2</a></div>
          <div class="col-lg-6 text-center text-lg-right">
            <ul class="menu list-inline mb-0">
              <!-- <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li> -->
              <li class="list-inline-item"><a href="customer_register.php">Register</a></li>
              <li class="list-inline-item"><a href="customer/my_account.php">My Account</a></li>
              <li class="list-inline-item"><a href="cart.php">Go To Cart</a></li>
              <li class="list-inline-item"><a href="customer/my_account.php">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- *** TOP BAR END ***-->

    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container"><a href="index.php" class="navbar-brand home"><img src="logo/online-shopping.png" alt="PTS_logo" height=68 width=100 class="d-none d-md-inline-block"><img src="logo/online-shopping.png" height=50 width=50 alt="PTS_logo" class="d-inline-block d-md-none"><span class="sr-only">PTS - go to homepage</span></a>
        <div class="navbar-buttons">
          <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="cart.php" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="navigation" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="customer/my_account.php" class="nav-link">My Account</a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link">Shopping Cart</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
          </ul>
          <div class="navbar-buttons d-flex justify-content-end">
            <!-- /.nav-collapse-->
            <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
            <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
          </div>
        </div>
      </div>
    </nav>
    <div id="search" class="collapse">
      <div class="container">
        <form role="search" method="get" action="results.php" class="ml-auto">
          <div class="input-group">
            <input type="text" name="user_query" placeholder="Search Your Products here" required class="form-control">
            <div class="input-group-append">
              <button type="submit" name='search' class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="main-slider" class="owl-carousel owl-theme">
              <?php
              $get_images = "select * from slider";
              $run_slides = mysqli_query($con, $get_images);
              while ($row_slides = mysqli_fetch_array($run_slides)) {
                $slider_name = $row_slides['slider_name'];
                $slider_image = $row_slides['slider_image'];
                if ($row_slides['slider_id'] == 1) {
                  echo "<div class='item active'>
                            <img src='admin_area/admin_slider_images/$slider_image' class='img-fluid-1'>
                        </div>";
                } else {
                  echo "<div class='item'>
                          <img src='admin_area/admin_slider_images/$slider_image' class='img-fluid-1'>
                      </div>";
                }
              } ?>
            </div>
            <!-- /#main-slider-->
          </div>
        </div>
      </div>
      <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
      <div id="advantages">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-heart"></i></div>
                <h3><a href="#">We love our customers</a></h3>
                <p class="mb-0">We are known to provide best possible service ever</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-tags"></i></div>
                <h3><a href="#">Best prices</a></h3>
                <p class="mb-0">Competitive rates and quality from Marketplace</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                <p class="mb-3">Free returns on everything for 7 Days.**</p>
                <small>**Terms & Conditions Apply</small>
              </div>
            </div>
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
      <!-- /#advantages-->
      <!-- *** ADVANTAGES END ***-->
      <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
      <div id="hot">
        <div class="box py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-0">Hot this week</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- container -->
        <div class="container">        
              <div class="col-md-8 col-sm-4 single d-flex">
                  <?php getPro();?>  
              </div>
        </div>
        <!-- /.container-->
      <div class="container">
        <div class="col-md-12">
          <div class="box slideshow">
            <h3>Get Inspired</h3>
            <p class="lead">Get the inspiration from our world class designers</p>
            <div id="get-inspired" class="owl-carousel owl-theme">
              <div class="item"><a href="#"><img src="admin_area/admin_product_images/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
              <div class="item"><a href="#"><img src="admin_area/admin_product_images/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
              <div class="item"><a href="#"><img src="admin_area/admin_product_images/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- *** GET INSPIRED END ***-->

      <!-- *** FOOTER *** -->
      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Pages</h4>
              <ul class="list-unstyled">
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="customer/my_account.php">My Account</a></li>
              </ul>
              <hr>
              <h4 class="mb-3">User section</h4>
              <ul class="list-unstyled">
                <li><a href="customer/my_account.php">Login</a></li>
                <li><a href="customer_register.php">Register</a></li>
              </ul>
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Top categories</h4>
              <ul class="list-unstyled">
              <?php 
                $p_get_cats="SELECT * FROM product_categories";
                $run_p_cats=mysqli_query($con,$p_get_cats);
                while($res_p_cats=mysqli_fetch_array($run_p_cats)){
                    $p_cat_id=$res_p_cats['p_cat_id'];
                    $p_cat_title=$res_p_cats['p_cat_title'];
                    echo "
                    <li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>
                    ";
                }
              ?>
              </ul>
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">Reach Us</h4>
              <p>
                <strong>Prime Time Shopper</strong>
                <br>Surat, Gujarat, India
                <br><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i> contactus@pts.com</a>
                <br><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i> info@pts.com</a>
                <br><a href="tel:+910130401012"><i class="fa fa-phone"></i> +91-0130401012</a>
              </p>
              <hr class="d-block d-md-none">
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
              <h4 class="mb-3">News Buzz</h4>
              <p>Subscribe here to get latest deals and offers on Prime Time Shopper</p>
              <form action="" method="post">
                <div class="input-group">
                  <input type="text" name="email" class="form-control" required><span class="input-group-append">
                    <button type="submit" name="" class="btn btn-outline-secondary">Subscribe!</button></span>
                </div>
                <!-- /input-group-->
              </form>
              <hr>
              <h4 class="mb-3">Follow Us</h4>
              <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="mailto:someone@example.com" class="email external"><i class="fa fa-envelope"></i></a></p>
            </div>
            <!-- /.col-lg-3-->
          </div>
          <!-- /.row-->
        </div>
        <!-- /.container-->
      </div>
      <!-- /#footer-->
      <!-- *** FOOTER END ***-->


      <!-- *** Copyright Start *** -->
      <?php include('./includes/footer.php'); ?>
      <!-- *** Copyright End ***-->

      <!-- JavaScript files-->
      <script src="styles/jquery/jquery.min.js"></script>
      <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
      <script src="styles/owl.carousel/owl.carousel.min.js"></script>
      <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
      <script src="js/front.js"></script>
</body>

</html>