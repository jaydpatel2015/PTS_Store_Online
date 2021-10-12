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
                <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
              </ol>
            </nav>
          </div>
          <div id="basket" class="col-lg-9">
            <div class="box">
              <form method="POST" action="cart.php" enctype="multipart/form-data">
                <h1>Shopping cart</h1>
                <?php
                $ip_add = getRealIPaddress();
                $select_cart = "SELECT * FROM cart where ip_add='$ip_add'";
                $run_cart = mysqli_query($con, $select_cart);
                $count = mysqli_num_rows($run_cart);
                ?>
                <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart.</p>
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
                      <?php
                      $total = 0;
                      while ($row_cart = mysqli_fetch_array($run_cart)) {
                        $pro_id = $row_cart['p_id'];
                        $pro_size = $row_cart['size'];
                        $pro_qty = $row_cart['qty'];

                        $get_products = "SELECT * FROM products where product_id='$pro_id'";
                        $run_products = mysqli_query($con, $get_products);
                        while ($res_product = mysqli_fetch_array($run_products)) {
                          $product_title = $res_product['product_title'];
                          $product_img1 = $res_product['product_img1'];
                          $only_price = $res_product['product_price'];
                          $sub_total = $res_product['product_price'] * $pro_qty;
                          $total += $sub_total;
                      ?>
                          <tr>
                            <td><img src="admin_area/admin_product_images/<?php echo $product_img1; ?> "></td>
                            <td><a href="details.php?pro_id=<?php echo $pro_id ?>"><?php echo $product_title; ?></a></td>
                            <td><?php echo $pro_size ?></td>
                            <td><?php echo $pro_qty ?></td>
                            <td>&#8377;<?php echo $only_price ?></td>
                            <td>&#8377;0.00</td>
                            <td class="text-center"><input type="checkbox" name="remove[]" value="<?php echo $pro_id ?>"></td>
                            <td>&#8377;<?php echo $sub_total ?></td>
                          </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="7">Total</th>
                        <th colspan="1">&#8377;<?php echo $total ?></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.table-responsive-->
                <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                  <div class="left"><a href="index.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                  <div class="right">
                    <button class="btn btn-primary" type='submit' name='update'><i class="fa fa-refresh"></i> Update cart</button>
                    <a href='checkout.php' class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </form>
            </div>
            <!-- Removal of item from cart -->
            <?php function update_cart()
            {
              global $con;
              if (isset($_POST['update'])) {
                foreach ($_POST['remove'] as $remove_id) {
                  $delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";
                  $run_query = mysqli_query($con, $delete_product);
                  if ($run_query) {
                    echo "<script>window.open('cart.php','_self')</script>";
                    echo "<div class='alert alert-success' role='alert'>";
                    echo "<i class='fa fa-thumbs-up'></i>Success ! Product has been delete successfully from cart</div>";
                  }
                }
              }
            }
            echo @$up_cart = update_cart();
            ?>
            <!-- /.box-->
            <!-- Removal of item from cart -->
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
                      <th>&#8377;<?php echo $total ?></th>
                    </tr>
                    <tr>
                      <td>Shipping and handling</td>
                      <th>&#8377;0.00</th>
                    </tr>
                    <tr>
                      <td>Tax</td>
                      <th>&#8377;0.00</th>
                    </tr>
                    <tr class="total">
                      <td>Total</td>
                      <th>&#8377;<?php echo $total ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- coupon code -->
            <!-- <div class="box">
              <div class="box-header">
                <h4 class="mb-0">Coupon code</h4>
              </div>
              <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control"><span class="input-group-append">
                    <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                </div> 
              </form>
            </div> -->
            <!-- coupon code -->
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