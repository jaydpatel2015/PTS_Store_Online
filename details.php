<?php
include('includes/db_config.php');
include('./functions/functions.php');
?>
<?php
if (isset($_GET['pro_id'])) {
  $product_id = $_GET['pro_id'];
  $get_product = "select * from products where product_id='$product_id'";
  $run_product = mysqli_query($con, $get_product);
  $row_product = mysqli_fetch_array($run_product);
  $p_cat_id = $row_product['p_cat_id'];
  $pro_title = $row_product['product_title'];
  $pro_price = $row_product['product_price'];
  $pro_desc = $row_product['product_desc'];
  $pro_img1 = $row_product['product_img1'];
  $pro_img2 = $row_product['product_img2'];
  $pro_img3 = $row_product['product_img3'];

  $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
  $run_p_cat = mysqli_query($con, $get_p_cat);
  $row_p_cat = mysqli_fetch_array($run_p_cat);
  $p_cat_title = $row_p_cat['p_cat_title'];
}
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
  <!-- Header File Loads here -->
  <?php include('includes/header.php'); ?>
  <!-- Header files ends here-->
  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item"><a href="shop.php?p_cat=<?php echo $p_cat_id ?>"><?php echo $p_cat_title ?></a></li>
                <li aria-current="page" class="breadcrumb-item active"><?php echo $pro_title ?></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-3">
            <!-- Sidebar Starts -->
            <?php include('includes/sidebar.php'); ?>
            <!-- Sidebar Ends -->
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img1 ?>" class="img-responsive"></div>
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img2 ?>" class="img-responsive"></div>
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img3 ?>" class="img-responsive"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $pro_title ?></h1>
                    <hr>
                    <?php echo add_cart()?>
                    <form action="details.php?add_cart=<?php echo $product_id ?>" method="post">
                      <label class="form-label">Product Quantity</label>
                      <select name="product_qty" class="form-control">
                        <option value="">Select Quantity</option>
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php } ?>
                      </select>
                      <br>
                      <label class="form-label">Product Size</label>
                      <select name="product_size" class="form-control">
                        <option value="">Select Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XXL">XXL</option>
                      </select>
                      <br>
                      <p class="price">&#8377;<?php echo $pro_price ?></p>
                      <p class="text-center buttons">
                        
                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                        <a href="#" class="btn btn-primary"><i class="fa fa-heart"></i> Add to wishlist</a>
                      </p>
                  </div>
                  </form>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img1 ?>" class="img-responsive"></button>
                    <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img2 ?>" class="img-responsive">
                      <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img3 ?>" class="img-responsive"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <h4>Product details</h4>
                <p></p>
                <?php echo $pro_desc ?>
                <!-- <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div> -->
              </div>
              <div id="details" class="box">
                <h3 class="text-center text-outline-primary">You may also like these products</h3>
              </div>
              <div class="row same-height-row">
                <?php
                $get_products = "select * from products order by rand() LIMIT 0,4";
                $run_products = mysqli_query($con, $get_products);
                while ($row_products = mysqli_fetch_array($run_products)) {
                  $pro_id = $row_products['product_id'];
                  $pro_title = $row_products['product_title'];
                  $pro_price = $row_products['product_price'];
                  $pro_img1 = $row_products['product_img1'];
                ?>
                  <!-- /.product suggestion starts here-->
                  <div class="col-md-3 col-sm-6">
                    <div class="product same-height">
                      <a href="details.php?pro_id=<?php echo $pro_id ?>"><img src="admin_area/admin_product_images/<?php echo $pro_img1 ?>" class="img-responsive" height="75%" width='100%'></a>
                      <div class="text">
                        <h3><?php echo $pro_title ?></h3>
                        <p class="price">&#8377;<?php echo $pro_price ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- /.product suggestion ends here-->
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
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