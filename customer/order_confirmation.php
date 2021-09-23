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

    <!-- Orders Confirmation starts here -->
    <div class="col-md-9 mb-3 p-3 text-center bg-white">
        <div class="card mb-3">
                <img class="img-responsive" src="../images/primetimelogo.png" style="height:35%;width:35%;margin-left:40%;" alt="Prime Time shopper" srcset="">
            <div class="card-header">
                <h1>Your order is on the way</h1>
                <button class="btn btn-primary mb-2 bg-dark">Track your Order</button>
                <p>Please allow us 24 Hours to Track your Order</p>
            </div>
            <div class="card-body">
                <p class="text-left">Hey <strong>Jay</strong>,</p>
                <p class="text-left">Thank you for purchasing from <a href="www.pts.com" style="font-weight: 600;">Prime Time Shopper</a> </p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Summary</th>
                                <th>Shipping</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <span style="font-weight: 600;">Invoice # :</span>XT6A3C8D<br>
                                    <span style="font-weight: 600;">Order # :</span> 85595<br>
                                    <span style="font-weight: 600;">Order Date :</span> 23.02.2021<br>
                                    <span style="font-weight: 600;">Order Total :</span> &#8377;3196 <br>
                                </td>
                                <td>
                                    <h4>Mr. Jay Patel</h4>
                                    <address>
                                        Bunglow no.401, ModiNagar Society,<br>
                                        Barakhambha Road, <br>
                                        New Delhi,India
                                    </address>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                    <thead>
                            <tr>
                                <th colspan='2'>Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th colspan="1">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src='../admin_area/admin_product_images/T-Shirts/Roadster/t_shirts_roadster_4.JPG'></td>
                                <td>Roadster Round Neck Black T-Shirt</td>
                                <td>2</td>
                                <td>&#8377; 799</td>
                                <td>&#8377; 1598</td>
                            </tr>
                            <tr>
                                <td><img src='../admin_area/admin_product_images/T-Shirts/Wrogn/T_shirts_Wrogn_3.JPG'></td>
                                <td>Wrogn Men Round Neck Black T-Shirt</td>
                                <td>1</td>
                                <td>&#8377; 799</td>
                                <td>&#8377; 799</td>
                            </tr>
                            <tr>
                                <td><img src='../admin_area/admin_product_images/T-Shirts/Hrx By Hrithik Roshan/T_shirt_HRX_5.JPG'></td>
                                <td>HRX By Hrithik Men Round Neck Black T-Shirt</td>
                                <td>1</td>
                                <td>&#8377; 799</td>
                                <td>&#8377; 799</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">Total</th>
                                <th class="text-center" colspan="1">&#8377; 3196</th>
                            </tr>
                            <tr>
                                <th colspan="4">Shipping & Handling Charges</th>
                                <th class="text-center" colspan="1">&#8377; 0</th>
                            </tr>
                            <tr>
                                <th colspan="4">Taxes</th>
                                <th class="text-center" colspan="1">&#8377; 0</th>
                            </tr>
                            <tr>
                                <th colspan="4">Grand Total</th>
                                <th colspan="1" class="text-center">&#8377; 3196</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-right mb-2">
            <button class="btn btn-primary bg-dark">Print Order Details</button>
            <button class="btn btn-primary bg-dark">Print Invoice</button>
        </div>
        <div class="card-group">
            <div class="card bg-light">
                <img class="card-img-top p-2" src="./cust_img/call-center.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">24 X 7 Assistance</h5>
                </div>
            </div>
            <div class="card bg-light">
                <img class="card-img-top p-2" src="./cust_img/delivery-truck.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Free Shipping & Delivery on Order above &#8377; 599</h5>
                </div>
            </div>
            <div class="card bg-light">
                <img class="card-img-top p-2" src="./cust_img/customer-satisfaction.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Satisfaction guaranteed</h5>
                </div>
            </div>
            <div class="card bg-light">
                <img class="card-img-top p-2" src="./cust_img/package.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Hassle Free Policy</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Comfirmation Ends here -->
</div>

<!-- Footer Starts here -->
<?php include 'includes/footer.php';?>
<!-- Footer Ends here -->














