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
                            <li class="list-inline-item"><a href="../customer_register.php">Register</a></li>
                            <li class="list-inline-item"><a href="my_account.php">My Account</a></li>
                            <li class="list-inline-item"><a href="../cart.php">Go To Cart</a></li>
                            <li class="list-inline-item"><a href="../customer_register.php">Login</a></li>
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
                        <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="../shop.php" class="nav-link">Shop</a></li>
                        <li class="nav-item"><a href="my_account.php" class="nav-link active">My Account</a></li>
                        <li class="nav-item"><a href="../cart.php" class="nav-link">Shopping Cart</a></li>
                        <li class="nav-item"><a href="../contact.php" class="nav-link">Contact us</a></li>
                    </ul>
                    <div class="navbar-buttons d-flex justify-content-end">
                        <!-- /.nav-collapse-->
                        <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                        <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="../cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
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
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">My Account</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Customer Sidebar -->
                    <?php include('includes/sidebar.php'); ?>
                    <!-- Customer Sidebar -->

                    <!-- my orders page begins-->
                    <?php if (isset($_GET['my_orders'])) {
                        include('my_orders.php');
                    } ?>
                    <!-- my orders page ends -->

                    <!-- Edit page begins-->
                    <?php if (isset($_GET['edit_account'])) {
                        include('edit_account.php');
                    } ?>
                    <!-- Edit page ends -->

                    <!-- change password page begins-->
                    <?php if (isset($_GET['change_password'])) {
                        include('change_password.php');
                    } ?>
                    <!-- change password page ends -->

                    <!-- delete account page begins-->
                    <?php if (isset($_GET['delete_account'])) {
                        include('delete_account.php');
                    } ?>
                    <!-- delete account page ends -->

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