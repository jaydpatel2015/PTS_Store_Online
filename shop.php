<?php
include('includes/db_config.php');
include('functions/functions.php');
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
                <li aria-current="page" class="breadcrumb-item active">Shop</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!-- Sidebar Starts -->
            <?php include('includes/sidebar.php'); ?>
            <!-- Sidebar Ends -->

            <div class="col-lg-9">
              <?php if (!isset($_GET['p_cat'])) {
                if (!isset($_GET['cat'])) { ?>
                  <div class="box">
                    <h1>Shop</h1>
                    <h4>we offer wide selection of the best products we have found and carefully selected worldwide.</h4>
                  </div>
              <?php }
              } ?>
              <div class="row products">
                <?php getProdCatAfterFilter(); ?>
                <?php if (!isset($_GET['p_cat'])) {
                  if (!isset($_GET['cat'])) {
                    $per_page = 3;
                    if (isset($_GET['page'])) {
                      $page = $_GET['page'];
                    } else {
                      $page = 1;
                    }
                    $start_from = ($page - 1) * $per_page;
                    $get_products = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";
                    $run_product = mysqli_query($con, $get_products);
                    while ($res_products = mysqli_fetch_array($run_product)) {
                      $pro_id = $res_products['product_id'];
                      $pro_title = $res_products['product_title'];
                      $pro_price = $res_products['product_price'];
                      $pro_img1 = $res_products['product_img1'];
                      echo "<div class='col-lg-4 col-md-6 d-flex'>
                                <div class='product'>
                                      <div class='card text-center'>
                                            <div class='card-header'>
                                                <a href='details.php?pro_id=$pro_id'><img id='proImg' class='card-img-top' src='admin_area/admin_product_images/$pro_img1'></a>
                                            </div>
                                            <div class='card-body'>
                                                <h4 class='card-title'><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
                                                <p class='card-text'>&#8377; $pro_price</p>
                                                  <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm'><i class='fa fa-search'></i>View Details</a>
                                                  <a href='details.php?pro_id=$pro_id' class='btn btn-primary btn-sm'><i class='fa fa-cart-plus'></i> Add to Cart</a>
                                            </div>
                                        </div>
                                </div>
                          </div>";
                    }
                ?>
                    <!-- </div> -->
                    <!-- /.product-->
                    <!-- </div> -->
                    <!-- /.products-->
                <?php }
                } ?>
              </div>
              <div class="pages justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <?php
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($con, $query);
                    $total_records = mysqli_num_rows($result);
                    $total_per_page = ceil($total_records / $per_page);
                    echo "<li class='page-item'><a href='shop.php?page=1' aria-label='Previous' class='page-link'><span aria-hidden='true'>First</span><span class='sr-only'>Previous</span></a></li>";
                    for ($i = 1; $i < $total_per_page; $i++) {
                      echo "<li class='page-item'><a href='shop.php?page=$i' class='page-link'><span aria-hidden='true'>$i</span><span class='sr-only'></span></a></li>";
                    }
                    echo "<li class='page-item'><a href='shop.php?page=$total_per_page' aria-label='Last' class='page-link'><span aria-hidden='true'>Last Page</span><span class='sr-only'>Next</span></a></li>";
                    ?>
                  </ul>
                </nav>
              </div>
              <!-- /.col-lg-9-->
            </div>
          </div>
        </div>
      </div>
      <!-- *** FOOTER STARTS *** -->
      <?php include('includes/footer.php') ?>
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