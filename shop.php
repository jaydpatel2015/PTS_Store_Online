<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prime Time Shopper</title>
  <meta name="description" content="Prime Time Shopper, a multi-vendor E-commerce Platform Solution for B2B/B2C">
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
    <!--*** TOPBAR ***-->
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Welcome, Guest</a><a href="#" class="ml-1">Shopping Cart Total Price: &#8377;100, Total Items: 2</a></div>
          <div class="col-lg-6 text-center text-lg-right">
            <ul class="menu list-inline mb-0">
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
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="shop.php" class="nav-link active">Shop</a></li>
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
      <div class="container mt-0">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Women</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
          
          <!-- Sidebar Starts -->
          <?php include ('includes/sidebar.php'); ?>
          <!-- Sidebar Ends -->
            
          <div class="col-lg-9">
            <div class="box">
              <h1>Women</h1>
              <p>In our Women department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
            </div>
            <div class="box info-bar">
              <div class="row">
                <div class="col-md-12 col-lg-4 products-showing">Showing <strong>12</strong> of <strong>25</strong> products</div>
                <div class="col-md-12 col-lg-7 products-number-sort">
                  <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                    <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                    <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                      <select name="sort-by" class="form-control">
                        <option>Price</option>
                        <option>Name</option>
                        <option>Sales first</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row products">
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">Fur coat with very but very very long name</a></h3>
                    <p class="price">
                      <del></del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">White Blouse Armani</a></h3>
                    <p class="price">
                      <del>&#8377;950</del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">Black Blouse Versace</a></h3>
                    <p class="price">
                      <del></del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">Black Blouse Versace</a></h3>
                    <p class="price">
                      <del></del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">White Blouse Versace</a></h3>
                    <p class="price">
                      <del></del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="details.php">Fur coat</a></h3>
                    <p class="price">
                      <del></del>&#8377;750
                    </p>
                    <p class="buttons"><a href="details.php" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a></p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product            -->
              </div>
              <!-- /.products-->
            </div>
            <div class="pages">
              <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
              <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">
                  <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /.col-lg-9-->
        </div>
      </div>
    </div>
  </div>
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
          <h5>Men</h5>
          <ul class="list-unstyled">
            <li><a href="#">T-shirts</a></li>
            <li><a href="#">Shirts</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
          <h5>Women</h5>
          <ul class="list-unstyled">
            <li><a href="#">T-shirts</a></li>
            <li><a href="#">Skirts</a></li>
            <li><a href="#">Pants</a></li>
            <li><a href="#">Accessories</a></li>
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

  <!--    *** COPYRIGHT ***    -->
  <?php include('includes/footer.php') ?>
  <!-- *** COPYRIGHT END ***-->
  
  <!-- JavaScript files-->
    <script src="styles/jquery/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
    <script src="styles/owl.carousel/owl.carousel.min.js"></script>
    <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
</body>

</html>