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
    <!-- Header File -Customer Section -->
    <?php include ('./includes/header.php'); ?>
    <!-- Header File -Customer Section -->
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