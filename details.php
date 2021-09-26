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
              <li class="list-inline-item"><a href="checkout.php">My Account</a></li>
              <li class="list-inline-item"><a href="cart.php">Go To Cart</a></li>
              <li class="list-inline-item"><a href="checkout.php">Login</a></li>
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
            <li class="nav-item"><a href="checkout.php" class="nav-link">My Account</a></li>
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
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Ladies</a></li>
                <li class="breadcrumb-item"><a href="#">Tops</a></li>
                <li aria-current="page" class="breadcrumb-item active">White Blouse Armani</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3 order-2 order-lg-1">
            <!--*** MENUS AND FILTERS *** -->
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Categories</h3>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills flex-column category-menu">
                  <li><a href="category.html" class="nav-link">Men <span class="badge badge-secondary">42</span></a>
                    <ul class="list-unstyled">
                      <li><a href="category.html" class="nav-link">T-shirts</a></li>
                      <li><a href="category.html" class="nav-link">Shirts</a></li>
                      <li><a href="category.html" class="nav-link">Pants</a></li>
                      <li><a href="category.html" class="nav-link">Accessories</a></li>
                    </ul>
                  </li>
                  <li><a href="category.html" class="nav-link active">Ladies <span class="badge badge-light">123</span></a>
                    <ul class="list-unstyled">
                      <li><a href="category.html" class="nav-link">T-shirts</a></li>
                      <li><a href="category.html" class="nav-link">Skirts</a></li>
                      <li><a href="category.html" class="nav-link">Pants</a></li>
                      <li><a href="category.html" class="nav-link">Accessories</a></li>
                    </ul>
                  </li>
                  <li><a href="category.html" class="nav-link">Kids <span class="badge badge-secondary">11</span></a>
                    <ul class="list-unstyled">
                      <li><a href="category.html" class="nav-link">T-shirts</a></li>
                      <li><a href="category.html" class="nav-link">Skirts</a></li>
                      <li><a href="category.html" class="nav-link">Pants</a></li>
                      <li><a href="category.html" class="nav-link">Accessories</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card sidebar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Armani (10)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Versace (12)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Carlo Bruni (15)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Jack Honey (14)
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            <div class="card `side`bar-menu mb-4">
              <div class="card-header">
                <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour white"></span> White (14)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour blue"></span> Blue (10)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour green"></span> Green (20)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour yellow"></span> Yellow (13)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"><span class="colour red"></span> Red (10)
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                </form>
              </div>
            </div>
            <!-- *** MENUS AND FILTERS END ***-->
            <div class="banner"><a href="#"><img src="admin_area/admin_product_images/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
          </div>
          <div class="col-lg-9 order-1 order-lg-2">
            <div id="productMain" class="row">
              <div class="col-md-6">
                <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                  <div class="item"> <img src="admin_area/admin_product_images/detailbig1.jpg" alt="" class="img-fluid"></div>
                  <div class="item"> <img src="admin_area/admin_product_images/detailbig2.jpg" alt="" class="img-fluid"></div>
                  <div class="item"> <img src="admin_area/admin_product_images/detailbig3.jpg" alt="" class="img-fluid"></div>
                </div>
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
              </div>
              <div class="col-md-6">
                <div class="box">
                  <h1 class="text-center">White Blouse Armani</h1>
                  <hr>
                  <form action="details.php" method="post">
                    <div class="form-group d-flex justify-content-between">
                      <label for="col-md-6" class="form-label"><strong>Quantity</strong></label>
                      <select name="product_qty" style="max-width:175px;" class="form-control">
                        <option value="">Select Quantity</option>
                        <?php for ($i = 1; $i <= 10; $i++) { ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                      <label for="col-md-6" class="form-label"><strong>Size</strong></label>
                      <select name="product_size" style="max-width:175px;" class="form-control">
                        <option value="">Select Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                      </select>
                    </div>
                  </form>
                  <hr>
                  <div class='d-flex justify-content-center'>
                    <label class="price mb-1"><strong>M.R.P.:</strong></label><del class="price mb-1">&#8377;950.00</del>
                  </div>
                  <div class='d-flex justify-content-center'>
                    <label class="price mb-1"><strong>Price:</strong></label>
                    <p class="price mb-1">&#8377;550.00 <strong>[Incl. of VAT]</strong></p>
                  </div>
                  <div class='d-flex justify-content-center'>
                    <label class="price mb-0"><strong>You Save:</strong></label>
                      <p class="price mb-0">&#8377;400.00</p>
                  </div>
                  <hr>
                  <p class="text-center buttons"><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="#" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                  <hr>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="admin_area/admin_product_images/detailsquare.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="admin_area/admin_product_images/detailsquare2.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="admin_area/admin_product_images/detailsquare3.jpg" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Product details</h4>
                <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                <h4>Material &amp; care</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Size &amp; Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                </ul>
                <blockquote>
                  <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                  <div class="box same-height">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product2_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product1_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product3_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                  <div class="box same-height">
                    <h3>Products viewed recently</h3>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product2_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product2.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product1_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product1.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="details.php"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="details.php"><img src="admin_area/admin_product_images/product3_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="details.php" class="invisible"><img src="admin_area/admin_product_images/product3.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>Fur coat</h3>
                      <p class="price">&#8377;750</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
              </div>
            </div>
            <!-- /.col-md-9-->
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
              <li><a href="checkout.php">My Account</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="checkout.php">Login</a></li>
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


    <!--*** COPYRIGHT ***    -->
    <?php include('/includes/footer.php'); ?>
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