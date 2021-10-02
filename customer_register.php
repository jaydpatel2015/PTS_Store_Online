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
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
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
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Register / Sign-in</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <h1>New account</h1>
                            <p class="lead">Not our registered customer yet?</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name='c_name' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name='c_email' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name='c_password' class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Reconfirm Password</label>
                                    <input id="password" type="password" name='r_c_password' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Country</label>
                                    <input id="country" name='c_country' type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input id="state" name='c_state' type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input id="state" name='c_city' type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="address">address</label>
                                    <input id="address" name='c_address' type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="image">Profile Pic</label>
                                    <input id="profile_pic" name='c_img' type="file" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name='register' class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box">
                            <h1>Login</h1>
                            <p class="lead">Already our customer?</p>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="password" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    

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