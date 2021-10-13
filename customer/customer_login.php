<?php
include('includes/db_config.php');
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
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="box">
                            <h1>Login</h1>
                            <p class="lead">Already our customer?</p>
                            <hr>
                            <form action="checkout.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="customer_email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="customer_pass" class="form-control" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a href="../customer_register.php">Register Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="styles/jquery/jquery.min.js"></script>
    <script src="styles/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="styles/jquery.cookie/jquery.cookie.js"> </script>
    <script src="styles/owl.carousel/owl.carousel.min.js"></script>
    <script src="styles/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
</body>
</html>

<?php 
    if(isset($_POST['login'])){
        $customer_email=$_POST['customer_email'];
        $customer_pass=md5($_POST['customer_pass']);
        $select_customer="SELECT * FROM customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
        $run_customer=mysqli_query($con,$select_customer);
        $get_ip=getRealIPaddress();
        $check_customer=mysqli_num_rows($run_customer);
        $select_cart="select * from cart where ip_add='$get_ip'";
        $run_cart=mysqli_query($con,$select_cart);
        $check_cart=mysqli_num_rows($run_cart);
        
        //no customer details
        if($check_customer == 0){
            echo "<div class='alert alert-warning alert-dismissible fade show alert-fixed' role='alert'>
                        <i class='fa fa-times'>&nbsp;&nbsp;</i><h4>Oops! Kindly recheck your login credentials</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>";
            exit();
        }
        // customer registered but nothing in cart
        if($check_customer == 1 AND $check_cart == 0){
            $_SESSION['customer_email']=$customer_email;
            echo    "<div class='alert alert-success alert-dismissible fade show alert-fixed' role='alert'>
                        <i class='fa fa-check'>&nbsp;&nbsp;</i><h4>Login Successful</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        }else{
            $_SESSION['customer_email']=$customer_email;
            echo    "<div class='alert alert-success alert-dismissible fade show alert-fixed' role='alert'>
                        <i class='fa fa-check'>&nbsp;&nbsp;</i><h4>Login Successful</h4>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }

    }
?>