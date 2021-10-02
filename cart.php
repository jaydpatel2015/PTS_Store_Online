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
            <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="customer/my_account.php" class="nav-link">My Account</a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link active">Shopping Cart</a></li>
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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
              </ol>
            </nav>
          </div>
          <div id="basket" class="col-lg-9">
            <div class="box">
              <form method="post" action="cart.php" enctype="multipart/form-data">
                <h1>Shopping cart</h1>
                <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Product</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Discount</th>
                        <th>Remove</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#"><img src="admin_area/admin_product_images/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                        <td><a href="#">White Blouse Armani</a></td>
                        <td>M</td>
                        <td>
                          <input type="number" value="2" class="form-control">
                        </td>
                        <td>&#8377;550</td>
                        <td>&#8377;0.00</td>
                        <td class="text-center"><a href='#' name=remove[]><i class="fa fa-trash-o"></i></a></td>
                        <td>&#8377;1100</td>
                      </tr>
                      <tr>
                        <td><a href="#"><img src="admin_area/admin_product_images/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                        <td><a href="#">Black Blouse Armani</a></td>
                        <td>M</td>
                        <td>
                          <input type="number" value="1" class="form-control">
                        </td>
                        <td>&#8377;550</td>
                        <td>&#8377;0.00</td>
                        <td class="text-center"><a href='#' name=remove[]><i class="fa fa-trash-o"></i></a></td>
                        <td>&#8377;550</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="7">Total</th>
                        <th colspan="1">&#8377;1650</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.table-responsive-->
                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                  <div class="left"><a href="index.php" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                  <div class="right">
                    <button class="btn btn-outline-secondary" type='submit' name='update'><i class="fa fa-refresh"></i> Update cart</button>
                    <a href='customer/my_account.php' class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-->
            <div class="row same-height-row">
              <div class="col-lg-3 col-md-6">
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
                    <p class="price">&#8377;550</p>
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
                    <p class="price">&#8377;550</p>
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
                    <p class="price">&#8377;550</p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
            </div>
          </div>
          <!-- /.col-lg-9-->
          <div class="col-lg-3">
            <div id="order-summary" class="box">
              <div class="box-header">
                <h3 class="mb-0">Order summary</h3>
              </div>
              <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Order subtotal</td>
                      <th>&#8377;1650</th>
                    </tr>
                    <tr>
                      <td>Shipping and handling</td>
                      <th>&#8377;50</th>
                    </tr>
                    <tr>
                      <td>Tax</td>
                      <th>&#8377;0.00</th>
                    </tr>
                    <tr class="total">
                      <td>Total</td>
                      <th>&#8377;1700</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="box">
              <div class="box-header">
                <h4 class="mb-0">Coupon code</h4>
              </div>
              <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control"><span class="input-group-append">
                    <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                </div>
                <!-- /input-group-->
              </form>
            </div>
          </div>
          <!-- /.col-md-3-->
        </div>
      </div>
    </div>
  </div>
  <!-- *** FOOTER *** -->
  <?php include('./includes/footer.php'); ?>
  <!-- *** FOOTER END ***-->
  
  <!-- JavaScript files-->
    <script src="styles/jquery/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
    <script src="styles/owl.carousel/owl.carousel.min.js"></script>
    <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
</body>

</html>