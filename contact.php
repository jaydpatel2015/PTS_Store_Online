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
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
</head>

<body>
     <!-- Header File Loads here -->
     <?php include ('includes/header.php'); ?>
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
                                <li aria-current="page" class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12">
                        <div id="contact" class="box">
                            <h1>Contact</h1>
                            <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                            <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3><i class="fa fa-map-marker"></i>Address</h3>
                                    <p> <strong>Prime Time Shopper</strong><br>Surat,Gujarat<br>395007<br>India</p>
                                </div>
                                <!-- /.col-sm-4-->
                                <div class="col-md-4">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    <p class="text-muted">This number is toll free if calling within India otherwise we advise you to use the electronic form of communication.</p>
                                    <strong class="text-danger">24 X 7 Support</strong>
                                    <p><strong>+91-0130401012</strong></p>
                                </div>
                                <!-- /.col-sm-4-->
                                <div class="col-md-4">
                                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                    <p class="text-muted">Please feel free to share your thoughts, we would love to hear from you</p>
                                    <strong><a href="mailto:">contactus@pts.com</a></strong>
                                </div>
                                <!-- /.col-sm-4-->
                            </div>
                            <hr>
                            <div class="row">
                                <!-- /.col-sm-4-->
                                <div class="col-md-4 mb-2">
                                    <h3><i class="fa fa-university"></i> Bank Details</h3>
                                    <strong>HDFC Bank, LTD</strong><br>
                                    <strong>Branch: Ghoddod Road, Surat, Gujarat</strong><br>
                                    <strong>IFSC/NEFT:HDFC01777</strong>
                                </div>
                                <!-- /.col-sm-4-->

                                <!-- /.col-sm-4-->
                                <div class="col-md-4 mb-2">
                                    <h3><i class="fa fa-university"></i> Bank Details</h3>
                                    <strong>Axis Bank, LTD</strong><br>
                                    <strong>Branch: Ghoddod Road, Surat, Gujarat</strong><br>
                                    <strong>IFSC/NEFT:AXIS01234</strong>
                                </div>
                                <!-- /.col-sm-4-->

                                <!-- /.col-sm-4-->
                                <div class="col-md-4 mb-2">
                                    <h3><i class="fa fa-university"></i> Bank Details</h3>
                                    <strong>Yes Bank LTD</strong><br>
                                    <strong>Branch: Ghoddod Road, Surat, Gujarat</strong><br>
                                    <strong>IFSC/NEFT:YES0017777</strong>
                                </div>
                                <!-- /.col-sm-4-->
                            </div>
                            <!-- /.row-->
                            <hr>
                            <div id="map"></div>
                            <hr>
                            <h2>Contact form</h2>
                            <form method='post' action=''>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input id="firstname" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input id="lastname" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input id="subject" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row-->
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-9-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/map.js"></script>
</body>

</html>