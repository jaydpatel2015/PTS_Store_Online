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
  <script src="styles/jquery/jquery.min.js"></script>
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
            <div class="row products">        
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

      <!-- *** Copyright Start *** -->
       <?php include('./includes/footer.php'); ?> 
      <!-- *** Copyright End ***-->

      <!-- JavaScript files-->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
      <script src="styles/owl.carousel/owl.carousel.min.js"></script>
      <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
      <script src="js/front.js"></script>
</body>
</html>