<?php
include('includes/db_config.php');
include('./functions/functions.php');
?>

<?php
if (isset($_GET['pro_id'])) {
  $product_id = $_GET['pro_id'];

  $get_product = "select * from products where product_id='$product_id'";
  $run_product_query = mysqli_query($con, $get_product);
  $row_product = mysqli_fetch_array($run_product_query);
  $p_cat_id = $row_product['p_cat_id'];
  $pro_title = $row_product['product_title'];
  $pro_price = $row_product['product_price'];
  $pro_desc = $row_product['product_desc'];
  $pro_img1 = $row_product['product_img1'];
  $pro_img2 = $row_product['product_img2'];
  $pro_img3 = $row_product['product_img3'];


  $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
  $run_p_cat_query = mysqli_query($con, $get_p_cat);
  $row_p_cat = mysqli_fetch_array($run_p_cat_query);
  $p_cat_title = $row_p_cat['p_cat_title'];
  $p_cat_desc = $row_p_cat['p_cat_desc'];
}
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
    <!-- Header File Loads here -->
          <?php include ('includes/header.php'); ?>
   <!-- Header files ends here-->

  <div id="all">
    <div id="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <!-- breadcrumb-->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item"><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
                <li class="breadcrumb-item"><?php echo $pro_title; ?></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-12">
            <div class="col-lg-3 order-2 order-lg-1">
              <!--*** MENUS AND FILTERS *** -->
              <?php
              // include('includes/sidebar.php');
              ?>
              <!-- *** MENUS AND FILTERS END ***-->
            </div>
            <div class="col-lg-12 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img1 ?>" alt="" class="img-responsive" height='530'></div>
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img2 ?>" alt="" class="img-responsive" height='530'></div>
                    <div class="item"> <img src="admin_area/admin_product_images/<?php echo $pro_img3 ?>" alt="" class="img-responsive" height='530'></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $pro_title ?></h1>
                    <hr>
                    <?php echo add_cart(); ?>
                    <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post">
                      <div class="form-group d-flex justify-content-between">
                        <label for="col-md-6" class="form-label"><strong>Quantity</strong></label>
                        <select name="product_qty" style="max-width:175px;" class="form-control">
                          <option value="">Select Quantity</option>
                          <?php for ($i = 1; $i <= 5; $i++) { ?>
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
                    
                    <hr>
                    <!-- <div class='d-flex justify-content-center'>
                      <label class="price mb-1"><strong>M.R.P.:</strong></label><del class="price mb-1">&#8377;950.00</del>
                    </div> -->
                    <div class='d-flex justify-content-center align-items-center'>
                      <label class="price mb-1"><strong>Price:</strong></label>
                      <h4 class="price mb-1">&#8377;<?php echo $pro_price ?></h4>
                    </div>
                    <!-- <div class='d-flex justify-content-center'>
                      <label class="price mb-0"><strong>You Save:</strong></label>
                      <p class="price mb-0">&#8377;400.00</p>
                    </div> -->
                    <hr>
                    <p class="text-center buttons">
                      <button type="submit" name='submit' class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                      <!-- <a href="#" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a> -->
                    </p>
                    </form>
                    <hr>
                    <div data-slider-id="1" class="owl-thumbs">
                      <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img1 ?>" alt="" class="img-fluid"></button>
                      <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img2 ?>" alt="" class="img-fluid"></button>
                      <button class="owl-thumb-item"><img src="admin_area/admin_product_images/<?php echo $pro_img3 ?>" alt="" class="img-fluid"></button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Product details</h4>
                      </div>
                      <div class="card-body">
                          <h4 class="card-text"><?php echo $pro_desc; ?></h4>
                      </div>
                    </div>
                  </div>

                <!-- <div id="details" class="box">
                  <h4>Product details</h4>
                  <div class="col-lg-12">
                    <p><?php //echo $pro_desc; 
                        ?></p> -->
                <!-- <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                  <h4>Material &amp; care</h4>
                  <ul>
                    <li>Polyester</li>
                    <li>Machine wash</li>
                  </ul>
                  <h4>Size &amp; Fit</h4>
                  <ul>
                    <li>Regular fit</li>
                    <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                  </ul> -->
                <!--<hr>
                   <div class="social">
                    <h4>Show it to your friends</h4>
                    <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                  </div> 
                  </div>-->

                <!-- <div class="col-md-3 col-sm-6">
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
                    </div> -->
                <!-- /.product-->
                <!-- </div> -->
                <!-- <div class="col-md-3 col-sm-6">
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
                    </div> -->
                <!-- /.product-->
                <!-- </div>
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
                    </div> -->
                <!-- /.product-->
                <!-- </div>
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
                    </div> -->
                <!-- /.product-->
                <!-- </div>
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
                    </div> -->
                <!-- /.product-->
              </div>
            </div>
          </div>
          <!-- /.col-md-9-->
            <div class="col-md-3 col-sm-6">
              <div class="box same-height">
                <h3>You may also like these products</h3>
              </div>
            </div>
            <?php
            $get_products = "SELECT * FROM products order by rand() LIMIT 0,4";
            $run_products = mysqli_query($con, $get_products);
            while ($res_products = mysqli_fetch_array($run_products)) {
              $pro_id = $res_products['product_id'];
              $pro_title = $res_products['product_title'];
              $pro_price = $res_products['product_price'];
              $pro_img1 = $res_products['product_img1'];
              echo " <div class='col-md-2 col-sm-6'>
                        <div class='mb-2'><a href='details.php?pro_id=$pro_id'><img src='admin_area/admin_product_images/$pro_img1' class='img-responsive' height='250'></a></div>
                        <div class='text-center'>
                            <h4 class='mb-2'>$pro_title</h4>
                            <p class='price'>&#8377;$pro_price</p>
                        </div>
                    </div>";
            }
            ?>
            <!-- /.product-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- *** FOOTER *** -->
  <?php include('includes/footer.php'); ?>
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