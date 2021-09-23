<?php 
    include "../includes/db_config.php";
    include "./functions/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/bootstrap4.6.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/primetime_icon.png" type="image/x-icon">
    <title>Prime Time Shopper</title>
</head>
<body>
<!-- Top Bar Starts Here -->
<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" id="btnWelcome" class="btn btn-primary btn-sm">Welcome,Guest</a>
            <a href="#">Shopping Cart Total Price: INR 500, Total Item 2</a>
        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li><a href="../customer_register.php">Register</a></li>
                <li><a href="my_account.php">My Account</a></li>
                <li><a href="../gotocart.php">Go To Cart</a></li>
                <li><a href="../login.php">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Bar Ends Here -->
    
<!-- Navbar Starts from here -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php"><img src="images/primetimelogo.png" height="150" width="220" alt="siteLogoURL"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Navigation</span>
                <i class="bi bi-search"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../shop.php">Shop</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="my_account.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cart.php">Shopping Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contactus.php">Contact Us</a>
                </li>
            </ul>
        </div>
        
        <div class="navbar-collapse collapse-right searchBtn">
            <button class="btn btn-primary my-2 ml-2 mr-2 my-sm-0" type="button" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="bi bi-search"></i>
            </button>
            <a href="cart.php" class="btn btn-primary navbar-btn right cartBtn">
                <i class="bi bi-cart-check"></i>
                <span>4 Items in Cart</span>
            </a>
        </div>
        <div class="collapse clearfix" id='search'>
            <form class="form-inline ml-2 my-lg-0" action="result.php" method="get">
                <div class="input-group"></div>
                    <input class="form-control mr-sm-2" name="userquery" type="search" placeholder="Search" aria-label="Search" required>
                    <button class="btn btn-primary mb-2 my-sm-1" name="search" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>   
    </div>
</div>
<!-- Navbar Ends Here -->

<!-- accordian starts here -->
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item" id="breadcrumbHomeLink"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- according ends here -->

<div class="container">
<!-- my_account Sidebar starts Here-->
<?php include '../customer/includes/sidebar.php'; ?>
<!-- my_account Sidebar Ends here -->

<!-- my_account main page starts here -->
<?php if(isset($_GET['my_orders'])){
    include "my_orders.php";
} ?>

<?php if(isset($_GET['edit_account'])){
    include "edit_account.php";
} ?>

<?php if(isset($_GET['change_password'])){
    include "change_password.php";
} ?>

<?php if(isset($_GET['delete_account'])){
    include "delete_account.php";
} ?>

<!-- my_account main page ends here -->
</div>

<!-- Footer Starts here -->
<?php include '../customer/includes/footer.php';?>
<!-- Footer Ends here -->
